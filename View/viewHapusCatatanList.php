<?php
require_once __DIR__ . "/../BusinessLogic/hapusCatatanList.php";
require_once __DIR__ . "/../Helper/input.php";

function viewHapusCatatanList()
{
    echo "Hapus Catatan" . PHP_EOL;

    $pilihan = trim((int)input("Nomor (0 untuk Batalkan)"));

    if ($pilihan == "0") {
        echo "Batal Menghapus" . PHP_EOL;
    } else {
        $success = hapusCatatanList($pilihan);

        if ($success == NULL) {
            echo "Sukses Menghapus Catatan $pilihan " . PHP_EOL;
        } else {
            echo "Gagal Menghapus Catatan $pilihan" . PHP_EOL;
        }
    }
}
