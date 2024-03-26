<?php

// Data
$data = array(
    "Data 1" => array(
        "Lumba-lumba" => array(97, 108, 89),
        "Koala" => array(89, 91, 110)
    ),
    "Data Bonus 1" => array(
        "Lumba-lumba" => array(97, 112, 101),
        "Koala" => array(109, 95, 123)
    ),
    "Data Bonus 2" => array(
        "Lumba-lumba" => array(97, 112, 101),
        "Koala" => array(109, 95, 106)
    )
);

// Hitung skor rata-rata untuk setiap tim
function hitungRataRata($data)
{
    $rata_rata = array();
    foreach ($data as $nama_tim => $skor) {
        $rata_rata[$nama_tim] = array_sum($skor) / count($skor);
    }
    return $rata_rata;
}

// Menentukan pemenang
function tentukanPemenang($rata_rata)
{
    $pemenang = "";
    $max_skor = max($rata_rata);
    $min_skor = min($rata_rata);

    // Jika ada skor minimum 100
    if ($max_skor >= 100 || $min_skor >= 100) {
        // Jika ada tim yang menang
        if ($max_skor > $min_skor) {
            $pemenang = array_search($max_skor, $rata_rata);
        } elseif ($max_skor == $min_skor) {
            $pemenang = "Seri";
        } else {
            $pemenang = "Tidak ada tim yang memenangkan trofi";
        }
    } else {
        $pemenang = "Tidak ada tim yang memenangkan trofi";
    }
    return $pemenang;
}

// Proses perhitungan dan menentukan pemenang
foreach ($data as $key => $value) {
    echo $key . "<br>";
    $rata_rata = hitungRataRata($value);
    foreach ($rata_rata as $tim => $rata) {
        echo "$tim: " . implode(", ", $value[$tim]) . " : " . round($rata, 2) . "<br>";
    }
    $pemenang = tentukanPemenang($rata_rata);
    echo "Hasil : $pemenang <br> -------------------------------------------------------<br>";
}
