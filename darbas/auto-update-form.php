<?php
$car = false;
if (isset($_POST['update-form'])){
    $auto = new auto();
    $car = $auto->get($_POST['update-form']);
}
if ($car === false){
    $car = [
        'id' => '',
        'gamintojas' => '',
        'modelis' => '',
        'metai' => '',
        'kaina' => '',
        'pastabos' => '',
        'nuotrauka' => '',
        'mime' => ''
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Naujo automobilio įvedimas</title>
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
<h3>Naujo automobilio įvedimas</h3>
<form method="post" action="auto-update.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="gamintojas"><b>Gamintojas:</b></label><br>
        <input type="text" class="form-control" id="gamintojas" name="gamintojas" value="<?php echo $car['gamintojas'] ?>">
        <label for="modelis"><b>Modelis:</b></label><br>
        <input type="text" class="form-control" id="modelis" name="modelis" value="<?php echo $car['modelis'] ?>">
        <label for="metai"><b>Metai:</b></label><br>
        <input type="text" class="form-control" id="metai" name="metai" value="<?php echo $car['metai'] ?>">
        <label for="kaina"><b>Kaina, EUR/dienai:</b></label><br>
        <input type="text" class="form-control" id="kaina" name="kaina" value="<?php echo $car['kaina'] ?>">
        <label for="pastabos"><b>Pastabos:</b></label><br></textarea>
        <textarea class="form-control" id="pastabos" name="pastabos"><?php echo $car['pastabos'] ?></textarea>
        <label for="nuotrauka"><b>Pasirinkite nuotraukos failą:</b></label><br>
        <input type="file" class="form-control" id="nuotrauka" name="nuotrauka">
        <button type="submit" class="btn btn-primary mt-1" name="submit">Vykdyti</button>
    </div>
<input type="hidden" name="id" value="<?php echo $car['pastabos'] ?>"
</form>
</body>
</html>