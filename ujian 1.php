<?php

$tanggal_1  = new DateTime('1998-04-07');
$tanggal_2 = new DateTime();
$selisih  = $tanggal_1->diff($tanggal_2);
 
echo 'Umur saat ini : ';
echo $selisih->y . ' tahun, ';
echo $selisih->m . ' bulan, ';
echo $selisih->d . ' hari, ';
 
?>
