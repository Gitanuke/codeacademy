<?php

//foreach($_POST as $key =>$value){
    //echo $key . ': ' . $value . '<br>';

session_start();
if (!isset ($_SESSION['postoinfo']));

$_SESSION['postoinfo']= $_POST;

print_r($_POST);
//header('Location: egzo-forma-imone-forma-html.php');
?>