<?php
require_once "../dashorad/dashbord.php";
require_once "../../Class/categorie.php";



$CategoryID = $_GET['edite'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['CategoryName'])) {
        $CategoryName = htmlspecialchars($_POST['CategoryName']);
        $categorys = new Category($CategoryID, $CategoryName, null);
        $categorys->Editecategory($categorys);
    }

}

$categorys = new Category($CategoryID, null, null);

$Category = $categorys->afficherCategories($CategoryID);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tag</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css">
</head>

<body>
    <div class="ml-[340px] ">
        <?php

        include '../dashorad/afficheCategory.php';
        ?>
    </div>

    <div id="popup" class=" fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 ">
        <div class="bg-white rounded-lg shadow-lg w-96">
            <div class="p-4 border-b">
                <h2 class="text-lg font-semibold text-gray-800">Edite Catégorie</h2>
            </div>
            <div class="p-4">
                <form class="space-y-4" method="POST">
                    <div>
                        <label for="category-name" class="block text-sm font-medium text-gray-700 mb-1">
                            Nom de la Catégorie
                        </label>
                        <input id="category-name" type="text"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Nom de la catégorie" name="CategoryName"
                            value="<?= $Category->getCategoryName(); ?>">
                    </div>
                    <button type="submit" name="ajout"
                        class="w-full py-2 px-4 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                        Edite la Catégorie
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