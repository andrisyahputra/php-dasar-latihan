<?php

/** 
 * tampil catatan
 * 
 * */

function tampilCatatanList()
{
    global $catatans;

    echo "Catatan Saya" . PHP_EOL;

    foreach ($catatans as $number => $catat) {
        echo "$number.$catat" . PHP_EOL;
    }
}
