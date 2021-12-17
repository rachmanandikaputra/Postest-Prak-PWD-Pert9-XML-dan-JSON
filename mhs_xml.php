<?php
// koneksi kedatabase
include "koneksi.php";
// mengirim HTTP request dalam bentuk xml
header('Content-Type: text/xml');
// query ke table mahasiswa
$query = "SELECT * FROM mahasiswa";
// eksekusi query
$hasil = mysqli_query($con, $query);
// hitung jumlah baris
$jumField = mysqli_num_rows($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
// looping data
while($data = mysqli_fetch_array($hasil)){
echo "<mahasiswa>";
echo "<nim>",$data['nim'],"</nim>";
echo "<nama>",$data['Nama'],"</nama>";
echo "<jkel>",$data['jkel'],"</jkel>";
echo "<alamat>",$data['alamat'],"</alamat>";
echo "<tgllhr>",$data['tgllhr'],"</tgllhr>";
echo "</mahasiswa>";
}
echo "</data>";
?>