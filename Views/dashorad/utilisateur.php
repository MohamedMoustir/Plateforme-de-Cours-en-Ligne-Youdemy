<?php
require_once "../../Class/Administrateur.php";
require_once "../dashorad/dashbord.php";
require_once "../../Class/Utilsateur.php";
require_once "../../Config/db.php";




$users = new Administrateur();

$allusers = $users->Allutilisateurs();

if (isset($_GET['archived'])) {
    $id = $_GET['archived'];
    $userToUpdate = new Utilisateur('', '', '', '', '', '', $id);
    $users->archivedUsers($userToUpdate);

} elseif (isset($_GET['Active'])) {
    $id = $_GET['Active'];
    $userToUpdate = new Utilisateur('', '', '', '', '', '', $id);
    $users->archivedUsers($userToUpdate);

} elseif (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    $userToUpdate = new Administrateur('', '', '', '', '', '', $id);
    $users->removeUtilisateur($userToUpdate);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>DataTable Example</title>
</head>

<body>
    <div class="overflow-hidden ml-[360px]  ">
        <table id="usersTable" class="w-[100%] h-[20vh] divide-y divide-gray-200 shadow-md rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white my-4 divide-y divide-gray-200">
                <?php foreach ($allusers as $user): ?>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap"><?= $user->getNom() ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $user->getEmail() ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $user->getRole() ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php if ($user->getActions() === 1): ?>
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            <?php else: ?>
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Inactive</span>
                            <?php endif; ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="../vues/profile.php?id=<?= $user->getID() ?>" name="eye"
                                class="ml-2 px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none"><i
                                    class="fa-solid fa-eye"></i></a>

                            <?php if ($user->getRole() != 'Administrateur'): ?>
                                <a href="utilisateur.php?archived=<?= $user->getID() ?>" name="archived"
                                    class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none"><i
                                        class="fas fa-archive mr-2"></i></a>
                                <a href="utilisateur.php?Active=<?= $user->getID() ?>"
                                    class="ml-2 px-4 py-2 font-medium text-white bg-green-600 rounded-md hover:bg-green-500 focus:outline-none"><i
                                        class="fas fa-check-circle mr-2"></i></a>
                                <a href="utilisateur.php?remove=<?= $user->getID() ?>" name="delete"
                                    class="ml-2 px-4 py-2 font-medium text-white bg-red-500 rounded-md hover:bg-red-400 focus:outline-none"><i
                                        class="fas fa-trash-alt mr-2"></i></a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <script>

    </script>
</body>

</html>