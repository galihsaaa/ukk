<?php
    $koneksi = mysqli_connect("localhost","root","","ukk");

    $hasil = mysqli_query($koneksi, "SELECT * FROM gambar")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <h1>Database Gambar</h1>
    <a href="tambah.php">Tambah Gambar</a>

    <table border=1>
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama Gambar</th>
                <th>Deskripsi</th>
                <th>Keterangan</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php while($row = mysqli_fetch_assoc($hasil)): ?>
                <td>Rumah.jpg</td>
                <td>Rumah</td>
                <td>Wulan sedang menyapu</td>
                <td>Rumah</td>
                <td>
                    <a href="">edit</a> | <a href="">hapus</a>
                </td>
            </tr>
            <?php endwhile ; ?>
        </tbody>
    </table>
</body>
</html>