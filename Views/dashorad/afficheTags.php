<?php

require_once "../dashorad/dashbord.php";
require_once "../../Class/tags.php";
require_once "../../Config/db.php";

$tags = new tags();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['tags'])) {
        $tagname = $_POST['tags'];
        $tags->AjouteTags($tagname);
    }
}

$afficherTags = new tags();
$alltags = $afficherTags->afficherTags($afficherTags);


if (isset($_GET['delet'])) {
    $id = $_GET['delet'];
    $tags = new tags($id);
    $tags->removetag($tags);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="ml-[340px]  mb-12 max-w-6xl mx-auto bg-white rounded-lg shadow-md">
        <div class="p-4 border-b">
            <div class="flex justify-between items-center">
                <input type="text" placeholder="Rechercher..."
                    class="px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                <button id="open-popup" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-plus mr-2"></i>Ajouter tags
                </button>
            </div>
        </div>
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <div class="flex items-center">
                            ID
                            <i class="fas fa-sort ml-2"></i>
                        </div>
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <div class="flex items-center">
                            Nom
                            <i class="fas fa-sort ml-2"></i>
                        </div>
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <div class="flex items-center">
                            Date
                            <i class="fas fa-sort ml-2"></i>
                        </div>
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($alltags as $tags): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap"><?= $tags->GetTagId() ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">#<?= $tags->GetTagNom() ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">2025-01-16</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="../dashorad/editetags.php?edite=<?= $tags->GetTagId() ?>"
                                class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-edit"></i></a>
                            <a href="../dashorad/afficheTags.php?delet=<?= $tags->GetTagId() ?>"
                                class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="px-4 py-3 border-t">
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-700">Affichage 1-10 sur 50</span>
                <div class="flex gap-2">
                    <button class="px-3 py-1 border rounded hover:bg-gray-50">Précédent</button>
                    <button class="px-3 py-1 bg-blue-600 text-white rounded">1</button>
                    <button class="px-3 py-1 border rounded hover:bg-gray-50">2</button>
                    <button class="px-3 py-1 border rounded hover:bg-gray-50">3</button>
                    <button class="px-3 py-1 border rounded hover:bg-gray-50">Suivant</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Backdrop -->

    <div id="popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <!-- Modal Container -->
        <div class="bg-white rounded-lg shadow-lg w-96 relative flex flex-col overflow-hidden">
            <!-- Modal Header -->
            <div class="p-4 border-b bg-gradient-to-r from-blue-500 to-teal-500">
                <h2 class="text-lg font-semibold text-white">Ajouter une Tag</h2>
            </div>
            <!-- Modal Body -->
            <form id="tags-form" class="p-4 space-y-4 flex-grow overflow-auto" method="post">
                <!-- Tag Name Input -->
                <div class="tag-input">
                    <label for="category-name" class="block text-sm font-medium text-gray-700 mb-2">
                        Nom de la Tag
                    </label>
                    <input id="category-name" type="text"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 ease-in-out"
                        placeholder="Nom de la catégorie" name="tags[]">
                </div>
                <!-- Add Tag Button -->
                <div class="flex items-center justify-center mb-4">
                    <button type="button" id="add-tag-input"
                        class="w-12 h-12 bg-blue-600 text-white rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 flex items-center justify-center transition duration-300">
                        <i class="fas fa-plus text-xl"></i>
                    </button>
                </div>
                <!-- Submit Button -->
                <button type="submit" name="ajouts"
                    class="w-full py-2 px-4 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 flex items-center justify-center gap-2 mt-4 transition duration-300">
                    <i class="fas fa-check"></i> Ajouter les Tags
                </button>
            </form>
            <!-- Close Button -->
            <button id="close-popup"
                class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 focus:outline-none transition duration-200">
                &times;
            </button>
        </div>
    </div>

    <!-- JavaScript to Toggle Modal Visibility -->
    <script>
        // Get the modal and close button elements
        const modal = document.getElementById('popup');
        const closeButton = document.getElementById('close-popup');

        // Add event listener to the close button
        closeButton.addEventListener('click', () => {
            // Toggle the 'hidden' class to show or hide the modal
            modal.classList.toggle('hidden');
        });
    </script>
    </section>
    <script>

        const popup = document.getElementById('popup');
        const openPopup = document.getElementById('open-popup');
        const closePopup = document.getElementById('close-popup');

        openPopup.addEventListener('click', () => {
            popup.classList.remove('hidden');
        });

        closePopup.addEventListener('click', () => {
            popup.classList.add('hidden');
        });

        popup.addEventListener('click', (e) => {
            if (e.target === popup) {
                popup.classList.add('hidden');
            }
        });

        document.getElementById('add-tag-input').addEventListener('click', function () {
            const newTagInput = document.createElement('div');
            newTagInput.classList.add('tag-input');

            const inputField = document.createElement('input');
            inputField.type = 'text';
            inputField.classList.add('w-full', 'px-3', 'py-2', 'border', 'rounded-lg', 'focus:outline-none', 'focus:ring-2', 'focus:ring-blue-500');
            inputField.placeholder = 'Nom de la catégorie';
            inputField.name = 'tags[]';

            newTagInput.appendChild(inputField);

            document.getElementById('tags-form').appendChild(newTagInput);
        });

    </script>
    <style>
        #tags-form {
            max-height: 300px;
            overflow-y: auto;
        }
    </style>
</body>

</html>