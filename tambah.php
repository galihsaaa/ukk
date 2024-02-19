
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
        *, html , body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: darksalmon;
        }
        .halaman{
            width: 400px;
            height: 400px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .registrasi{
            width: 100%;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; 
        }
    </style>
</head>
<body>
<div class="container">
    <div class="halaman">
        <div class="registrasi">
            <h2>Masukkan Gambar</h2>
            <form action="tambah.php" method="get" enctype="multypart/form-data">
            <table class="tabel">
                <tr>
                    <td>Rincian</td>
                    <td>:</td>
                    <td><input type="text" name="frincian"></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td>:</td>
                    <td><input type="file" name="fgambar"></td>
                </tr>
                <tr>
                    <td>Nama Gambar</td>
                    <td>:</td>
                    <td><input type="text" name="fnamagambar"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><input type="text" name="fdeskripsi"></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td><input type="text" name="fketerangan"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td></td>
                    <td><button>Masuk</button></td>
                </tr>
            </table>
            </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>