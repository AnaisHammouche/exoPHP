<?php

function check($number)

{
if ($number % 2 == 0 ) {
    echo "Le nombre " . $number . " est Pair";
}
else {
    echo "Le nombre " . $number. " est Impair";
}
}


function checkstr($str)

{
    if ($str = [a-z]) {
        echo $str . " N'est pas un nombre";
    }

}

$number = 36;
$Enter = "Entrer un nombre: " . $number;
echo $Enter;
echo PHP_EOL;
check($number);

echo PHP_EOL;
$number = 89;
$Enter = "Entrer un nombre: " . $number;
echo $Enter;
echo PHP_EOL;
check($number);

echo PHP_EOL;
$number = 31;
$Enter = "Entrer un nombre: " . $number;
echo $Enter;
echo PHP_EOL;
check($number);

echo PHP_EOL;
$number = 8;
$Enter = "Entrer un nombre: " . $number;
echo $Enter;
echo PHP_EOL;
check($number);

echo PHP_EOL;
$number = 1;
$Enter = "Entrer un nombre: " . $number;
echo $Enter;
echo PHP_EOL;
check($number);

echo PHP_EOL;
$str = "waw";
$Enter = "Entrer un nombre: " . $str;
echo $Enter;
echo PHP_EOL;
checkstr($str);






?>