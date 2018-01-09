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
    <?php include 'auto-header.php'?>
    <table class="mx-auto w-100">

    <?php
include 'auto.php';
if (isset ($_POST['delete'])) {
    include 'auto-delete.php';
}
else if (isset ($_POST['update-form'])) {
    include 'auto-update-form.php';
}

else if (isset ($_POST['rent-form'])) {
    include 'auto-rent-form.php';
}
?>
    </table>d
</div>
</body>
</html>