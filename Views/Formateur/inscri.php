<?php
require_once "../../Class/Enseignant.php";
require_once "../../Config/db.php";

$id_etudiant = $_SESSION['id_users'];
$AjouteCours = new Enseignant('', '', '', '', '', '', $id_etudiant);

$enseignant = $AjouteCours->EtudiantList($AjouteCours);

if (!isset($_SESSION['role']) || $_SESSION['role'] === '' || $_SESSION['role'] == 'Administrateur' || $_SESSION['role'] == 'Etudiant') {
    header('Location: ../my-account/login.php');
    exit;
}
?>



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
    <aside class="fixed left-0 top-0 w-64 h-screen bg-[#1E2A49] text-white">
        <div class="p-4 h-full flex flex-col"> <!-- Added h-full and flex flex-col -->
            <h1 class="text-xl font-bold mb-8">
                <i class="fas fa-chart-line mr-2"></i>TailBoard
            </h1>

            <nav class="space-y-2">
                <a href="AjouteCours.php" class="block px-4 py-2 rounded hover:bg-blue-600 bg-blue-500">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">
                    <i class="fas fa-chart-bar mr-2"></i> List etidiant
                </a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">
                    <i class="fas fa-dollar-sign mr-2"></i> Sales
                </a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">
                    <i class="fas fa-users mr-2"></i> CRM
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


        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://cdn.tailwindcss.com"></script>
            <title>Dashboard des Inscriptions</title>
        </head>

        <body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">
            <div class="container mx-auto px-4 py-8">
                <!-- Section de l'en-tête -->
                <div class="mb-10">
                    <h1
                        class="text-4xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">
                        Examen des Inscriptions
                    </h1>
                </div>



                <!-- Tableau des Étudiants -->
                <div class="bg-white rounded-2xl shadow-lg border border-slate-200/50 backdrop-blur-sm overflow-hidden">
                    <div class="p-8 border-b border-slate-200">
                        <h2 class="text-2xl font-bold text-slate-800">Liste des Inscrits</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-slate-50/50">
                                    <th
                                        class="px-8 py-6 text-left text-sm font-semibold text-slate-600 uppercase tracking-wider">
                                        Nom de l'Étudiant</th>
                                    <th
                                        class="px-8 py-6 text-left text-sm font-semibold text-slate-600 uppercase tracking-wider">
                                        cours</th>
                                    <th
                                        class="px-8 py-6 text-left text-sm font-semibold text-slate-600 uppercase tracking-wider">
                                        Date d'Inscription</th>
                                    <th
                                        class="px-8 py-6 text-left text-sm font-semibold text-slate-600 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                <?php foreach ($enseignant as $cour):
                                    $nom = $cour['nom'];
                                    $first_two_chars = substr($nom, 0, 2);
                                    $first_two_chars_upper = strtoupper($first_two_chars);
                                    ?>
                                    <tr class="hover:bg-slate-50/50 transition-colors duration-200">
                                        <td class="px-8 py-6">
                                            <div class="flex items-center">
                                                <div
                                                    class="h-10 w-10 rounded-full bg-gradient-to-r from-blue-500 to-indigo-500 flex items-center justify-center text-white font-semibold">
                                                    <?= $first_two_chars_upper ?>
                                                </div>
                                                <span
                                                    class="ml-4 text-sm font-medium text-slate-800"><?= $cour['nom'] ?></span>
                                            </div>
                                        </td>
                                        <td class="px-8 py-6 text-sm text-slate-600"><?= $cour['titre'] ?></td>
                                        <td class="px-8 py-6 text-sm text-slate-600">
                                            <?= date("d M Y", strtotime($cour['latest_date'])) ?>
                                        </td>
                                        <td class="px-8 py-6">
                                            <button
                                                class="px-4 py-2 text-sm font-medium text-slate-600 hover:text-slate-900 border border-slate-200 rounded-lg hover:bg-slate-50 transition-all duration-200">
                                                Détails
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </body>

        </html>

</html>