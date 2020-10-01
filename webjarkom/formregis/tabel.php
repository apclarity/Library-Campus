<!DOCTYPE html>
<html>
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Data Pendaftar</a>

<table border="1" cellpading="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>User Name</th>
        <th>Status</th>
    </tr>

    <td><?= $i = 1; ?></td>
    <?php foreach ($pendaftar as $row) :  ?>
        <tr>
            <td>1</td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><?= $row["name"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["username"]; ?></td>
            <td><?= $row["status"]; ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>

</table>

</html>