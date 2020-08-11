<?php
$namabuah = 'Jeruk';
$keterangan = ' Termasuk Kategori';
switch ($namabuah)
{
  case 'Jeruk' :
    $kategoribuah = $keterangan.' Buah yang Berbiji ';
    break;
  case 'kelapa' :
    $kategoribuah = $keterangan.' Buah yang Tidak Berbiji ';
    break;
  default:
    $kategoribuah = ' Tidak Diketahui ';
}
echo 'Buah '.$namabuah.$kategoribuah;
?>