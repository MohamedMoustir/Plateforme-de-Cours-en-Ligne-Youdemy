<?php

require_once "Utilsateur.php";
require_once "categorie.php";
require_once "CoursDocument.php";
require_once "tags.php";
require_once "CoursVideo.php";





class Enseignant extends Utilisateur
{
    private $totalNumbre;
    private $id_enseignant;

    public function __construct($nom = null, $email = null, $motDePasse = null, $role = null, $photoProfil = null, $totalNumbre = null,$id_enseignant=null)
    {
        parent::__construct($nom, $email, $motDePasse, $role, $photoProfil, null);
        $this->totalNumbre = $totalNumbre;
        $this->id_enseignant = $id_enseignant;


    }
    public function getTotalNumbre()
    {
        return $this->totalNumbre;
    }
    public function getid_enseignant()
    {
        return $this->id_enseignant;
    }
    public function afficheCours($email = null, $id = null)
    {
        try {
            $query = "SELECT 
                        r.coursID,  
                        r.titre,       
                        u.nom ,
                        r.description,
                        r.imageCours ,
                        u.photoProfil ,
                        c.categorieNom ,
                        GROUP_CONCAT(tags.nomTag) AS tags,
                        r.statu,
                        r.date,
                        r.CoursUrl,
                        r.URLVido
                    FROM 
                        cours r
                    LEFT JOIN 
                        cours_tags o ON r.coursID = o.cours_id
                    JOIN 
                        tags ON o.tag_id = tags.idTag
                    LEFT JOIN 
                        categorie c ON r.category_id = c.categorieID
                    LEFT JOIN 
                        utilisateur u ON r.enseignant_id = u.id";

            if ($id !== null) {
                $query .= " WHERE r.coursID = :id";
            }

            if ($email !== null) {
                $query .= $id !== null ? " AND u.email = :email" : " WHERE u.email = :email";
            }

            $query .= " GROUP BY r.coursID";

            $stmt = $this->pdo->prepare($query);

            if ($id !== null) {
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            }

            if ($email !== null) {
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            }

            $stmt->execute();

            if ($id !== null) {
                $results = $stmt->fetch(PDO::FETCH_OBJ);
                if ($results) {
                    $Category = new Category(
                        '',
                        $results->categorieNom,
                        ''
                    );
            
                    $cour = new CoursDocument(
                        $results->titre,
                        $results->description,
                        '',
                        '',
                        $results->statu,
                        $results->imageCours,
                        $results->CoursUrl,
                        $results->coursID
                    );
                    $courvideo = new CoursVideo(
                        $results->titre,
                        $results->description,
                        '',
                        '',
                        $results->statu,
                        $results->imageCours,
                        $results->URLVido,
                        $results->coursID
                    );
            
                    $Utilisateur = new Utilisateur(
                        $results->nom,
                        '',
                        '',
                        '',
                        $results->photoProfil,
                        '',
                        ''
                    );
                    
                    $tags = new tags(
                        '',
                        $results->tags,
                     
                    );
                    return [$cour, $Category, $Utilisateur,$tags,$courvideo];
                } else {
                    return "No course found for the specified ID.";
                }
            

            } else {
                $results = $stmt->fetchAll(PDO::FETCH_OBJ);

         if ($results) {
          $coursList = [];

    foreach ($results as $result) {
        $Category = new Category(
            '',
            $result->categorieNom,
            ''
        );

        $cour = new CoursDocument(
            $result->titre,
            $result->description,
            '',
            '',
            $result->statu,
            $result->imageCours,
            $result->CoursUrl,
            $result->coursID
        );
        $courvideo = new CoursVideo(
            $result->titre,
            $result->description,
            '',
            '',
            $result->statu,
            $result->imageCours,
            $result->URLVido,
            $result->coursID
        );

        $Utilisateur = new Utilisateur(
            $result->nom,
            '',
            '',
            '',
            $result->photoProfil,
            '',
            ''
        );
        
        $tags = new tags(
            '',
            $result->tags,
         
        );
        $coursList[] = [$cour, $Category,$Utilisateur,$tags,$courvideo];
    }

    return $coursList;
} else {
    return "No courses found.";
}

            }
            

        } catch (PDOException $e) {
            return "Erreur: " . $e->getMessage();
        }
    }



    public function removeCours($id)
    {
        try {
            $sql = "DELETE FROM cours WHERE coursID = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            header("Location: AjouteCours.php");
            exit;
        } catch (PDOException $e) {
            return "Erreur: " . $e->getMessage();
        }
    }





    public function nombreDinscriptions($cour)
    {

        $query = "SELECT 
            COUNT(cours_inscriptions.id_inscri) as totalNumbre
        FROM 
            cours
        LEFT JOIN 
            cours_inscriptions 
        ON 
            cours.coursID = cours_inscriptions.cours_id
            WHERE cours.coursID = :coursID
        GROUP BY 
            cours.coursID 
        ";


        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':coursID', $cour, PDO::PARAM_INT);
        $stmt->execute();

        $totalNumbre = $stmt->fetchColumn();

        return $totalNumbre;
    }

    public function EtudiantList($etudin)
    {
        $id_enseignant = $etudin->getid_enseignant();
        try {
            $sql = "SELECT 
            u.nom,
            c.titre,
            MAX(s.date) AS latest_date
        FROM cours_inscriptions s
        JOIN cours c on s.cours_id = c.coursID
        JOIN utilisateur u on s.etudiant_id = u.id
        WHERE c.enseignant_id = :id_enseignant
        GROUP BY  u.nom,c.titre;
                ";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':id_enseignant', $id_enseignant);


            $stmt->execute();


          
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
             return $categories;
        } catch (PDOException $e) {
            echo "Errors: " . $e->getMessage();
        }
    }

    public function TotalCoursDisponibles($coursID)
    {
      
        $query = "SELECT 
            count(*)
        FROM 
            cours
            WHERE statu = 'approved' AND cours.enseignant_id = :coursID
      
        ";


        $stmt = $this->pdo->prepare($query);
      $stmt->bindParam(':coursID',$coursID,PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchColumn();
    }
    public function TotalCoursnonDisponibles($coursID)
    {

        $query = "SELECT 
            count(*)
        FROM 
            cours
            WHERE statu = 'still' AND cours.enseignant_id = :coursID
      
        ";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':coursID',$coursID,PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchColumn();
    }
    public function TotalCours($coursID)
    {

        $query = "SELECT 
            count(*)
        FROM 
            cours
           WHERE cours.enseignant_id = :coursID
      
        ";

        $stmt = $this->pdo->prepare($query);
 $stmt->bindParam(':coursID',$coursID,PDO::PARAM_INT);
        $stmt->execute();
       
        return $stmt->fetchColumn();
    }
    public function TotalCoursInscrits($cours)
    {
        $query = "SELECT 
            COUNT(cours_inscriptions.id_inscri) as totalNumbre
        FROM 
            cours
        LEFT JOIN 
            cours_inscriptions 
        ON 
            cours.coursID = cours_inscriptions.cours_id
            JOIN utilisateur on cours.enseignant_id = utilisateur.id
            WHERE utilisateur.email = :email
        ";

        $stmt = $this->pdo->prepare($query);
        $email = $cours->getEmail();
        $stmt->bindParam(':email', $email);
        
        $stmt->execute();

        return $stmt->fetchColumn();
    }
}