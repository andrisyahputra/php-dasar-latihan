<?php
// tambah

function hapusCatatanList(int $number)
{
    global $catatans;

    if ($number > sizeof($catatans) || $number == 0) {
        return false;
    }

    for ($i = $number; $i < sizeof($catatans); $i++) {
        $catatans[$i] = $catatans[$i + 1];
    }

    unset($catatans[sizeof($catatans)]);
}
