<?php
require_once "../../Class/Administrateur.php";
require_once "../dashorad/dashbord.php";
require_once "../../Class/CoursDocument.php";
require_once "../../Class/Enseignant.php";
require_once "../../Class/Utilsateur.php";
require_once "../../Class/Cours.php";






$cours = new Enseignant();
$allcours = $cours->afficheCours();

$Administrateur = new Administrateur('', '', '', '', '', '');

if (isset($_GET['rejected'])) {

    $id = $_GET['rejected'];
    $users = new Utilisateur('', '', '', '', '', '', $id);

    $Administrateur->CancelCours($users);

}

if (isset($_GET['approved'])) {

    $id = $_GET['approved'];
    $users = new Utilisateur('', '', '', '', '', '', $id);

    $Administrateur->approvedCours($users);


}


// if (!isset($_SESSION['role']) || $_SESSION['role'] === null || $_SESSION['role'] === '') {
//   header('Location: ../login.php');
//   exit;
// }
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 via-gray-50 to-indigo-50 min-h-screen">
    <main class="max-w-7xl mx-auto py-8 px-6 ml-[310px]">
        <!-- Filters Section -->
        <div class="mb-8 bg-white p-6 rounded-xl shadow-sm border border-blue-100">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-2xl font-bold text-gray-900">Course List</h2>
                <div class="flex items-center gap-4">
                    <select
                        class="rounded-lg border-2 border-gray-200 px-4 py-2 bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-400 transition-colors">
                        <option>All Status</option>
                        <option>Pending</option>
                        <option>Approved</option>
                        <option>Rejected</option>
                    </select>
                    <select
                        class="rounded-lg border-2 border-gray-200 px-4 py-2 bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-400 transition-colors">
                        <option>This Week</option>
                        <option>This Month</option>
                        <option>Last 3 Months</option>
                        <option>All Time</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Course List -->
        <div class="space-y-4">

            <?php foreach ($allcours as $cour):
                $cours = $cour[0];
                $category = $cour[1];
                $utilisateur = $cour[2];
                ?>
                <?php if ($cours->getStatu()):
                    $statusClass = match ($cours->getStatu()) {
                        'approved' => 'bg-green-50 text-green-700 border-green-200',
                        'rejected' => 'bg-red-50 text-red-700 border-red-200',
                        default => 'bg-yellow-50 text-yellow-700 border-yellow-200'
                    };
                    ?>
                    <div
                        class="bg-white rounded-xl p-6 shadow-sm border border-blue-100 hover:shadow-md transition-all duration-300 hover:border-blue-200 group">
                        <div class="grid grid-cols-1 md:grid-cols-6 gap-6 items-center">
                            <!-- Course Info -->
                            <div class="md:col-span-2 flex gap-4 items-center">
                                <div class="relative">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-lg opacity-0 group-hover:opacity-10 transition duration-300">
                                    </div>
                                    <img src="<?= htmlspecialchars($cours->getImageCours()) ?>" alt="Course thumbnail"
                                        class="w-28 h-20 rounded-lg object-cover shadow-sm" />
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">
                                        <?= htmlspecialchars($cours->getTitre()) ?>
                                    </h3>
                                    <p class="text-sm text-gray-500 flex items-center gap-2 mt-1">
                                        <img src="<?= htmlspecialchars($utilisateur->getPhotoProfil()) ?>" alt="Instructor"
                                            class="w-5 h-5 rounded-full border border-gray-200" />
                                        <span>By <?= htmlspecialchars($utilisateur->getNom()) ?></span>
                                    </p>
                                </div>
                            </div>

                            <!-- Category -->
                            <div>
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-200 shadow-sm">
                                    <?= htmlspecialchars($category->getCategoryName());
                                    ?>
                                </span>
                            </div>

                            <!-- Date -->
                            <div>
                                <span class="text-sm text-gray-500 flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <!-- date("d M Y", strtotime($cours['date']))  -->

                                </span>
                            </div>

                            <!-- Status -->
                            <div>
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium <?= $statusClass ?> shadow-sm">
                                    <?= htmlspecialchars($cours->getStatu()) ?>
                                </span>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex gap-6 justify-end">
                                <a href="cour.php?rejected=<?= $cours->getcoursId() ?>"
                                    class="px-4 py-2 text-sm font-medium text-red-600 bg-white border-2 border-red-200 rounded-lg hover:bg-red-50 hover:border-red-300 transition-all duration-300 flex items-center gap-2 group/btn">
                                    <svg class="w-4 h-4 group-hover/btn:scale-110 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <span>Reject</span>
                                </a>
                                <a href="cour.php?approved=<?= $cours->getcoursId() ?>"
                                    class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 flex items-center gap-2 group/btn">
                                    <svg class="w-4 h-4 group-hover/btn:scale-110 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Approve</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <nav class="flex items-center bg-white px-6 py-3 rounded-xl shadow-sm border border-blue-100">
                <button class="p-2 rounded-lg text-gray-500 hover:bg-gray-100 transition-colors mr-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <div class="flex space-x-2">
                    <button
                        class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors">1</button>
                    <button class="px-4 py-2 rounded-lg hover:bg-gray-100 text-gray-500 transition-colors">2</button>
                    <button class="px-4 py-2 rounded-lg hover:bg-gray-100 text-gray-500 transition-colors">3</button>
                    <span class="px-4 py-2 text-gray-500">...</span>
                    <button class="px-4 py-2 rounded-lg hover:bg-gray-100 text-gray-500 transition-colors">12</button>
                </div>
                <button class="p-2 rounded-lg text-gray-500 hover:bg-gray-100 transition-colors ml-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </nav>
        </div>
    </main>
</body>

</html>