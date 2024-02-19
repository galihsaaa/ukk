<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Gallery Foto</title>
<link rel="stylesheet" href="styles.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        margin: 0;
    }
    .image{
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex-wrap: nowrap;
        margin-top: 20px;
    }
    .image-satu{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .image-dua{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .image-tiga{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

</style>
</head>
<body>
<div class="gallery">
    <div class="image">
        <img src="foto/lapangan.jpeg" alt="Foto 1" width="400px">
        <h2>Lapangan Bola</h2>
    </div>
    <div class="image">
        <img src="foto/sekolah.JPG" alt="Foto 2" width="400px">
        <h2>Sekolah Islam Terpadu Nurul Fikri</h2>
    </div>
    <div class="image">
        <img src="foto/stadion.jpg" alt="Foto 3" width="400px">
        <h2>Stadion Sepakbola Universitas Negeri Padang</h2>
    </div>
</div>
</body>
</html>