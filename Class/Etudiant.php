<?php

require_once "Utilsateur.php";
class Etudiant extends Utilisateur
{
    private $rows_per_page;
    private $category;

    private $etudiant_id;
    private $cours_id;
    private $counts;
    private $stauts;


    public function __construct($nom = null, $email = null, $motDePasse = null, $role = null, $photoProfil = null, $etudiant_id = null, $cours_id = null, $counts = null, $stauts = null)
    {
        parent::__construct($nom, $email, $motDePasse, $role, $photoProfil, '', '');

        $this->etudiant_id = $etudiant_id;
        $this->cours_id = $cours_id;
        $this->counts = $counts;
        $this->stauts = $stauts;

    }

    public function setRowsPerPage($rows)
    {
        $this->rows_per_page = $rows;
    }

    public function getRowsPerPage()
    {
        return $this->rows_per_page;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCounts($counts)
    {
        $this->counts = $counts;
    }

    public function getCounts()
    {
        return $this->counts;
    }

    public function getetudiant_id()
    {
        return $this->etudiant_id;
    }

    public function getcours_id()
    {
        return $this->cours_id;
    }

    public function setStauts($stauts)
    {
        $this->stauts = $stauts;
    }

    public function getStauts()
    {
        return $this->stauts;
    }

    public function cours_inscriptions($cours_id, $etudiant_id)
    {
        try {
            $checkSql = "SELECT * FROM cours_inscriptions WHERE cours_id = :cours_id AND etudiant_id = :etudiant_id";
            $checkStmt = $this->pdo->prepare($checkSql);
            $checkStmt->bindParam(':cours_id', $cours_id, PDO::PARAM_INT);
            $checkStmt->bindParam(':etudiant_id', $etudiant_id, PDO::PARAM_INT);
            $checkStmt->execute();

            $existingData = $checkStmt->fetch(PDO::FETCH_ASSOC);

            if ($existingData) {
                return $existingData;
            }

            $sql = "INSERT INTO cours_inscriptions (etudiant_id, cours_id, statu) VALUES (:etudiant_id, :cours_id, true)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':cours_id', $cours_id, PDO::PARAM_INT);
            $stmt->bindParam(':etudiant_id', $etudiant_id, PDO::PARAM_INT);
            $stmt->execute();

            $newCheckStmt = $this->pdo->prepare($checkSql);
            $newCheckStmt->bindParam(':cours_id', $cours_id, PDO::PARAM_INT);
            $newCheckStmt->bindParam(':etudiant_id', $etudiant_id, PDO::PARAM_INT);
            $newCheckStmt->execute();

            $newData = $newCheckStmt->fetch(PDO::FETCH_ASSOC);

            return $newData ?: null;

        } catch (PDOException $e) {
            return [
                "status" => "error",
                "message" => $e->getMessage()
            ];
        }
    }

    public function selectEtudiant($cours_id, $etudiant_id)
    {
        try {
            $checkSql = "SELECT * FROM cours_inscriptions WHERE cours_id = :cours_id AND etudiant_id = :etudiant_id";
            $checkStmt = $this->pdo->prepare($checkSql);
            $checkStmt->bindParam(':cours_id', $cours_id, PDO::PARAM_INT);
            $checkStmt->bindParam(':etudiant_id', $etudiant_id, PDO::PARAM_INT);
            $checkStmt->execute();

            $existingData = $checkStmt->fetch(PDO::FETCH_ASSOC);
            if ($existingData) {
                return $existingData;
            }
        } catch (PDOException $e) {
            return [
                "status" => "error",
                "message" => $e->getMessage()
            ];
        }
    }

    public function afficheCoursEtudiant($email)
    {
        try {
            $query = "SELECT * FROM cours_inscriptions c
            left JOIN utilisateur u ON c.etudiant_id = u.id
            left JOIN cours a ON c.cours_id = a.coursID
            left JOIN categorie on a.category_id = categorie.categorieID
            WHERE email = :email";

            $stmt = $this->pdo->prepare($query);
            $this->setEmail($email);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);

            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;


        } catch (PDOException $e) {
            return "Erreur: " . $e->getMessage();
        }
    }

    public function CountCours()
    {
        try {
            $Countreservation = $this->pdo->prepare(
                "SELECT utilisateur.nom, COUNT(cours.coursID) AS counts
                FROM cours
                JOIN utilisateur ON cours.enseignant_id = utilisateur.id
                GROUP BY utilisateur.nom
                LIMIT 4"
            );
            $Countreservation->execute();

            $count = [];
            $rows = $Countreservation->fetchAll(PDO::FETCH_ASSOC);

            foreach ($rows as $row) {
                $count[] = new Etudiant(
                    $row['nom'],
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    $row['counts']
                );
            }

            return $count;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return 0;
        }
    }

}