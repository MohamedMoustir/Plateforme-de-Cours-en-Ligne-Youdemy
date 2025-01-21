<?php

class Category
{
    private $CategoryName;
    private $CategoryID;
    private $date;


    // private $pdo;

    public function __construct($CategoryID, $CategoryName, $date)
    {
        $db = new Database();
        $this->pdo = $db->getPdo();
        $this->CategoryName = $CategoryName;
        $this->CategoryID = $CategoryID;
        $this->date = $date;
    }

    public function getCategoryName()
    {
        return $this->CategoryName;
    }

    public function setCategoryName($CategoryName)
    {
        $this->CategoryName = $CategoryName;
    }
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getCategoryID()
    {
        return $this->CategoryID;
    }

    public function AjouteCategory($Category)
    {

        try {

            $sql = "INSERT INTO categorie (categorieNom) VALUES (:CategoryName) ";
            $stmt = $this->pdo->prepare($sql);
            $categoryName = $Category->getCategoryName();
            $stmt->bindParam(':CategoryName', $categoryName, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Errors: " . $e->getMessage();
        }
    }

    public function afficherCategories($CategoryID = null)
    {
        try {
            if ($CategoryID === null) {
                $sql = "SELECT * FROM categorie";
                $stmt = $this->pdo->prepare($sql);
            } else {
                $sql = "SELECT * FROM categorie WHERE categorieID = :CategoryID";
                $stmt = $this->pdo->prepare($sql);

                $stmt->bindParam(':CategoryID', $this->CategoryID);
            }

            $stmt->execute();

            if ($CategoryID === null) {
                $categories = [];
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $categories[] = new Category($row['categorieID'], $row['categorieNom'], $row['date']);
                }
                return $categories;
            } else {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($row) {
                    return new Category($row['categorieID'], $row['categorieNom'], $row['date']);
                } else {
                    return null;
                }
            }


        } catch (PDOException $e) {
            echo "Errors: " . $e->getMessage();
        }
    }

    public function removeCategory($CategoryID)
    {

        try {
            $sql = "DELETE FROM categorie WHERE categorieID = :CategoryID";
            $stmt = $this->pdo->prepare($sql);
            $id = $CategoryID->getCategoryID();
            $stmt->bindParam(':CategoryID', $id);
            $stmt->execute();
            if ($stmt) {
                echo "<script>window.location.href = '../dashorad/afficheCategory.php';</script>";
            }
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function Editecategory($Category)
    {

        try {

            $this->setCategoryName($Category->getCategoryName());

            $sql = "UPDATE categorie SET categorieNom = :categorieNom WHERE categorieID = :CategoryID";
            $stmt = $this->pdo->prepare($sql);

            $CategoryID = $Category->getCategoryID();
            $categorieNom = $Category->getCategoryName();
            $stmt->bindParam(':CategoryID', $CategoryID, PDO::PARAM_INT);
            $stmt->bindParam(':categorieNom', $categorieNom, PDO::PARAM_STR);
            $stmt->execute();
            if ($stmt) {
                echo "<script>window.location.href = '../dashorad/afficheCategory.php';</script>";
            }
        } catch (PDOException $e) {
            echo "Errors: " . $e->getMessage();
        }
    }

}