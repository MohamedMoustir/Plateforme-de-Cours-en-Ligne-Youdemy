<?php

class tags
{

    private $idtags;
    private $nomtags;

    private $coursId;
    private $pdo;


    public function __construct($idtags = null, $nomtags = null)
    {
        $db = new Database();
        $this->pdo = $db->getPdo();
        $this->idtags = $idtags;
        $this->nomtags = $nomtags;
    }

    // Getters
    public function GetTagNom()
    {
        return $this->nomtags;
    }

    public function GetTagId()
    {
        return $this->idtags;
    }

    public function SetTagNom($nomtags)
    {
        $this->nomtags = $nomtags;
    }

    public function getcoursId()
    {
        return $this->idtags;
    }
    public function SetTagid($idtags)
    {
        $this->idtags = $idtags;
    }

    public function AjouteTags($nomtag)
    {

        try {
            foreach ($nomtag as $key => $nomtags) {


                $sql = "INSERT INTO tags(nomTag) VALUES (:nomtags) ";

                $stmt = $this->pdo->prepare($sql);

                $this->SetTagNom($nomtags);

                $stmt->bindParam(':nomtags', $this->nomtags, PDO::PARAM_STR);

                $stmt->execute();
            }
        } catch (PDOException $e) {
            echo "Errors: " . $e->getMessage();
        }
    }


    public function afficherTags($tags)
    {
        try {
            $idtags = $tags->GetTagId();
            $categoriesWithTags = [];

            if ($idtags === null) {
                $sql = "SELECT * FROM tags";
                $stmt = $this->pdo->prepare($sql);
            } else {
                $sql = "SELECT * FROM tags WHERE idTag = :idtags";
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindParam(':idtags', $idtags, PDO::PARAM_INT);
            }

            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                $categoriesWithTags[] = new tags($row->idTag, $row->nomTag);
            }

            return $categoriesWithTags;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }



    // public function insertArticle_Tags($articleId,$tags) {
    //     try {
    //         $sql = "INSERT INTO Article_Tags (id_article, id_tag) VALUES (:articleId, :tagId)";
    //         $stmt = $this->pdo->prepare($sql);

    //         $stmt->bindParam(':articleId', $articleId, PDO::PARAM_INT);
    //         $stmt->bindParam(':tagId', $tagId, PDO::PARAM_INT);

    //         foreach ($tags as $tagId) {
    //             $stmt->execute();
    //         }

    //     } catch (PDOException $e) {
    //         echo "Error: " . $e->getMessage();
    //     }
    // }



    public function removetag($tags)
    {
        try {
            $idtags = $tags->GetTagId();

            $sql = "DELETE  FROM tags WHERE idTag = :idtags";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':idtags', $idtags, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt) {
                echo "<script>window.location.href = '../dashorad/afficheTags.php';</script>";
            }
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }




    public function EditeTags($tags)
    {
        $tags->SetTagNom($tags->GetTagNom());
        $tags->SetTagid($tags->GetTagId());


        try {
            $sql = "UPDATE tags SET nomTag = :nomtags WHERE idTag = :idtags";
            $stmt = $this->pdo->prepare($sql);


            $idtags = $tags->GetTagId();
            $nomtags = $tags->GetTagNom();

            $stmt->bindParam(':idtags', $idtags, PDO::PARAM_INT);
            $stmt->bindParam(':nomtags', $nomtags, PDO::PARAM_STR);
            $stmt->execute();
            if ($stmt) {
                echo "<script>window.location.href = '../dashorad/afficheTags.php';</script>";
            }
        } catch (PDOException $e) {
            echo "Errors: " . $e->getMessage();
        }
    }



    public function insertAsoustion($coursId, $idtags)
    {
        try {
            foreach ($idtags as $idtag) {

                $sql = "INSERT INTO cours_tags (cours_id, tag_id) VALUES (:coursId, :idtags)";
                $stmt = $this->pdo->prepare($sql);


                $stmt->bindParam(':coursId', $coursId, PDO::PARAM_INT);
                $stmt->bindParam(':idtags', $idtag, PDO::PARAM_INT);

                $stmt->execute();
            }

            if ($stmt) {
                echo "<script>window.location.href = '../Formateur/AjouteCours.php';</script>";
            }

        } catch (PDOException $e) {
            echo "Errors: " . $e->getMessage();
        }
    }

    public function UpdateTableAsoustion($coursId, $idtags)
    {
        try {
            foreach ($idtags as $idtag) {

                $updateSql = "UPDATE cours_tags SET tag_id = :idtags WHERE cours_id = :coursId AND tag_id = :idtags";
                $updateStmt = $this->pdo->prepare($updateSql);
                $updateStmt->bindParam(':coursId', $coursId, PDO::PARAM_INT);
                $updateStmt->bindParam(':idtags', $idtag, PDO::PARAM_INT);
                $updateStmt->execute();
            }


            echo "<script>window.location.href = '../Formateur/AjouteCours.php';</script>";


        } catch (PDOException $e) {
            echo "Errors: " . $e->getMessage();
        }
    }



}