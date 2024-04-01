<?php
function besar_ke_kecil($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}
$angka = array(5, 3, 9, 1, 7, 2);
usort($angka, "besar_ke_kecil");
echo "Array yang sudah diurutkan dari besar ke kecil: ";
foreach ($angka as $nilai) {
    echo $nilai . " ";
}
?>
