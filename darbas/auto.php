<?php
class auto{
    public$message='';
    public$cnn=false;
    function __construct(){
        $this->message = "Prisijungimas pavyko";
        try {
            $this->cnn = new PDO('mysql:host=gitanamac.lt;dbname=test', 'root');
            $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->message .= 'sekmingas';
        }
        catch (PDOException $e){
                $this->message="Prisijungimas nepavyko:" . $e->getMessage();
            }

        function getList(){
            $this->message= "Automobiliu saraso skaitymas is DB";
            $cars = [];
            try {
                $sql= "select "





            }



        }
            $res[] = "{$row['asm_vardas']} {$row['asm_pavarde']}, {$row['asm_gdata']} {$post->pasirinkimas}";



        }


}

$a = new auto ();
var_dump ($a);

