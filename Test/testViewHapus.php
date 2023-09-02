<?php
require_once __DIR__ . "/../Model/Catatans.php";
require_once __DIR__ . "/../View/viewHapusCatatanList.php";
require_once __DIR__ . "/../BusinessLogic/tambahCatatanList.php";
require_once __DIR__ . "/../BusinessLogic/tampilCatatanList.php";

tambahCatatanList("coba 1");
tambahCatatanList("coba 2");
tambahCatatanList("coba 3");
tambahCatatanList("coba 4");

tampilCatatanList();
viewHapusCatatanList();
tampilCatatanList();