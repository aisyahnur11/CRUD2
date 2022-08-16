<?php

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$id = $_POST['id']; 

$db = new PDO("mysql:host=localhost;dbname=sekolah", 'root','');
$query = $db->query("UPDATE `siswa` SET nama='$nama',kelas='$kelas' WHERE id='$id' ");

if($query)
{
    header("location:index.php");
}