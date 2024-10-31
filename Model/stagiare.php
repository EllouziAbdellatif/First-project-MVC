<?php
function database_connection(){
    return new PDO('mysql:dbname=stagiare;host=localhost', 'root', '');  
}
function liste_stagiare()
{
    $pdo = database_connection();
    return  $pdo->query('SELECT * FROM etudiants')->fetchAll(PDO::FETCH_OBJ);
    
}

function create_stagiare()
{
    $nom = $_POST['nom']; $prenom = $_POST['prenom']; $age = $_POST['age'];
    $pdo = database_connection();
    $sqlstmt = $pdo->prepare("INSERT INTO etudiants (nom , prenom , age) VALUES (?,?,?)");
    $sqlstmt->execute([$nom , $prenom , $age]);
    return $sqlstmt;
}

function delete_stagiaire()
{
    $id = $_GET['id'];
    $pdo = database_connection();
    $sqlstate = $pdo->prepare("DELETE FROM etudiants WHERE id = ?");
    $sqlstate->execute([$id]);
    return $sqlstate;
}

function SelectUpdate()
{
    $id = $_GET['id'];
    $pdo = database_connection();
    $sqlstate = $pdo->prepare("SELECT * FROM etudiants WHERE id = ?");
    $sqlstate->execute([$id]);
    return $sqlstate->fetch(PDO::FETCH_OBJ) ;
    
}

function UpdateStagiare($id , $nom , $prenom , $age)
{
   // $id= $_POST['id'];$nom = $_POST['nom']; $prenom = $_POST['prenom']; $age = $_POST['age'];
    $pdo = database_connection();
    $sqlstmt = $pdo->prepare("UPDATE  etudiants SET nom = ? , prenom = ? , age = ? WHERE id = ?");
    return $sqlstmt->execute([$nom , $prenom , $age , $id]);

}










?>