<?php
$db = new PDO("mysql:host=localhost;dbname=sekolah",'root','');
$query = $db->query('select*from siswa');
?>
<a href="insert_form.php">tambah </a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
<?php $i=1 ?>
<?php
while ($data = $query->fetch()) :?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['kelas'] ?></td>
        <td>
        <a href="edit_from.php?id=<?= $data['id']; ?> "> Update
        </a>
        <a href="delete.php?id= <?= $data['id']; ?>">
         hapus
    </a>
    </td>
    </tr>

<?php endwhile ?>
<?php $i++; ?>
</table>
