<?php

$nama = "rusnanda purnama";
$nama = null;

$age = null;

echo "NAMA : $nama\n";
echo "UMUR : $age\n";

var_dump(is_null($age));
unset($age);
var_dump(isset($age));
/*
null adalah tipe data yang merepresantasikan nilai kosong,
jika anda ingin membuat variable yang isi nilainya kosong bisa menggunakan null
jika anda ingin mengkosongkan suatu variable yang sebelumnya sudah ada nilai bisa menggunakan null
null bisa di tulis insensitive, mau NULL / null /Null semua sama saja
lebih baik menggunakan huruf kecil semua agar familiar dan sama dengan bahasa pemograman lainnya

knowlage tambahan : 
function is_null() => mengecek nilai suatu variable apakah bernilai null, jika iya maka return true, returnnya boolan
function unset() => digunakan untuk mendelete atau menghapus variable ke akar akarnya
function isset() => mengecek variable ada atau tidak dan nilainya bukan null, return value nya boolan juga

*/
?>