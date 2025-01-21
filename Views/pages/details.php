<?php
require_once "../../Config/db.php";
require_once "../../Class/Enseignant.php";
require_once "../../Class/tags.php";
require_once "../../Class/CoursDocument.php";
require_once "../../Class/Etudiant.php";




if (isset($_GET['download_pdf'])) {

    $coursId = $_GET['download_pdf'];
  
    $cours = new CoursDocument('', '', '', '', '', '','','');
    $coursUrl = $cours->getFileNameById($coursId);      
    
    // Lire et envoyer le contenu du fichier au navigateur
    $filePath = realpath($coursUrl);
    
    if (file_exists($filePath)) {

        header("Content-Type: application/pdf");
        header("Content-Disposition: inline; filename=" . basename($filePath));

     // Lire et envoyer le contenu du fichier au navigateur
        readfile($filePath);

        exit;
    } else {
        echo "Le fichier PDF n'existe pas.";
    }

}

if (isset($_GET['detiles'])) {
    $detile = $_GET['detiles'];
    $afficheCours = new Enseignant();
    $detiles = $afficheCours->afficheCours(null,$detile);
}

//  total Etudiant
 $total = $afficheCours->nombreDinscriptions($detile);


$tags = new tags();
$alltags = $tags->afficherTags($tags);



$cours_id = $_GET['detiles'];
$id_users = $_SESSION['id_users'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_b'])) {

    $Etudiant = new Etudiant('', '', '', '', '', $cours_id, $id_users,'','');
    $users = $Etudiant->cours_inscriptions($cours_id, $id_users);

    header("Location: details.php?detiles=$cours_id&true");

}

$Etudiant = new Etudiant('', '', '', '', '', $cours_id, $id_users,'','');
$users = $Etudiant->selectEtudiant($cours_id, $id_users);


