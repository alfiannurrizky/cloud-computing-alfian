<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Pribadi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: left;
        }
        h1 {
            color: #444;
            margin-bottom: 20px;
            text-align: center;
        }
        .biodata {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 10px;
            margin-bottom: 20px;
        }
        .label {
            font-weight: bold;
            color: #444;
        }
        p, .label {
            margin: 0;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        ul li {
            background: #f9f9f9;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Biodata Pribadi</h1>
        <div class="biodata">
            <?php
                $nama = "Muhammad Alfian Nurrizky";
                $alamat = "Reni jaya, Jalan sumatera 06, Tangerang Selatan";
                $tanggal_lahir = "19 Agustus 2002";
                $hobi = ["Ngoding", "Musik", "Olahraga"];

                echo "<div class='label'>Nama:</div><div>$nama</div>";
                echo "<div class='label'>Alamat:</div><div>$alamat</div>";
                echo "<div class='label'>Tanggal Lahir:</div><div>$tanggal_lahir</div>";
            ?>
        </div>
        <div>
            <p class="label">Hobi:</p>
            <ul>
                <?php
                    foreach ($hobi as $h) {
                        echo "<li>$h</li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
