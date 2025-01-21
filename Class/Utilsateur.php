<?php
session_start();
class Utilisateur
{

    private $nom;
    private $email;
    private $motDePasse;
    private $photoProfil;
    private $role;
    private $Actions;
    private $id;
    private $pages;
    // protected $pdo;

    public function __construct($nom = null, $email = null, $motDePasse = null, $role = null, $photoProfil = null, $Actions = null, $id = null)
    {
        $db = new Database();
        $this->pdo = $db->getPdo();

        $this->nom = $nom;
        $this->email = $email;
        $this->motDePasse = $motDePasse;
        $this->role = $role;
        $this->photoProfil = $photoProfil;
        $this->Actions = $Actions;
        $this->id = $id;

    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = password_hash($motDePasse, PASSWORD_BCRYPT);
    }

    public function getPhotoProfil()
    {
        return $this->photoProfil;
    }

    public function setPhotoProfil($photoProfil)
    {
        $this->photoProfil = $photoProfil;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getActions()
    {
        return $this->Actions;
    }

    public function setActions($Actions)
    {
        $this->Actions = $Actions;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setPage($pages)
    {
        $this->pages = max(1, intval($pages));
    }

    public function getPage()
    {
        return $this->pages;
    }

    public function register($utilisateur)
    {



        try {
            $nom = $utilisateur->getNom();
            $email = $utilisateur->getEmail();
            $hashedPassword = password_hash($utilisateur->getMotDePasse(), PASSWORD_BCRYPT);
            $photoProfil = $utilisateur->getPhotoProfil();
            $role = $utilisateur->getRole();
            $Actions = $utilisateur->getActions();

            if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
                $permited = array('jpg', 'png', 'jpeg', 'gif');
                $file_name = $_FILES['avatar']['name'];
                $file_size = $_FILES['avatar']['size'];
                $file_temp = $_FILES['avatar']['tmp_name'];

                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));

                if (in_array($file_ext, $permited)) {

                    if ($file_size <= 2097152) {
                        $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
                        $photoProfil = "../../image/" . $unique_image;
                        $this->setPhotoProfil($photoProfil);
                        if (move_uploaded_file($file_temp, $photoProfil)) {

                            echo "L'image a été téléchargée avec succès.";
                        } else {
                            echo "Échec du téléchargement de l'image.";
                        }
                    } else {
                        echo "La taille du fichier est trop grande. La taille maximale autorisée est de 2 Mo.";
                    }
                } else {
                    echo "Le type de fichier n'est pas pris en charge. Veuillez télécharger une image au format jpg, png, jpeg ou gif.";
                }
            } else {
                echo "Aucun fichier n'a été sélectionné ou une erreur s'est produite lors du téléchargement.";
            }

            $Actions = ($role === 'Enseignant') ? 0 : 1;

            $query = "INSERT INTO utilisateur (nom, email, motDePasse, role, photoProfil, Actions) 
                      VALUES (:nom, :email, :motDePasse, :role, :photoProfil, :Actions)";

            $stmt = $this->pdo->prepare($query);


            $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':motDePasse', $hashedPassword, PDO::PARAM_STR);
            $stmt->bindParam(':role', $role, PDO::PARAM_STR);
            $stmt->bindParam(':photoProfil', $photoProfil, PDO::PARAM_STR);
            $stmt->bindParam(':Actions', $Actions, PDO::PARAM_INT);

            if ($stmt->execute()) {
                header('Location: login.php');
                exit();
            }
        } catch (PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        }
    }

    public function login($users)
    {
        try {
            $query = "SELECT * FROM utilisateur WHERE email = :email";
            $stmt = $this->pdo->prepare($query);
            $email = $users->getEmail();
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            $user = null;
            while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                $user = new Utilisateur($row->nom, $row->email, $row->motDePasse, $row->role, $row->photoProfil, $row->Actions, $row->id);
                break;
            }


            if ($user) {


                if (password_verify($users->getMotDePasse(), $user->getMotDePasse())) {

                    $_SESSION['id_users'] = $user->getID();
                    $_SESSION['email'] = $user->getEmail();
                    $_SESSION['name'] = $user->getNom();
                    $_SESSION['role'] = $user->getRole();

                    if ($user->getRole() == 'Etudiant' && $user->getActions() == 1) {
                        header('Location: ../index.php');
                        exit();
                    } elseif ($user->getRole() == 'Enseignant' && $user->getActions() == 1) {
                        header('Location: ../Formateur/AjouteCours.php');
                        exit();
                    } elseif ($user->getRole() == 'Administrateur' && $user->getActions() == 1) {
                        header('Location: ./../../Views/dashorad/cour.php');
                        exit();
                    }
                } else {
                    return "Incorrect password.";
                }
            } else {
                return "No user found with this email.";
            }
            return $user;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function logout()
    {

        session_unset();
        session_destroy();
        header('Location: login.php');
        exit();



    }

    public function paginationCours()
    {
        try {

            $starts = 0;
            $rows_pre_page = 6;

            $recordQuery = "SELECT COUNT(*) FROM cours
                            JOIN utilisateur ON cours.enseignant_id = utilisateur.id
                            JOIN categorie ON cours.category_id = categorie.categorieID
                            WHERE cours.statu = 'approved'";

            $filterQuery = "";

            if (isset($_GET['category']) && !empty($_GET['category'])) {
                $filterQuery = " AND categorie.categorieNom LIKE :category";
            }

            if (isset($_GET['category']) && empty($_GET['category'])) {
                header('Location: ../pages/grid_cours.php?page-nr=1');
                exit();
            }

            $recordQuery .= $filterQuery;

            $stmt = $this->pdo->prepare($recordQuery);

            if (!empty($filterQuery)) {
                $stmt->bindValue(':category', '%' . $_GET['category'] . '%', PDO::PARAM_STR);
            }

            $stmt->execute();
            $record = $stmt->fetchColumn();
            $this->pages = ceil($record / $rows_pre_page);

            $page = 0;
            if (isset($_GET['page-nr'])) {
                $page = intval($_GET['page-nr']) - 1;
                $starts = $page * $rows_pre_page;
            }

            $query = "SELECT * FROM cours
                      JOIN utilisateur ON cours.enseignant_id = utilisateur.id
                      JOIN categorie ON cours.category_id = categorie.categorieID
                      WHERE cours.statu = 'approved' " . $filterQuery . "
                      ORDER BY cours.coursID DESC
                      LIMIT :starts, :rows_pre_page";

            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':starts', $starts, PDO::PARAM_INT);
            $stmt->bindParam(':rows_pre_page', $rows_pre_page, PDO::PARAM_INT);

            if (!empty($filterQuery)) {
                $stmt->bindValue(':category', '%' . $_GET['category'] . '%', PDO::PARAM_STR);
            }

            $stmt->execute();
            $coursesArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $coursesArray;
        } catch (PDOException $e) {
            echo "Errors: " . $e->getMessage();
        }
    }

}
