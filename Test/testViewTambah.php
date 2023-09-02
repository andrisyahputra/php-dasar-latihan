<?php
require_once __DIR__ . "/../View/viewTambahCatatanList.php";
require_once __DIR__ . "/../BusinessLogic/tambahCatatanList.php";
require_once __DIR__ . "/../BusinessLogic/tampilCatatanList.php";


tambahCatatanList("Coba 1");
tambahCatatanList("Coba 2");
tambahCatatanList("Coba 2");

viewTambahCatatanList();

tampilCatatanList();

tambahCatatanList("Coba 2");

tampilCatatanList();