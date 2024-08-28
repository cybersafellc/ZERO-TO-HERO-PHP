<?php

$name = "rusnanda purnama";
$age = "22";

echo "Nama : $name\n";
echo "Umur : $age\n";

//variable variables
$variableSatu = "nanda";
$$variableSatu = "purnama";
echo $nanda;
/*
variable adalah wadah atau penampung suatu nilai
nilai yang ditampung bisa berupa tipe data apapun
variable di php bersifat dinamis bisa di ubah ubah nilai tipe datanya dan tidak ada deklarasi tipe datanya seperti c or java lenguage,
example : $namaVariable = "bebas isinya"


fitur aneh di php yaitu variable variables
membuat nama variable dengan isi string variable yang mau kita pakai
JANGAN DIPAKAI
*/
?>