<?php
$nama = $_GET['nama'];
$kelas = $_GET['kelas'];

$db = new PDO("mysql:host=localhost;dbname=sekolah","root","");
$query = $db->query("insert into siswa values('','$nama','$kelas')");

if($query)
{
    header("location:index.php");
}