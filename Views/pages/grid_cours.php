<?php
require_once "../../Config/db.php";
require_once "../../Class/Etudiant.php";
require_once "../../Class/Enseignant.php";
require_once "../../Class/Utilsateur.php";



if (isset($_POST['category'])) {

    $category = htmlspecialchars($_POST['category']);

    header('Location: grid_cours.php?page-nr=1&category=' . $category);


}
$afficheCours = new Utilisateur();
$gridCours = $afficheCours->paginationCours();
$pages = $afficheCours->getPage();

$totalnumber = new Enseignant();




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiklearn</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Top Navigation Bar -->
    <nav class="bg-white border-b">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Left Side -->
                <div class="flex items-center space-x-4">
                    <img src="logo.png" alt="Quiklearn" class="h-8">
                    <div class="relative">
                        <button class="flex items-center text-gray-700 px-3 py-2 text-sm">
                            All Categories
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                    <!-- Search Bar -->
                    <div class="relative flex items-center">
                        <input type="text" placeholder="Find Your Courses..."
                            class="w-[400px] pl-4 pr-10 py-2 border rounded-lg focus:outline-none focus:border-purple-500">
                        <button class="absolute right-3 bg-purple-600 text-white px-4 py-1 rounded-md">
                            Search
                        </button>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="flex items-center space-x-6">
                    <div class="flex items-center text-gray-600">
                        <i class="fas fa-phone-alt mr-2"></i>
                        <span>Emergency Help!</span>
                        <span class="ml-1 text-gray-800">+1212-226-3126</span>
                    </div>
                    <button class="text-gray-700 hover:text-gray-900">Login</button>
                    <a href="../my-account/login.php?logout"
                        class="bg-purple-900 text-white px-4 py-2 rounded-lg hover:bg-purple-800">
                        log out
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Secondary Navigation -->
    <nav class="bg-white border-b">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-12">
                <!-- Left Menu -->
                <div class="flex space-x-8">
                    <a href="../index.php" class="text-gray-700 hover:text-purple-600">Home</a>
                    <a href="grid_cours.php" class="text-gray-800 hover:text-indigo-600 transition-colors">Courses</a>
                    <a href="etudaint.php" class="text-gray-800 hover:text-indigo-600 transition-colors">My courses</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600">Shop</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600">Pages</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600">Blogs</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600">Contact</a>
                </div>
                <!-- Cart -->
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <i class="fas fa-shopping-cart text-gray-600"></i>
                        <span class="ml-2 text-orange-500">1</span>
                    </div>
                    <span class="text-purple-600">$0.00</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-8">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <!-- Left Side -->
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 mb-2">Our Courses</h1>
                    <div class="flex items-center text-sm text-gray-600">
                        <a href="index.php" class="hover:text-purple-600">Home</a>
                        <span class="mx-2">•</span>
                        <span>Courses</span>
                    </div>
                </div>
                <!-- Right Side Image -->
                <img src="data:image/jpeg;base64,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"
                    alt="Education" class="h-24">
            </div>
        </div>
    </div>
</body>

</html>
<!-- Add this after the breadcrumb section -->

