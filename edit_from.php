<?php
$id = $_GET['id'];
$db =new PDO("mysql:host=localhost;dbname=sekolah",'root','');
$query = $db->query("select * from siswa where id=$id");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="edit.php">
        <p>nama : <input name="nama" type="text" value="<?= $data['nama'] ?>"></p>
        <p>kelas : <input name="kelas" type="text"  value="<?= $data['kelas'] ?>"> </p>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>