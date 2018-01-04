<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-01-03
 * Time: 11:48
 */

session_start();

if(!isset ($_SESSION['getinfo']));

$_SESSION['getinfo']= $_GET;

print_r($_GET);

$a= fopen("failai/11.1-file.txt", "a");
$s = '';
foreach ($_GET as $key=>$value){
    $s .=' ' .$key.'=>'.$value;
}
fwrite ($a, $s);
fclose($a);

//header('location: 11.1-frontend.html'); // redirektinti vartotoją į įvedimo formos html dokumentą