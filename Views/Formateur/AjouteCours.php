<?php

require_once "../../Class/CoursDocument.php";
require_once "../../Class/categorie.php";
require_once "../../Config/db.php";
require_once "../../Class/Utilsateur.php";
require_once "../../Class/tags.php";
require_once "../../Class/CoursVideo.php";
require_once "../../Class/Enseignant.php";

$tags = new tags();

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_bt'])) {

    $titre = $_POST['courseTitle'] ?? '';
    $description = $_POST['courseDescription'] ?? null;
    $enseignant_id = $_SESSION['id_users'];
    $videoUrl = $_POST['courseVideo'] ?? null;
    $imageCours = $_FILES['avatar'] ?? null;
    $category_id = $_POST['courseCategory'] ?? null;
    $document = $_FILES['pdfFile'] ?? null;
    $tag = $_POST['tags'] ?? null;

    if (empty($titre) || empty($description) || empty($enseignant_id) || empty($category_id) || empty($tag)) {
        echo "Tous les champs sont obligatoires !";
        exit;
    }

    if (isset($videoUrl) && !empty($videoUrl) && filter_var($videoUrl, FILTER_VALIDATE_URL) && !empty($category_id)) {
        $videoChoice = new CoursVideo($titre, $description, $enseignant_id, $category_id, $statu = null, $imageCours, $videoUrl, $coursID = null);
        $lastid = $videoChoice->AjouteCours($videoChoice);
    } elseif (isset($document) && !empty($document)) {
        $AjouteCours = new CoursDocument($titre, $description, $enseignant_id, $category_id, $statu = null, $imageCours, $document, $coursID = null);
        $lastid = $AjouteCours->AjouteCours($AjouteCours);
    }



    $tags->insertAsoustion($lastid, $tag);


}


// category
$category = new Category('', '', '');
$allcategory = $category->afficherCategories();
// tags
$alltags = $tags->afficherTags($tags);

$email = $_SESSION['email'];
$id = $_SESSION['id_users'];
$AjouteCours = new Enseignant('', $email);

$allcours = $AjouteCours->afficheCours($email, null);


if (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    $AjouteCours->removeCours($id);
}



