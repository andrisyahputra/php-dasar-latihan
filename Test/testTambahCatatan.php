<?php
require_once "../Model/Catatans.php";
require_once "../BusinessLogic/tambahCatatanList.php";

tambahCatatanList("Belajar A");
tambahCatatanList("Belajar B");
tambahCatatanList("Belajar C");

var_dump($catatans);
