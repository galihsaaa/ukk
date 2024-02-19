<?php
    $koneksi = mysqli_connect("localhost","root","","login");

    $hasil = mysqli_query($koneksi, "SELECT * FROM halaman")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel</title>
</head>
<body>
<a href="login.php">Tambah Data</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php while($array = mysqli_fetch_assoc($hasil)): ?>
                <td>1</td>
                <td> <?= $array["id"] ?></td>
                <td> <?= $array["username"] ?></td>
                <td><?= $array["password"] ?></td>
                <td><a href="">edit</a> | <a href="">hapus</a></td>
            </tr>
            <?php endwhile ; ?>
        </tbody>
    </table>
</body>
</html>