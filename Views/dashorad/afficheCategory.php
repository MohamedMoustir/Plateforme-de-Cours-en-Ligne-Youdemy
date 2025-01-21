<?php
require_once "../dashorad/dashbord.php";
require_once "../../Class/categorie.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['Category'])) {
        $categoryName = trim($_POST['Category']);
        if (!empty($categoryName)) {
            $newCategory = new Category(null, $categoryName, null);
            $newCategory->AjouteCategory($newCategory);
        } else {
            echo "Please enter a valid category name.";
        }
    }
}

$newCategory = new Category(null, null, null);
$allcategory = $newCategory->afficherCategories(null);


if (isset($_GET['delet'])) {
    $id = $_GET['delet'];
    $newCategory = new Category($id, null, null);
    $newCategory->removeCategory($newCategory);
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
                    <i class="fas fa-plus mr-2"></i>Ajouter Category
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
                <?php foreach ($allcategory as $category): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap"><?= $category->getCategoryID() ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $category->getCategoryName() ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $category->getDate() ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="../dashorad/editecategory.php?edite=<?= $category->getCategoryID() ?>"
                                class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-edit"></i></a>
                            <a href="../dashorad/afficheCategory.php?delet=<?= $category->getCategoryID() ?>"
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
    <!-- Categories -->
    <div id="popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg w-96">
            <div class="p-4 border-b">
                <h2 class="text-lg font-semibold text-gray-800">Ajouter une Catégorie</h2>
            </div>
            <div class="p-4">
                <form class="space-y-4" method="POST">
                    <div>
                        <label for="category-name" class="block text-sm font-medium text-gray-700 mb-1">
                            Nom de la Catégorie
                        </label>
                        <input id="category-name" type="text"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Nom de la catégorie" name="Category">
                    </div>
                    <button type="submit" name="ajout"
                        class="w-full py-2 px-4 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                        Ajouter la Catégorie
                    </button>
                </form>
            </div>
            <button id="close-popup"
                class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                &times;
            </button>
        </div>
    </div>



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

    </script>
</body>

</html>