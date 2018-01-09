<?php
include 'auto.php';
$auto= new auto();
$cars=$auto->getList();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link>
    <meta name="viewport" content="width=device-width, initial-scale=1"  charset="UTF-8">
    <title>Automobilių nuoma </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="auto.css" type="text/css">
</head>
<body>
<div class="container-flex">
    <div class="site-header">
        <table class="mx-auto w-100">
            <tr>
                <td><img class="site-logo" src="http://gitanamac.lt/darbas/images/auto.png"></td>
                <td>
                    <h1 class="site-title">Automobilių nuoma 7/24</h1>
                <div class="row site-header-top-grid">
                    <div class="col p-0"><button class="btn m-0 p-0 pb-1 pr-2"><i class="fa fa-phone pr-1" aria-hidden="true"></i>+370 601 55442</button></div>
                    <div class="col p-0 p1-1"><a href="https://www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></div>
                    <div class="col p-0 p1-1"><a href="https://www.twitter.com"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></div>
                    <div class="col p-0 p1-1"><a href="https://www.google.com"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></div>
                </div>
                </td>
            </tr>
        </table>
    </div>
<div class="site-menu">
    <div class="mx-auto">
        <nav class="navbar navbar-expand-sm m-0 p-0">
            <ul class="navbar-nav nav-pills">
                <li class="nav-item active">
                    <a class="nav-link" href="/darbas"><i class="fa fa-home" aria-hidden="true"></i>Titulinis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/darbas/auto-actions.php"><i class="fa fa-car" aria-hidden="true"></i>Pridėti naują automobilį</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
    <div class="mx-auto site-body">
        <form action="auto-actions.php" method="post">
        <table class="table table-responsive table-striped mt-1 site-car-list">
            <thead class="thead-light">
            <tr>
                <th>Nuotrauka</th>
                <th>Gamintojas</th>
                <th>Modelis</th>
                <th>Metai</th>
                <th>Kaina</th>
                <th>Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            <?php

            foreach ($cars as $car){
                echo '<tr>';
                echo '<td>' .'<img src="data:' . $car['mime'] . ';base64,' . base64_encode($car['nuotrauka'])  . '"></td>';
                echo '<td>'.$car['gamintojas'] . '</td>';
                echo '<td>'.$car['modelis']. '</td>';
                echo '<td>'.$car['metai'] . '</td>';
                echo '<td>'.$car['kaina'] . '</td>';
                echo '<td style="white-space:nowrap">
        <button class="btn btn-danger mr-1" type="submit" name="delete" value="' .$car['id'].'">Pašalinti</button>
                <button class="btn btn-info mr-1" type="submit" name="update-form" value="' .$car['id'].'">Redaguoti</button>
<button class="btn btn-success" type="submit" name="rent-form" value="' .$car['id'].'">Užsakyti</button></td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
        </form>
    </div>
</div>










</body>
</html>