if (!isset($_SESSION['role']) || $_SESSION['role'] === '' || $_SESSION['role'] == 'Enseignant' || $_SESSION['role'] == 'Administrateur') {
    header('Location: ../my-account/login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Professeur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>


<body class="bg-gray-50">
    <!-- Navigation -->
    <?php
if (isset($_GET['true'])) { ?>
    <script>

        Swal.fire({
            title: 'Connexion réussie!',
            text: 'Veuillez patienter pendant que votre demande est en cours de traitement.',
            icon: 'success',
            confirmButtonText: 'D\'accord'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?detiles= <?=$cours_id?> ;";
            }
        });

    </script>
 
 
<?php } ?>
    <nav class="sticky top-0 bg-white shadow-sm px-6 py-4 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex space-x-8">
                <a href="../index.php" class="text-gray-800 hover:text-indigo-600 transition-colors">Home</a>
                <a href="grid_cours.php" class="text-gray-800 hover:text-indigo-600 transition-colors">Courses</a>
                <a href="etudaint.php"  class="text-gray-800 hover:text-indigo-600 transition-colors">My courses</a>
                <a href="#" class="text-gray-800 hover:text-indigo-600 transition-colors">Shop</a>
                <a href="#" class="text-gray-800 hover:text-indigo-600 transition-colors">Pages</a>
                <a href="#" class="text-gray-800 hover:text-indigo-600 transition-colors">Blogs</a>
                <a href="#" class="text-gray-800 hover:text-indigo-600 transition-colors">Contact</a>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <span
                        class="absolute -top-2 -right-2 bg-indigo-600 text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">0</span>
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <span class="text-gray-600 font-medium">$0.00</span>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="#" class="text-gray-500 hover:text-indigo-600">Home</a></li>
                <li class="text-gray-400">/</li>
                <li><a href="#" class="text-gray-500 hover:text-indigo-600">Courses</a></li>
                <li class="text-gray-400">/</li>
                <li><a href="#" class="text-gray-500 hover:text-indigo-600">Business</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-indigo-600" aria-current="page">The Complete Android Development Course</li>
                
            </ol>
        </nav>

        <!-- Course Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
                    <div class="flex flex-wrap gap-2 mb-6">
                        <div class="flex flex-wrap gap-2 mb-6">
                            <?php
                             
                                $cours = $detiles[0];  
                                $category = $detiles[1];  
                                $utilisateur = $detiles[2];
                                $tags = $detiles[3];
                                $coursvideo = $detiles[4];


                                
                           
                           
                            
                            if (!empty($tags->GetTagNom())) {
                                $tagsArray = explode(',', $tags->GetTagNom());
                              

                                foreach ($tagsArray as $tag):
                                 
                                    ?>
                                    <span
                                        class="px-4 py-1.5 bg-indigo-600 text-white rounded-full text-sm font-medium"><?= htmlspecialchars($tag); ?></span>
                                    <?php
                                endforeach;
                            } else {
                                echo "<p>Aucun tag disponible.</p>";
                            }
                            ?>
                        </div>

                    </div>

                    <h1 class="text-3xl font-bold mb-4"><?= $cours->getTitre()?></h1>

                    <div class="flex flex-wrap items-center gap-6 text-sm text-gray-600 mb-8">
                        <div class="flex items-center">
                            <img src="<?= $utilisateur->getPhotoProfil() ?>" alt="Instructor"
                                class="w-8 h-8 rounded-full mr-2">
                            <span class="font-medium"><?= $utilisateur->getNom() ?></span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.318c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8-3.582-8-8-8zm0 14c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6z" />
                            </svg>
                            <span><?= $total ; ?> Students</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Updated 2 years ago</span>
                        </div>
                    </div>
                    <div>
                        <?= $cours->getDescription() ?>
                    </div>
                    <!-- Course Navigation -->
                    <div class="border-b border-gray-200 -mx-6 px-6 mb-8">
                        <nav class="flex space-x-8">
                            <button
                                class="border-b-2 border-indigo-600 text-indigo-600 font-medium py-4 px-1">Overview</button>
                            <button class="text-gray-500 hover:text-gray-700 font-medium py-4 px-1">Curriculum</button>
                            <button class="text-gray-500 hover:text-gray-700 font-medium py-4 px-1">Instructor</button>
                            <button class="text-gray-500 hover:text-gray-700 font-medium py-4 px-1">Reviews</button>
                        </nav>
                    </div>
                    
                    <!-- Learning Outcomes -->
                    <div class="mb-12">
                        <h2 class="text-2xl font-bold mb-6">What Will I Learn?</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-6 h-6 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <span class="text-indigo-600 font-semibold text-sm">b</span>
                                    </div>
                                    <span class="text-gray-700">Become a UX designer</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-6 h-6 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <span class="text-indigo-600 font-semibold text-sm">b</span>
                                    </div>
                                    <span class="text-gray-700">Build & test a full website design</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-6 h-6 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <span class="text-indigo-600 font-semibold text-sm">b</span>
                                    </div>
                                    <span class="text-gray-700">Create your first UX brief & persona</span>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-6 h-6 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <span class="text-indigo-600 font-semibold text-sm">b</span>
                                    </div>
                                    <span class="text-gray-700">How to use premade UI kits</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-6 h-6 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <span class="text-indigo-600 font-semibold text-sm">b</span>
                                    </div>
                                    <span class="text-gray-700">Master responsive design</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-6 h-6 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <span class="text-indigo-600 font-semibold text-sm">b</span>
                                    </div>
                                    <span class="text-gray-700">Create stunning UI animations</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review Form -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h2 class="text-2xl font-bold mb-4">Write a Review</h2>
                        <p class="text-sm text-gray-500 mb-6">Your email address will not be published. Required fields
                            are marked *</p>

                        <form class="space-y-6">
                            <textarea
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 resize-none"
                                rows="6" placeholder="Your review *" required></textarea>

                            <div class="grid md:grid-cols-2 gap-4">
                                <input type="text" placeholder="Name *"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    required>
                                <input type="email" placeholder="Email *"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    required>
                            </div>

                            <div class="flex items-center">
                                <input type="checkbox" id="saveInfo"
                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                <label for="saveInfo" class="ml-2 text-sm text-gray-600">
                                    Save my information for future comments
                                </label>
                            </div>

                            <button type="submit"
                                class="px-6 py-3 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Post Review
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm p-6 sticky top-24">
                    <?php
                    
                    if (!empty($detiles) && isset($detiles) ) {

                        if ($cours->getdocument() !== null) {?>

                            <img src="<?= htmlspecialchars($cours->getImageCours()) ?>" alt="Course Preview"
                                class="w-full max-h-[300px] object-cover rounded-lg mb-6">

                            <div class="mb-6">
                                <div class="text-3xl font-bold text-gray-900">$39.00</div>
                                <p class="text-sm text-gray-500 mt-1">30-Day Money-Back Guarantee</p>
                            </div>

                            <?php if (isset($users) && $users['etudiant_id'] == $_SESSION['id_users']) { ?>
                                <div class="space-y-4">
                                    <a href="?detiles=<?=$cours->getCoursID()?>&download_pdf=<?= $cours->getCoursID() ?>"
                                        class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition-colors mb-6 text-center block">
                                        Download PDF
                                    </a>
                              

                                <?php } elseif (isset($_SESSION['id_users']) || $users['etudiant_id'] !== $_SESSION['id_users']) { ?>
                                    <form method="POST">
                                        <button name="submit_b" type="submit" id="thumbnail"
                                            class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition-colors mb-6 text-center block">
                                            Inscription
                                        </button>
                                    </form>
                                <?php } ?>


                                <?php
                            // Handle video URL
                        } elseif ($coursvideo->getvideoUrl()!== null) {
                            if (isset($users) && $users['etudiant_id'] == $_SESSION['id_users']) {
                                ?>

                                    <div class="space-y-4">
                                        <div id="video-container">
                                            <iframe id="youtube-video" width="340" height="315"
                                                src="<?= htmlspecialchars($coursvideo->getvideoUrl()) ?>" title="" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen style="border-radius: 20px; margin-bottom: 30px;">
                                            </iframe>

                                        <?php } else { ?>
                                            <div class="space-y-4">
                                                <img src="<?= htmlspecialchars($cours->getImageCours()) ?>" alt="Video thumbnail"
                                                    style="border-radius: 20px; margin-bottom: 30px;">
                                                <form method="POST">
                                                    <button name="submit_b" type="submit" id="thumbnail"
                                                        class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition-colors mb-6 text-center block">
                                                        Inscription
                                                    </button>
                                                </form>

                                            </div>

                            
                                            <?php }
                        
                      ?>
                       
                                            <!-- Check login status and user ID for buttons -->

                                            <?php if (isset($users) && $users['etudiant_id'] !== $_SESSION['id_users']) { ?>
                                                <div class="space-y-4">

                                                <button name="submit_b" id="thumbnail"
                                                    class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition-colors mb-6 text-center block">
                                                    Inscription

                                                    </form>
                                                    <?php }elseif(isset($users) && $users['etudiant_id'] === $_SESSION['id_users']){ ?>
                                               
                                                    <form method="POST">
                                                        <button id="watch-video-btn"
                                                            class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition-colors mb-6 text-center block">
                                                            Watch Video
                                                        </button>
                                                    </form>

                                                   
                                                <?php } ?>
         <?php }
                        
                      } ?>
                                    <h3 class="font-bold text-gray-900">Course Includes:</h3>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-600">Duration</span>
                                        <span class="font-medium">10 Minutes</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-600">Lessons</span>
                                        <span class="font-medium">6 lessons</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-600">Quizzes</span>
                                        <span class="font-medium">3 quizzes</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-600">Level</span>
                                        <span class="font-medium">Beginner</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-600">Language</span>
                                        <span class="font-medium">English</span>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <script>
                document.getElementById("watch-video-btn").addEventListener("click", function () {
                    var videoContainer = document.getElementById("video-container");

                    if (!videoContainer.classList.contains("hidden")) {
                        var iframe = document.getElementById("youtube-video");
                        iframe.src = iframe.src + "&autoplay=1";
                    }
                });

            </script>

</html>