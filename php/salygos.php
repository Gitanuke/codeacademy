<?php
$t = date ("h");
echo $t;
if ($t > 8) {
    echo "Have a good day";
}
        else echo 'Good evening';

echo '<br>';

$a=6;
if ($a ==5) echo 'Lygu';
elseif ($a > 5) echo 'daugiau';
else {
    echo 'maziau';
    echo '<br>';

}