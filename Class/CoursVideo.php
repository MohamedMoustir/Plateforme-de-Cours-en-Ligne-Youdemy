<?php
require_once "Cours.php";
class CoursVideo extends Cours
{
    private $videoUrl;

    public function __construct($titre, $description, $enseignant_id, $category_id, $statu, $imageCours, $videoUrl, $coursID)
    {
        $this->videoUrl = $videoUrl;
        parent::__construct($titre, $description, $enseignant_id, $category_id, $statu, $videoUrl, $imageCours, $coursID);

    }

    public function getvideoUrl()
    {
        return $this->videoUrl;
    }

    public function setvideoUrl($videoUrl)
    {
        $videoUrl = $this->videoUrl;
    }

    public function AjouteCours($videoChoice)
    {


        $titre = $videoChoice->getTitre();
        $description = $videoChoice->getDescription();
        $enseignant_id = $videoChoice->getEnseignantId();
        $category_id = $videoChoice->getCategoryID();
        $imageCours = $videoChoice->getImageCours();
        $videoUrl = $videoChoice->getvideoUrl();

        try {


            if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
                $permited = array('jpg', 'png', 'jpeg', 'gif');
                $file_name = $_FILES['avatar']['name'];
                $file_size = $_FILES['avatar']['size'];
                $file_temp = $_FILES['avatar']['tmp_name'];
                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));

                if (in_array($file_ext, $permited) === false) {
                    echo '';
                    exit;
                }

                $unique_imge = substr(md5(time()), 0, 10) . '.' . $file_ext;
                $imageCours = "../../image/" . $unique_imge;
                $this->setImageCours($imageCours);
                move_uploaded_file($file_temp, $imageCours);
            }


            $query = "INSERT INTO cours (titre, description,  enseignant_id, category_id, imageCours,URLVido) VALUES (:titre, :description, :enseignant_id, :category_id, :imageCours,:videoUrl)";


            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);
            $stmt->bindParam(':enseignant_id', $enseignant_id, PDO::PARAM_INT);
            $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
            $stmt->bindParam(':imageCours', $imageCours, PDO::PARAM_STR);
            $stmt->bindParam(':videoUrl', $videoUrl, PDO::PARAM_STR);
            $stmt->execute();

            return $this->pdo->lastInsertId();
        } catch (PDOException $e) {
            echo "Errors: " . $e->getMessage();
        }


    }

    public function updteCours($alldata)
    {


        $this->setTitre($alldata->getTitre());
        $this->setDescription($alldata->getDescription());
        $this->setImageCours($alldata->getImageCours());
        $this->setvideoUrl($alldata->getvideoUrl());

        try {


            if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
                $permited = array('jpg', 'png', 'jpeg', 'gif');
                $file_name = $_FILES['avatar']['name'];
                $file_size = $_FILES['avatar']['size'];
                $file_temp = $_FILES['avatar']['tmp_name'];

                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));

                if (in_array($file_ext, $permited) === false) {
                    echo 'error';
                    exit;
                }

                $unique_imge = substr(md5(time()), 0, 10) . '.' . $file_ext;
                $imageCours = "../../image/" . $unique_imge;
                $this->setImageCours($imageCours);
                move_uploaded_file($file_temp, $imageCours);
            }




            $query = "UPDATE cours 
                      SET titre = :titre, 
                          description = :description, 
                          enseignant_id = :enseignant_id, 
                          category_id = :category_id, 
                          imageCours = COALESCE(NULLIF(:imageCours, ''), imageCours), 
                          URLVido = COALESCE(NULLIF(:videoUrl, ''), URLVido) 
                      WHERE coursID = :id";


            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':titre', $alldata->getTitre(), PDO::PARAM_STR);
            $stmt->bindParam(':description', $alldata->getDescription(), PDO::PARAM_STR);
            $stmt->bindParam(':enseignant_id', $alldata->getEnseignantId(), PDO::PARAM_INT);
            $stmt->bindParam(':category_id', $alldata->getCategoryId(), PDO::PARAM_INT);
            $stmt->bindParam(':imageCours', $alldata->getImageCours(), PDO::PARAM_STR);
            $stmt->bindParam(':videoUrl', $alldata->getvideoUrl(), PDO::PARAM_STR);
            $stmt->bindParam(':id', $alldata->getCoursid(), PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo '<script><div class=fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden" id="customAlert">
  <div class="bg-white p-6 rounded-lg shadow-lg text-center max-w-sm w-full">
    <p class="mb-4 text-lg font-semibold">مرحباً! هذه رسالة تنبيه مخصصة.</p>
    <button 
      class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none"
      onclick="closeAlert()">إغلاق</button>
  </div>
</div>
;</script>';

            }

        } catch (PDOException $e) {
            echo "Errors: " . $e->getMessage();
        }
    }




}