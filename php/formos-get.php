<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gitana mac</title>
</head>
<body>
<?php
$a = new handleForm();
?>
<form method="get" action="formos-get.php">

    <label>Vardas: </label><input name="vardas" type="text"  value="<?php echo $a->getVariable ("vardas")?>"><br>
    <label>Pavarde: </label><input name="pavarde" type="text" value="<?php echo $a->getVariable ("pavarde")?>"><br>
    <label>Slaptazodis: </label><input name="slaptazodis" type="password"><br>
<input type="submit" value="Vykdyti">
</form>
<?php
//var_dump ($_GET); //Sudedami asociatyvus
 //echo json_encode($_GET);
//var_export($_GET); //var_export geriausiai rodo, labiausaii panasu i masyva

class handleForm
{
    public $text;

    function __construct()
    {
        $this->text = '';
        if (count($_GET) > 0) {
            foreach ($_GET as $key => $value) {
                $this->text .= $key . '=' . $value . "<br>";
            }
        }

    }

    function toFile()
    {
        $f = fopen("failai/forma-get-parms.txt", "w") or die ("Unable to open file!"); //ties file nurodom i ka irasom , die tik klaidos atveju
        fwrite($f, $this->text);
        fclose($f);
    }

    function fromFile()
    {
        $f = fopen("failai/forma-get-parms.txt", "r") or die ("Unable to open file!");
        $s= fread($f, filesize("failai/forma-get-parms.txt"));
        fclose($f);
        return $s;
    }
    function getVariable($name){
        if (isset ($_GET[$name])) return $_GET[$name];
        else return '';
    }
}

$a = new handleForm();
$a-> toFile ();
$x= $a->fromFile ();
echo $x;
?>

</body>
</html>


