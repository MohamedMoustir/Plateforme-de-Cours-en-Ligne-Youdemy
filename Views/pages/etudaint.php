<?php
require_once "../../Config/db.php";

require_once "../../Class/Etudiant.php";

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $Etudiant = new Etudiant('', $email, '', '', '', '', '', '', '');
    $users = $Etudiant->afficheCoursEtudiant($email);

}
if (!isset($_SESSION['role']) || $_SESSION['role'] === '' || $_SESSION['role'] == 'Administrateur' || $_SESSION['role'] == 'Enseignant') {

    header('Location: ../my-account/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Cours</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="sticky top-0 bg-white shadow-sm px-6 py-4 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex space-x-8">
                <a href="../index.php" class="text-gray-800 hover:text-indigo-600 transition-colors">Home</a>
                <a href="grid_cours.php" class="text-gray-800 hover:text-indigo-600 transition-colors">Courses</a>
                <a href="etudaint.php" class="text-gray-800 hover:text-indigo-600 transition-colors">My courses</a>
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
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Mes Cours</h1>
            <p class="mt-2 text-gray-600">Accédez à vos cours et suivez votre progression</p>
        </div>

        <!-- Progress Overview -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500 text-sm">Cours en cours</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">4</p>
                    </div>
                    <div class="bg-blue-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500 text-sm">Cours terminés</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">2</p>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500 text-sm">Heures totales</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">24h</p>
                    </div>
                    <div class="bg-purple-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">


            <?php foreach ($users as $user): ?>
                <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="<?= $user['imageCours'] ?>" alt="Course thumbnail" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 text-sm text-yellow-700 bg-yellow-100 rounded-full">Nouveau</span>
                            <span class="text-sm text-gray-500">4h restantes</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2"><?= $user['categorieNom'] ?></h3>
                        <div class="mb-4">
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-yellow-600 h-2 rounded-full" style="width: 20%"></div>
                            </div>
                            <div class="text-sm text-gray-500 mt-1">20% terminé</div>
                        </div>
                        <a href="details.php?detiles=<?= $user['cours_id'] ?>"
                            class="block w-full text-center bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-700 transition-colors">
                            Commencer
                        </a>
                    </div>

                </div>
            <?php endforeach ?>

        </div>
    </main>
</body>

</html>