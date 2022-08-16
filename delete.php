<?php

$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=sekolah",'root','');
$query = $db->query("DELETE FROM `siswa` where `id`= '$id'");

if($query)
{
    header("location:index.php");
}
