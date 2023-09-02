<?php
require_once __DIR__ . "/../Model/Catatans.php";
require_once __DIR__ . "/../BusinessLogic/tampilCatatanList.php";
require_once __DIR__ . "/../View/viewHapusCatatanList.php";
require_once __DIR__ . "/../View/viewTambahCatatanList.php";
require_once __DIR__ . "/../Helper/input.php";

function viewTampilCatatanList()
{
    while (true) {
        echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . PHP_EOL;
        tampilCatatanList();
        echo "~~~~~~Menu~~~~~~~" . PHP_EOL;
        echo "1. Tambah Catatan" . PHP_EOL;
        echo "2. Hapus Catatan" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = trim(input("Pilih"));
        if ($pilihan == "1") {
            viewTambahCatatanList();
        } else if ($pilihan == "2") {
            viewHapusCatatanList();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan Tidak Mengerti" . PHP_EOL;
        }
    }

    echo "Terimakasih" . PHP_EOL;
}
