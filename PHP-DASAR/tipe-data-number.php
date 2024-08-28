<?php
    // int
    echo "Decimal : ";
    var_dump(1234);

    echo "Octal : ";
    var_dump(0123);

    echo "Hexadecimal : ",
    var_dump(0x1A);

    echo "Binary : ";
    var_dump(0b111111111);

    echo "Underscore di number : ";
    var_dump(1_234_567);
    // Floar
    echo "Floating Point : ";
    var_dump(1.234);

    echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
    var_dump(1.2e3);

    echo "Floating Point dengan E notation Minus (7 x 0.001) : ";
    var_dump(7e-3);

    echo "Underscore di Floating Point : ";
    var_dump(1_234.567);

    // integer overflow
    echo "Test integer overflow 64 bit : ";
    var_dump(9223372036854775807)
?>

<!-- 
    tipe data number di PHP itu ada 2 yaitu
    1. int
    2. float

    #integer overflow
    int yang otomatis ngekonversi ke float jika melebihi kapasitas int
    os 64 bit =>  9223372036854775807 
    os 32 bit =>  2147483647 

    Knowlage tambahan :
    function var_dump() => ini digunakan untuk menampilkan data beserta dengan informasi tipe datanya
    function echo => menampilkan data
-->