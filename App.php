<?php
require_once __DIR__ . "/Model/Catatans.php";
require_once __DIR__ . "/BusinessLogic/tampilCatatanList.php";
require_once __DIR__ . "/BusinessLogic/tambahCatatanList.php";
require_once __DIR__ . "/BusinessLogic/hapusCatatanList.php";
require_once __DIR__ . "/View/viewTampilCatatanList.php";
require_once __DIR__ . "/View/viewTambahCatatanList.php";
require_once __DIR__ . "/View/viewHapusCatatanList.php";
require_once __DIR__ . "/Helper/input.php";

echo "Aplikasi Catatan" . PHP_EOL;
viewTampilCatatanList();
