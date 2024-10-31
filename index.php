<?php
require_once 'Controller/stagiaire_controller.php';
if(isset($_GET['action'])){
    $action = $_GET['action'];
    switch($action){
        case 'create':
            createAction();

            break;
        case 'delete':
            deleteAction();
            break;
        case 'list':
            indexAction();
            break;
        case 'update':
            updateAction();
            break;
        case 'edit':
            updateAction2();
            break;
        case 'store':
            storeAction();
            break;






    }
}







?>
   
