<?php
// koneksi ke database
include "koneksi.php";
// query ke table mahasiwa dengan clause order by nim
$sql = "SELECT * FROM mahasiswa order by nim";
// eksekusi query
$tampil = mysqli_query($con, $sql);
// cek apakah ada data menggunakan mysqli_num_row
if(mysqli_num_rows($tampil) > 0){
// intansiasi array
$response = array();
// instanasi response data dalam bentuk array
$response['data'] = array();
// looping data
while($r = mysqli_fetch_array($tampil)){
$h['nim'] = $r['nim'];
$h['Nama'] = $r['Nama'];
$h['jkel'] = $r['jkel'];
$h['alamat'] = $r['alamat'];
$h['tgllhr'] = $r['tgllhr'];
// Memasukan array h kedalam data di array response
array_push($response['data'], $h);
}
// mencetak array dalam bentuk json
echo json_encode($response);
} else {
// response jika data tidak ada
$response['message'] = "Tidak ada data";
echo json_encode($response);
}