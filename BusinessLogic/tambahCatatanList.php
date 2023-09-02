<?php
// tambah

function tambahCatatanList(string $catat)
{
    global $catatans;

    $number = sizeof($catatans) + 1;

    $catatans[$number] = $catat;
}
