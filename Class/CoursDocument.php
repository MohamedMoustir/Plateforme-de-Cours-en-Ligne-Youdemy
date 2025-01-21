<?php
require_once "Cours.php";

class CoursDocument extends Cours
{
    private $document;


    public function __construct($titre, $description, $enseignant_id, $category_id, $statu, $imageCours, $document, $coursID)
    {
        $this->document = $document;
        parent::__construct($titre, $description, $enseignant_id, $category_id, $statu, $imageCours, $coursID);
    }

    public function getdocument()
    {
        return $this->document;
    }

    public function setdocument($document)
    {
        $this->document = $document;
    }
    public function AjouteCours($videoChoice)
    {
        $titer = $videoChoice->getTitre();
        $description = $videoChoice->getDescription();
        $enseignant_id = $videoChoice->getEnseignantId();
        $category_id = $videoChoice->getCategoryID();
        $imageCours = $videoChoice->getImageCours();
        $document = $videoChoice->getdocument();

        try {
            if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
                $permited = array('jpg', 'png', 'jpeg', 'gif');
                $file_name = $_FILES['avatar']['name'];
                $file_temp = $_FILES['avatar']['tmp_name'];
                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));

                if (!in_array($file_ext, $permited)) {
                    echo '';

                }

                $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
                $imageCours = "../../image/" . $unique_image;
                $this->setImageCours($imageCours);
                move_uploaded_file($file_temp, $imageCours);
            }

            if (isset($_FILES['pdfFile']) && $_FILES['pdfFile']['error'] === UPLOAD_ERR_OK) {
                $fileType = mime_content_type($_FILES['pdfFile']['tmp_name']);
                if ($fileType == 'application/pdf') {
                    $uploadDir = '../uploads/';
                    // Créer le chemin complet du fichier (répertoire + nom du fichier)
                    $document = $uploadDir . basename($_FILES['pdfFile']['name']);
                    $this->setdocument($document);
                    move_uploaded_file($_FILES['pdfFile']['tmp_name'], $document);
                } else {
                    echo "";

                }
            }

            $query = "INSERT INTO cours (titre, description, enseignant_id, category_id, imageCours, CoursUrl) 
                     VALUES (:titre, :description, :enseignant_id, :category_id, :imageCours, :document)";

            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':titre', $titer, PDO::PARAM_STR);
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);
            $stmt->bindParam(':enseignant_id', $enseignant_id, PDO::PARAM_INT);
            $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
            $stmt->bindParam(':imageCours', $imageCours, PDO::PARAM_STR);
            $stmt->bindParam(':document', $document, PDO::PARAM_STR);






            if ($stmt->execute()) {
                echo "<script>window.location.href ='AjouteCours.php';</script>";
            }




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

        try {
            if (!empty($_FILES['avatar']['tmp_name']) && is_uploaded_file($_FILES['avatar']['tmp_name'])) {
                $permited = ['jpg', 'png', 'jpeg', 'gif'];
                $file_ext = strtolower(pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION));

                if (!in_array($file_ext, $permited)) {
                    echo "Le type de fichier téléchargé n'est pas pris en charge.";
                    exit;
                }

                $unique_image = "../../image/" . uniqid() . '.' . $file_ext;
                move_uploaded_file($_FILES['avatar']['tmp_name'], $unique_image);
                $this->setImageCours($unique_image);
            }

            // Requête SQL pour mettre à jour le cours
            $query = "UPDATE cours 
                     SET titre = :titre, 
                         description = :description, 
                         enseignant_id = :enseignant_id, 
                         category_id = :category_id, 
                         imageCours = COALESCE(NULLIF(:imageCours, ''), imageCours)
                     WHERE coursID = :id";

            // Préparation et exécution de la requête
            $stmt = $this->pdo->prepare($query);

            $titre = $alldata->getTitre();
            $description = $alldata->getDescription();
            $enseignant_id = $alldata->getEnseignantId();
            $category_id = $alldata->getCategoryID();
            $imageCours = $alldata->getImageCours();
            $id = $alldata->getcoursId();

            // Liaison des paramètres
            $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);
            $stmt->bindParam(':enseignant_id', $enseignant_id, PDO::PARAM_INT);
            $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
            $stmt->bindParam(':imageCours', $imageCours, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            // Exécution de la requête
            if ($stmt->execute()) {
                echo "<script>alert('Le cours a été mis à jour avec succès !'); window.location.href = 'AjouteCours.php';</script>";
            } else {
                $errorInfo = $stmt->errorInfo();
                echo "Erreur lors de l'exécution de la requête : " . $errorInfo[2];
            }
        } catch (PDOException $e) {
            echo "Erreur dans la base de données : " . $e->getMessage();
        }
    }

    public function getFileNameById($id)
    {
        try {
            $query = "SELECT r.CoursUrl FROM cours r WHERE coursID = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['CoursUrl'] ?? null;
        } catch (PDOException $e) {
            return "Erreur: " . $e->getMessage();
        }
    }
}


?>