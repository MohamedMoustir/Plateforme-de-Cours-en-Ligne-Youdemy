<?php
// session_start();
require_once "../../Class/CoursDocument.php";
require_once "../../Class/categorie.php";
require_once "../../Config/db.php";
require_once "../../Class/Administrateur.php";
require_once "../../Class/tags.php";
require_once "../../Class/CoursVideo.php";
require_once "../../Class/Enseignant.php";


require_once "AjouteCours.php";

$tags = new tags();

// edite

$coursID = $_GET['edit'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_btn'])) {

    $titre = $_POST['courseTitle'];
    $description = $_POST['courseDescription'];
    $enseignant_id = $_SESSION['id_users'];
    $imageCours = $_FILES['avatar'];
    $category_id = $_POST['courseCategory'];
    $document = $_FILES['pdfFile'];
    $tag = $_POST['tags'];
    $videoUrl = $_POST['courseVideo'] ?? null;

    if (isset($videoUrl) && !empty($videoUrl) && filter_var($videoUrl, FILTER_VALIDATE_URL)) {

        $AjouteCours = new CoursVideo($titre, $description, $enseignant_id, $category_id, null, $imageCours, $videoUrl, $coursID);
        $AjouteCours->updteCours($AjouteCours);

    } else {

        $AjouteCours = new CoursDocument($titre, $description, $enseignant_id, $category_id, null, $imageCours, $document = null, $coursID);
        $AjouteCours->updteCours($AjouteCours);

        if (!empty($tag)) {
            $tags->insertAsoustion($coursID, $tag);
        }
    }

}

// category
$category = new Category('', '', '');
$allcategory = $category->afficherCategories();
// tags
$alltags = $tags->afficherTags($tags);

$email = $_SESSION['email'];
// cours
$AjouteCours = new Enseignant('', '', '', '', '');

$alldata = $AjouteCours->afficheCours($email, $coursID);


if (isset($AjouteCours)) {
    $cours = $alldata[0];
    $category = $alldata[1];
    $utilisateur = $alldata[2];

}



?>




<div id="addCourseModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
    <div class="bg-white p-8 rounded-lg w-1/3 shadow-lg scale-[0.8]">
        <h2 class="text-2xl font-bold mb-6 text-blue-600">Ajouter un Cours</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="courseTitle" class="block text-sm font-medium text-gray-700">Titre du Cours</label>
                <input value="<?= $cours->getTitre() ?>" type="text" id="courseTitle" name="courseTitle"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="courseDescription" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="courseDescription" name="courseDescription"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"><?= $cours->getDescription() ?></textarea>
            </div>
            <div class="mb-4">
                <label for="courseCategory" class="block text-sm font-medium text-gray-700">Catégorie</label>
                <select id="courseCategory" name="courseCategory"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    <option>Toutes les catégories</option>
                    <?php foreach ($allcategory as $category) {
                        echo '<option value="' . htmlspecialchars($category->getCategoryID()) . '">' . htmlspecialchars($category->getCategoryName()) . '</option>';
                    } ?>
                </select>
            </div>

            <!-- Tags Input -->
            <div class="mb-4">
                <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
                <select id="tags" name="tags[]" multiple
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    <?php foreach ($alltags as $tags) {
                        echo '<option value="' . htmlspecialchars($tags->GetTagId()) . '">' . htmlspecialchars($tags->GetTagNom()) . '</option>';
                    } ?>
                </select>
            </div>

            <!-- Ajouter choix pour Video ou URL -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Sélectionner Type d'Entrée</label>
                <div class="flex items-center space-x-4">
                    <label for="videoChoice" class="flex items-center space-x-2">
                        <input type="radio" id="videoChoice" name="courseType" value="video" class="focus:ring-blue-500"
                            onclick="toggleCourseInput('video')">
                        <span>Vidéo</span>
                    </label>
                    <label for="urlChoice" class="flex items-center space-x-2">
                        <input type="radio" id="urlChoice" name="courseType" value="url" class="focus:ring-blue-500"
                            onclick="toggleCourseInput('Document')">
                        <span>Document</span>
                    </label>
                </div>
            </div>

            <!-- Champ vidéo -->
            <div id="videoField" class="mb-4 hidden">
                <label for="courseVideo" class="block text-sm font-medium text-gray-700">URL de la Vidéo</label>
                <input type="url" id="courseVideo" name="courseVideo"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>

            <!-- Champ URL -->
            <div id="urlField" class="mb-4 hidden">
                <input type="file" name="pdfFile" accept=".pdf" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <!-- Image du Cours -->
            <div class="mb-4">
                <label for="avatar" class="block text-sm font-medium text-gray-700">Image du Cours</label>
                <input type="file" id="avatar" name="avatar" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="flex justify-between">
                <a href="AjouteCours.php" onclick="document.getElementById('addCourseModal').classList.add('hidden')"
                    class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-all duration-300">Annuler</a>
                <button type="submit" name="submit_btn"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-all duration-300">Enregistrer</button>
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