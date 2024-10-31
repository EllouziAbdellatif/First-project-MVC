<?php
require_once 'Model/stagiare.php';
function indexAction()
{
    $etudiants = liste_stagiare();
    require_once 'views/liste_stagiare.php';
}

function createAction()
{
    require_once 'views/create_str.php';
}

function storeAction()
{
    $isCreated = create_stagiare();
    header('location:index.php?action=list');
}

function deleteAction()
{
    $isDeleted = delete_stagiaire();
    header('location:index.php?action=list');
    
}

function updateAction()
{
    $id = $_GET['id'];
    $stagiaire = SelectUpdate();
    require_once 'Views/update_str.php';
    
}

function updateAction2()
{
   $id= $_POST['id'];
   $nom = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $age = $_POST['age'];
   UpdateStagiare($id , $nom , $prenom , $age);
   header('location:index.php?action=list');
}









?>