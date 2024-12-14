<?php

echo "Menentukan Bilangan Positif dan Negatif\n";
echo "Masukkan bilangan\n";
$b = readline();

if (is_numeric($b)){
if ($b > 0)
 echo "Bilangan Positif";
elseif ($b < 0)
 echo "Bilangan Negatif";
elseif ($b == 0)
 echo "Bilangan 0";}
else {
    echo "Salah Input";
}



?>