if (!isset($_SESSION['role']) || $_SESSION['role'] === '' || $_SESSION['role'] == 'Administrateur' || $_SESSION['role'] == 'Etudiant') {
    header('Location: ../my-account/login.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <!-- Update this part in your sidebar -->
    <aside class="fixed  left-0 top-0 w-64 h-screen bg-[#1E2A49] text-white">
        <div class="p-4 h-full flex flex-col"> <!-- Added h-full and flex flex-col -->
            <h1 class="text-xl font-bold mb-8">
                <i class="fas fa-chart-line mr-2"></i>TailBoard
            </h1>

            <nav class="space-y-2">
                <a href="AjouteCours.php" class="block px-4 py-2 rounded hover:bg-blue-600 bg-blue-500">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>
                <a href="inscri.php" class="block px-4 py-2 rounded hover:bg-gray-700">
                    <i class="fas fa-chart-bar mr-2"></i> List etidiant
                </a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">
                    <i class="fas fa-dollar-sign mr-2"></i> Premium
                </a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">
                    <i class="fas fa-users mr-2"></i> Validations
                </a>
            </nav>

            <!-- Logout button - added at bottom -->
            <div class="mt-auto"> <!-- This pushes the logout to bottom -->
                <a href="../../views/my-account/login.php?logout"
                    class="block px-4 py-2 text-white rounded hover:bg-red-600 transition-colors duration-200">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-8">
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Finance</h2>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Sales Card -->
                <div class="bg-cyan-500 rounded-lg p-6 text-white">
                    <h3 class="text-lg mb-2">Total Cours</h3>
                    <div class="text-3xl font-bold mb-2"><?= $AjouteCours->TotalCours($id) ?></div>
                    <div class="flex items-center">
                        <span class="text-sm bg-white/20 px-2 py-1 rounded">
                            <i class="fas fa-arrow-up mr-1"></i>2.5%
                        </span>
                    </div>
                </div>

                <!-- Gross Profit Card -->
                <div class="bg-pink-500 rounded-lg p-6 text-white">
                    <h3 class="text-lg mb-2">Cours disponibles </h3>
                    <div class="text-3xl font-bold mb-2"><?= $AjouteCours->TotalCoursDisponibles($id ) ?></div>
                    <div class="flex items-center">
                        <span class="text-sm bg-white/20 px-2 py-1 rounded">
                            <i class="fas fa-arrow-up mr-1"></i>1.8%
                        </span>
                    </div>
                </div>

                <!-- Operating Profit Card -->
                <div class="bg-amber-500 rounded-lg p-6 text-white">
                    <h3 class="text-lg mb-2">Cours non disponibles</h3>
                    <div class="text-3xl font-bold mb-2"><?= $AjouteCours->TotalCoursnonDisponibles($id) ?></div>
                    <div class="flex items-center">
                        <span class="text-sm bg-white/20 px-2 py-1 rounded">
                            <i class="fas fa-arrow-up mr-1"></i>3.2%
                        </span>
                    </div>
                </div>

                <!-- Net Profit Card -->
                <div class="bg-emerald-500 rounded-lg p-6 text-white">
                    <h3 class="text-lg mb-2">Total d'étudiants inscrits</h3>
                    <div class="text-3xl font-bold mb-2"><?= $AjouteCours->TotalCoursInscrits($AjouteCours) ?></div>
                    <div class="flex items-center">
                        <span class="text-sm bg-white/20 px-2 py-1 rounded">
                            <i class="fas fa-arrow-up mr-1"></i>1.4%
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <!-- Advanced Table -->
        <div class="bg-white rounded-lg shadow-sm mb-8">
            <div class="p-4 border-b flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Rechercher..."
                            class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <select class="px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                        <option>Toutes les catégories</option>
                        <?php foreach ($allcategory as $category) {
                            echo '<option value="' . htmlspecialchars($category->getCategoryID()) . '">' . htmlspecialchars($category->getCategoryName()) . '</option>';
                        }

                        ?>



                    </select>
                </div>
                <button onclick="document.getElementById('addCourseModal').classList.remove('hidden')"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-plus mr-2"></i>Nouveau Cours
                </button>
            </div>

            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex items-center cursor-pointer">
                                Titre
                                <i class="fas fa-sort ml-2"></i>
                            </div>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Catégorie</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Statut</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    <?php
                    if (is_array($allcours) || is_object($allcours)) {


                        foreach ($allcours as $cour):

                            $cours = $cour[0];
                            $category = $cour[1];
                            $utilisateur = $cour[2];
                            $tags = $cour[3];
                            $coursvideo = $cour[4];


                            if ($res = $cours->getStatu()):
                                if ($res == 'approved') {
                                    $msg = 'approved';
                                    $style = 'text-white  bg-green-700';
                                } elseif ($res == 'rejected') {
                                    $msg = 'rejected';
                                    $style = 'bg-red-700 text-white';
                                } else {
                                    $msg = 'Pre-order ';
                                    $style = '';
                                }


                                ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <img src="<?= $cours->getImageCours() ?>" class="h-10 w-10 rounded-lg mr-3">
                                            <div>
                                                <div class="font-medium"><?= $cours->getTitre() ?></div>
                                                <div class="text-sm text-gray-500">Par <?= $utilisateur->getNom() ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4"><?= $cours->getDescription() ?></td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800"><?= $category->getCategoryName() ?></span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 <?= $style ?>"><?= $msg ?></span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></a>
                                        <a href="upditeCours.php?edit=<?= $cours->getcoursId() ?>"
                                            class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-edit"></i></a>
                                        <a href="AjouteCours.php?remove=<?= $cours->getcoursId() ?>"
                                            class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach;
                    } ?>

                    <!-- More rows... -->
                </tbody>
            </table>
        </div>

        <!-- Modal for adding a new course -->
        <div id="addCourseModal"
            class=" hidden fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
            <div class="bg-white p-8 rounded-lg w-1/3 shadow-lg scale-[0.8]">
                <h2 class="text-2xl font-bold mb-6 text-blue-600">Ajouter un Cours</h2>

                <form method="POST" enctype="multipart/form-data" class="">
                    <div class="mb-4">
                        <label for="courseTitle" class="block text-sm font-medium text-gray-700">Titre du Cours</label>
                        <input type="text" id="courseTitle" name="courseTitle"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="courseDescription"
                            class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="courseDescription" name="courseDescription"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                            required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="courseCategory" class="block text-sm font-medium text-gray-700">Catégorie</label>
                        <select id="courseCategory" name="courseCategory"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                            required>
                            <option>Toutes les catégories</option>
                            <?php foreach ($allcategory as $category) {
                                echo '<option value="' . htmlspecialchars($category->getCategoryID()) . '">' . htmlspecialchars($category->getCategoryName()) . '</option>';
                            } ?>
                        </select>
                    </div>

                    <!-- Tags Input -->
                    <div class="mb-4">
                        <select id="courseCategory" name="tags[]" multiple
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required
                            multiple>
                            <?php foreach ($alltags as $tag) {


                                echo '<option value="' . htmlspecialchars($tag->GetTagId()) . '">' . htmlspecialchars($tag->GetTagNom()) . '</option>';
                            } ?>
                        </select>

                    </div>

                    <!-- Ajouter choix pour Video ou URL -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Sélectionner Type d'Entrée</label>
                        <div class="flex items-center space-x-4">
                            <label for="videoChoice" class="flex items-center space-x-2">
                                <input type="radio" id="videoChoice" name="videoChoice" value="video"
                                    class="focus:ring-blue-500" onclick="toggleCourseInput('video')">
                                <span>Vidéo</span>
                            </label>
                            <label for="urlChoice" class="flex items-center space-x-2">
                                <input type="radio" id="urlChoice" name="courseType" value="url"
                                    class="focus:ring-blue-500" onclick="toggleCourseInput('Document')">
                                <span>Document</span>
                            </label>
                        </div>
                    </div>

                    <!-- Champ vidéo -->
                    <div id="videoField" class="mb-4 hidden">
                        <label for="courseVideo" class="block text-sm font-medium text-gray-700">URL de la Vidéo</label>
                        <input type="text" id="courseVideo" name="courseVideo"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    </div>

                    <!-- Champ URL -->
                    <div id="urlField" class="mb-4 hidden">
                        <input type="file" name="pdfFile" accept=".pdf">
                        <input type="submit" value="Upload PDF">
                    </div>

                    <!-- Image du Cours -->
                    <div class="mb-4">
                        <label for="courseImage" class="block text-sm font-medium text-gray-700">Image du Cours</label>
                        <div class="relative">
                            <input type="file" id="avatar" name="avatar" class="w-full px-4 py-2 border rounded-lg "
                                required>
                        </div>
                    </div>

                    <div class="flex justify-between">
                        <button type="button"
                            onclick="document.getElementById('addCourseModal').classList.add('hidden')"
                            class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-all duration-300">Annuler</button>
                        <button type="submit" name="submit_bt"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-all duration-300">Ajouter</button>
                    </div>
                </form>

            </div>
        </div>




        <script>
            function toggleCourseInput(type) {
                if (type === 'video') {
                    document.getElementById('videoField').classList.remove('hidden');
                    document.getElementById('urlField').classList.add('hidden');
                } else if (type === 'Document') {
                    document.getElementById('urlField').classList.remove('hidden');
                    document.getElementById('videoField').classList.add('hidden');
                }
            }
        </script>


    </main>
</body>

</html>