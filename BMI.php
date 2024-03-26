<?php

// Data
$data = array(
    "Data 1" => array(
        "Mark" => array("massa" => 78, "tinggi" => 1.69),
        "John" => array("massa" => 92, "tinggi" => 1.95)
    ),
    "Data 2" => array(
        "Mark" => array("massa" => 95, "tinggi" => 1.88),
        "John" => array("massa" => 85, "tinggi" => 1.76)
    )
);

// Hitung BMI
function hitungBMI($massa, $tinggi)
{
    return $massa / ($tinggi * $tinggi);
}

// Bandingkan BMI
function bandingkanBMI($mark, $john)
{
    return $mark > $john;
}

// Proses perhitungan
foreach ($data as $key => $value) {
    echo $key . "<br>";
    $mark_BMI = hitungBMI($value["Mark"]["massa"], $value["Mark"]["tinggi"]);
    $john_BMI = hitungBMI($value["John"]["massa"], $value["John"]["tinggi"]);
    echo "BMI Mark: " . round($mark_BMI, 2) . "<br>";
    echo "BMI John: " . round($john_BMI, 2) . "<br>";
    $markHigherBMI = bandingkanBMI($mark_BMI, $john_BMI);
    echo "Apakah Mark memiliki BMI lebih tinggi dari John? " . ($markHigherBMI ? "Ya" : "Tidak") .
        "<br> -------------------------------------------------------<br>";
}
