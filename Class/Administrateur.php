<?php

require_once "Utilsateur.php";
class Administrateur extends Utilisateur
{

    public function __construct($nom = null, $email = null, $motDePasse = null, $role = null, $photoProfil = null, $Actions = null, $id = null)
    {
        parent::__construct($nom, $email, $motDePasse, $role, $photoProfil, $Actions, $id);

    }

    public function Allutilisateurs()
    {
        try {
            $stmt = "SELECT * FROM utilisateur ";
            $stmt = $this->pdo->prepare($stmt);
            $stmt->execute();

            $listUser = [];
            while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                $listUser[] = new Administrateur(

                    $row->nom,
                    $row->email,
                    $row->motDePasse,
                    $row->role,
                    $row->photoProfil,
                    $row->Actions,
                    $row->id,
                );
            }
            return $listUser;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public function archivedUsers($users)
    {
        try {
            if (isset($_GET['Active'])) {
                $Actions = 1;
            } elseif ('archived') {
                $Actions = -1;
            }

            $id = $users->getID();


            if (empty($id)) {
                echo "";
                return;
            }

            $sql = "UPDATE utilisateur SET Actions = :Actions WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':Actions', $Actions, PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo "<script>
                    window.location.href = 'utilisateur.php';
                  </script>";
            }

        } catch (PDOException $e) {
            echo "Errors: " . $e->getMessage();
        }
    }


    public function removeUtilisateur($users)
    {
        try {
            $id = $users->getID();
            $sql = "DELETE  FROM utilisateur WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt) {
                echo "<script>window.location.href ='utilisateur.php';</script>";
            }
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function CancelCours($cours)
    {

        try {
            $id = $cours->getID();
            $query = $this->pdo->prepare("UPDATE cours SET statu ='rejected' WHERE coursID = :id");
            $query->bindParam(':id', $id, PDO::PARAM_INT);

            $query->execute();


            if ($query->rowCount() > 0) {
                echo "<script>window.location.href = 'cour.php';</script>";

                exit;
            } else {
                return "No rows were updated.";
            }
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }

    }



    public function approvedCours($cours)
    {
        try {
            $id = $cours->getID();
            $query = $this->pdo->prepare("UPDATE cours SET statu ='approved' WHERE coursID = :id");
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
            if ($query->rowCount() > 0) {
                echo "<script>window.location.href = 'cour.php';</script>";
                exit;
            } else {
                return "No rows were updated.";
            }
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }

    }

    // Statistiques
    public function TotalCours()
    {

        $query = "SELECT 
        count(*)
    FROM 
        cours
    ";

        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchColumn();
    }

    public function totalUsers()
    {
        $query = "SELECT 
    count(*)
FROM 
    utilisateur
";

        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchColumn();

    }

    public function totalInactive()
    {
        $query = "SELECT 
    count(*)
FROM 
    utilisateur
    WHERE Actions = -1
";

        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchColumn();

    }

    public function pourcentage_inscriptions()
    {
        $query = "SELECT 
            cours.titre,
            LEFT((COUNT(cours_inscriptions.cours_id) * 100.0 / (SELECT COUNT(*) FROM cours)),2) AS pourcentage_inscriptions
            FROM cours 
            JOIN cours_inscriptions on cours.coursID = cours_inscriptions.cours_id
            GROUP BY cours.titre
            ORDER by  pourcentage_inscriptions desc LIMIT 3
            ";

        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function totalActive()
    {
        $query = "SELECT 
    count(*)
FROM 
    utilisateur
    WHERE Actions = 1
";

        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchColumn();

    }

    public function CoursActive()
    {

        $query = "SELECT 
        count(*)
    FROM 
        cours 
        where statu ='approved'
    ";

        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchColumn();
    }

    public function pourcentage_Cours_Users()
    {
        $query = " SELECT 
            LEFT((COUNT(cours_inscriptions.cours_id) * 100.0 / (SELECT COUNT(*) FROM utilisateur)),2) AS pourcentage_inscriptions
            FROM cours 
            JOIN cours_inscriptions on cours.coursID = cours_inscriptions.cours_id
            ";

        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchColumn();

    }
}


?>