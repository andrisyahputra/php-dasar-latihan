<?php
require_once __DIR__ .  "/../Model/Catatans.php";
require_once __DIR__ .  "/../BusinessLogic/tambahCatatanList.php";
require_once __DIR__ .  "/../Helper/input.php";

function viewTambahCatatanList()
{
    echo "Tambah Catatan" . PHP_EOL;

    $catat = trim(input("Tambah Catatan (x untuk batal) "));

    if ($catat == "x") {
        //batal
        echo "Batal Menambah Catatan" . PHP_EOL;
    } else {
        tambahCatatanList($catat);
    }
}