<div class="container mx-auto px-4 py-8">
    <div class="flex gap-8">
        <!-- Left Sidebar Filters -->
        <div class="w-64 space-y-6">
            <!-- Search -->
            <form method="POST" class="bg-white p-4 rounded-lg shadow-sm">
                <h3 class="font-semibold mb-3">Search</h3>
                <input type="text" name="category" placeholder="Search Course"
                    class="w-full px-4 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:border-purple-500">
            </form>

            <!-- Price Filter -->
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h3 class="font-semibold mb-3">Price</h3>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded text-purple-600 mr-2">
                        <span class="text-gray-700">Free</span>
                        <span class="text-gray-400 text-sm ml-auto">(4)</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded text-purple-600 mr-2">
                        <span class="text-gray-700">Paid</span>
                        <span class="text-gray-400 text-sm ml-auto">(10)</span>
                    </label>
                </div>
            </div>

            <!-- Categories -->
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h3 class="font-semibold mb-3">Categories</h3>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded text-purple-600 mr-2">
                        <span class="text-gray-700">Art & Design</span>
                        <span class="text-gray-400 text-sm ml-auto">(1)</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded text-purple-600 mr-2">
                        <span class="text-gray-700">Business</span>
                        <span class="text-gray-400 text-sm ml-auto">(3)</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded text-purple-600 mr-2">
                        <span class="text-gray-700">Development</span>
                        <span class="text-gray-400 text-sm ml-auto">(2)</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded text-purple-600 mr-2">
                        <span class="text-gray-700">Finance</span>
                        <span class="text-gray-400 text-sm ml-auto">(2)</span>
                    </label>
                    <!-- Add other categories similarly -->
                </div>
            </div>

            <!-- Tags -->
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h3 class="font-semibold mb-3">Tags</h3>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded text-purple-600 mr-2">
                        <span class="text-gray-700">Course</span>
                        <span class="text-gray-400 text-sm ml-auto">(1)</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded text-purple-600 mr-2">
                        <span class="text-gray-700">Education</span>
                        <span class="text-gray-400 text-sm ml-auto">(2)</span>
                    </label>
                    <!-- Add other tags similarly -->
                </div>
            </div>
        </div>

        <!-- Right Content Area -->
        <div class="flex-1">
            <!-- Top Bar -->
            <div class="flex justify-between items-center mb-6">
                <span class="text-gray-600">Showing 1-12 of 14 results</span>
                <div class="flex items-center gap-4">
                    <select class="px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-500">
                        <option>Regular</option>
                        <option>Latest</option>
                        <option>Price Low to High</option>
                        <option>Price High to Low</option>
                    </select>
                    <div class="flex gap-2">
                        <button class="p-2 bg-purple-600 text-white rounded-lg">
                            <i class="fas fa-th-large"></i>
                        </button>
                        <button class="p-2 border rounded-lg hover:bg-gray-50">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Course Grid -->
            <!-- && $cours['Actions'] == 1 -->
            <div class="grid grid-cols-3 gap-6">
                <!-- Course Card 1 -->
                <?php foreach ($gridCours as $cours):

                    $cour = $cours['coursID'];
                    $total = $totalnumber->nombreDinscriptions($cour);

                    if ($cours['statu'] == 'approved') {

                        ?>

                        <div class="bg-white rounded-xl shadow-sm overflow-hidden group hover:shadow-md transition-all">
                            <div class="relative">
                                <img src="<?= $cours['imageCours'] ?>" alt="Course" class="w-full h-48 object-cover">
                                <span
                                    class="absolute top-4 left-4 bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium"><?= $cours['categorieNom'] ?></span>
                            </div>
                            <div class="p-5">
                                <div class="flex items-center mb-4">
                                    <img src="<?= $cours['photoProfil'] ?>" alt="Instructor" class="w-8 h-8 rounded-full mr-3">
                                    <span class="text-gray-700"><?= $cours['nom'] ?></span>
                                </div>
                                <a href="details.php?detiles=<?= $cours['coursID'] ?>"
                                    class="font-semibold mb-2 group-hover:text-purple-600"><?= $cours['description'] ?></a>
                                <div class="flex items-center mb-3">
                                    <div class="flex text-yellow-400 mr-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-gray-600 text-sm">(4.5)</span>
                                </div>
                                <div class="flex justify-between items-center text-sm text-gray-600">
                                    <div class="flex space-x-4">
                                        <span><i class="fas fa-user-graduate mr-1"></i><?= $total ?> Students</span>
                                        <span><i class="fas fa-book mr-1"></i>8 Lessons</span>
                                    </div>
                                    <span class="text-xl font-bold text-purple-600">$55.00</span>
                                </div>
                            </div>
                        </div>
                    <?php }endforeach; ?>

                <!-- Add more course cards following the same structure -->

            </div>
            <ul class="flex mt-8 space-x-5 justify-center font-[sans-serif]">

                <li class="flex items-center justify-center shrink-0 bg-gray-100 w-10 h-10 rounded-full">
                    <a href="?page-nr=<?= max(1, (isset($_GET['page-nr']) ? $_GET['page-nr'] : 0) - 1) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-300" viewBox="0 0 55.753 55.753">
                            <path
                                d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
                                data-original="#000000" />
                        </svg>
                    </a>
                </li>
                <?php for ($count = 1; $count <= $pages; $count++): ?>
                    <li
                        class="flex items-center justify-center shrink-0 bg-blue-500  border-2 border-blue-500 cursor-pointer text-base font-bold text-white w-10 h-10 rounded-full">
                        <?= $count ?>
                    </li>
                <?php endfor; ?>
                <li
                    class="flex items-center justify-center shrink-0 hover:bg-gray-50 border-2 cursor-pointer w-10 h-10 rounded-full">

                    <a onclick="loadData()"
                        href="?page-nr=<?= min($pages, (isset($_GET['page-nr']) ? $_GET['page-nr'] : 0) + 1) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400 rotate-180"
                            viewBox="0 0 55.753 55.753">
                            <path
                                d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
                                data-original="#000000" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>