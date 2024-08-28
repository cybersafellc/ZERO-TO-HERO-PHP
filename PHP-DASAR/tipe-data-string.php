<?php
// petik 1
echo 'Hello World';

// petik 2
echo "\n";
echo "Nama : \n";
echo "Rusnanda Purnama";
echo "\n";

$nama  = "rusnanda purnama";

// heredoc
echo <<<BEBASTAG
Ini adalah cara ke 3 untuk menulisakan string di bahasa pemograman php
yaitu dengan menggunakan heredoc, keunggulan dari heredoc kita bisa menambahkan enter dan tab
seperti menulis text di word. bedahalnya dengan doble quote harus menggunakan escape squence.

$nama
BEBASTAG;

// nowdoc
echo <<<'TAGNYA'
    Sama aja seperti here doc, bedanya nowdoc tidak bisa parsing variable di dalam string
    contoh dibawah saya panggila variable nama

    $nama
TAGNYA;

?>

<!-- 

tipe data string adalah tipe data representasi dati text, 3 cara penulisan string
1. Singgle quote => ''
2. Double quote => " " => kelebihan petik 2 "" bisa untuk menambahkan escape squence \n contohnya enter, tab, dll
3. Heredoc & nowdoc => <<<NAMATAG isinya NAMATAG ;



-->