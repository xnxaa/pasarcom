<?php

function time_helper()
{
    $a = gmdate('H:i', time() + 7 * 3600);
    if (($a >= 1) && ($a <= 11)) {
        echo "Selamat Pagi";
    } else if (($a >= 11) && ($a <= 14)) {
        echo "Selamat Siang";
    } else if (($a >= 14) && ($a <= 18)) {
        echo "Selamat Sore";
    } else if (($a >= 18) && ($a <= 24)) {
        echo "Selamat Malam";
    } else {
        echo "Selamat datang";
    }
}
