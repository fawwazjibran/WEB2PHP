<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mahasiswa</title>
    <style>
        /* CSS untuk styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #FAF8ED;
            text-align: center;
        }
        .box {
            width: 450px;
            height: 470px;
            background-color: #D2E3C8;
            padding: 10px;
            margin: 10px auto;
        }
        .card {
            width: 400px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .img-container {
            flex: 0 0 100px;
            height: 100px;
            margin-right: 20px;
        }
        .img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }
        .info {
            flex: 1;
        }
        a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <div class="box">
        <?php
        $mahasiswa = [
            [
                "nrp" => "701220028",
                "nama" => "Fawwaz Aljibran Ashari",
                "email" => "fawwaz@gmail.com",
                "jurusan" => "Sistem Informasi",
                "gambar" => "104. Fawwaz Aljibran Ashari.jpg"
            ],
            [
                "nrp" => "701220029",
                "nama" => "Putra Agus",
                "email" => "putra@gmail.com",
                "jurusan" => "Sistem Informasi",
                "gambar" => "download (1).jpg"
            ],
            [
                "nrp" => "701220020",
                "nama" => "Falih Gumilang",
                "email" => "Falih@gmail.com",
                "jurusan" => "Sistem Informasi",
                "gambar" => "download.jpg"
            ]
        ];
        ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <div class="card">
                <div class="img-container">
                    <img class="img" src="img/<?= $mhs["gambar"]; ?>" alt="<?= $mhs["nama"]; ?>">
                </div>
                <div class="info">
                    <a href="latihan5c.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
                        <?= $mhs["nama"]; ?>
                    </a>
                    <!-- Tambahkan informasi -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
