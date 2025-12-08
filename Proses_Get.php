<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input GET</title>
</head>
<body>
    <h2>Data yang Dikirim dengan Metode GET</h2>
    <?php
    echo "NIM : " . (isset($_GET['nim']) ? $_GET['nim'] : '') . "<br>";
    echo "Nama : " . (isset($_GET['nama']) ? $_GET['nama'] : '') . "<br>";
    echo "Tempat Lahir : " . (isset($_GET['tempat_lahir']) ? $_GET['tempat_lahir'] : '') . "<br>";
    echo "Tanggal Lahir : " . (isset($_GET['tanggal_lahir']) ? $_GET['tanggal_lahir'] : '') . "<br>";
    echo "Alamat : " . (isset($_GET['alamat']) ? $_GET['alamat'] : '') . "<br>";
    
    if (isset($_GET['kota'])) {
        $kota = $_GET['kota'];
        if ($kota == "Semarang") {
            echo "Kota : Semarang<br>";
        } elseif ($kota == "Solo") {
            echo "Kota : Solo<br>";
        } elseif ($kota == "Salatiga") {
            echo "Kota : Salatiga<br>";
        } elseif ($kota == "Kudus") {
            echo "Kota : Kudus<br>";
        } else {
            echo "Kota : Pekalongan<br>";
        }
    }
    
    if (isset($_GET['jk'])) {
        $jk = $_GET['jk'];
        if ($jk == "Laki-laki") {
            echo "Jenis Kelamin : Laki-laki<br>";
        } else {
            echo "Jenis Kelamin : Perempuan<br>";
        }
    }
    
    echo "Email : " . (isset($_GET['email']) ? $_GET['email'] : '') . "<br>";
    echo "No HP : " . (isset($_GET['no_hp']) ? $_GET['no_hp'] : '') . "<br>";
    echo "Umur : " . (isset($_GET['umur']) ? $_GET['umur'] : '') . "<br>";
    echo "Status : " . (isset($_GET['status']) ? $_GET['status'] : '') . "<br>";
    
    if (isset($_GET['hobi']) && is_array($_GET['hobi'])) {
        echo "Hobi : " . implode(", ", $_GET['hobi']) . "<br>";
    } elseif (isset($_GET['hobi'])) {
        echo "Hobi : " . $_GET['hobi'] . "<br>";
    }
    ?>
</body>
</html>
