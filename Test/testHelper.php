<?php
require_once "../Helper/input.php";

$nama = input("Nama");
echo "Hello $nama" . PHP_EOL;

$coba = trim(input("Test"));
// echo "Hello $coba" . PHP_EOL;
if ($coba == "x") {
    echo "Hello $coba" . PHP_EOL;
    var_dump($coba);
} else {
    var_dump($coba);
}
