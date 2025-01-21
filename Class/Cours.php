<?php
abstract class Cours
{
    private $titre;
    private $description;
    private $contenu;
    private $enseignant_id;
    private $category_id;
    private $statu;
    private $imageCours;
    // private $document;
    private $idCours;




    // protected $pdo;

    public function __construct($titre, $description, $enseignant_id, $category_id, $statu, $imageCours, $idCours)
    {
        $db = new Database();
        $this->pdo = $db->getPdo();

        $this->titre = $titre;
        $this->description = $description;
        $this->enseignant_id = $enseignant_id;
        $this->category_id = $category_id;
        $this->imageCours = $imageCours;
        $this->document = $document;
        $this->statu = $statu;
        $this->idCours = $idCours;




    }

    // Getters and Setters
    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    public function getStatu()
    {
        return $this->statu;
    }

    public function setStatu($statu)
    {
        $this->statu = $statu;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    public function getEnseignantId()
    {
        return $this->enseignant_id;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function getImageCours()
    {
        return $this->imageCours;
    }
    public function getCoursID()
    {
        return $this->idCours;
    }
    public function setCoursID($idCours)
    {
        $this->idCours = $idCours;
    }

    public function setImageCours($imageCours)
    {
        $this->imageCours = $imageCours;
    }

    abstract public function ajouteCours($videoChoice);

    abstract public function updteCours($data);
}