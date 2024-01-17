<?php 

$judul = "=== Program bidata sederhana function === <br /><br/> ";

$namaLengkap = "Nama Lengkap = Rafa Handhika Yoga Permana <br/> ";
$Umur = "Umur = 16 <br/>" ;
$Kelas = "Kelas = X RPl 2 <br/>";
$tempattangallahir = "Tempat tanggal lahir = Jakarta, 5 september 2007 <br/>";
$nomorWhatsApp = "nomor WhatsApp = 085893626629 <br/>";
$Alamat = "Alamat = Jl jati bunder no 4A jakarta pusat <br/>";

function biodatalengkap(){
    global $judul, $namaLengkap, $Umur, $Kelas, $tempattangallahir, $nomorWhatsApp, $Alamat;
    echo $judul, $namaLengkap, $Umur, $Kelas, $tempattangallahir, $nomorWhatsApp, $Alamat;

}

echo biodatalengkap();

?>