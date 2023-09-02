<?php
require_once "../Model/Catatans.php";
require_once "../BusinessLogic/tambahCatatanList.php";
require_once "../BusinessLogic/tampilCatatanList.php";
require_once "../BusinessLogic/HapusCatatanList.php";

tambahCatatanList("Belajar A");
tambahCatatanList("Belajar B");
tambahCatatanList("Belajar C");


tampilCatatanList();

hapusCatatanList(2);

tampilCatatanList();

hapusCatatanList(5);
tampilCatatanList();