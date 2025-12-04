<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input POST</title>
</head>
<body>
    <h1>Data yang Dikirim dengan Metode POST</h1>
    <table border="1" cellpadding="10">
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?php echo isset($_POST['nim']) ? $_POST['nim'] : ''; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?php echo isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : ''; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : ''; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo isset($_POST['alamat']) ? $_POST['alamat'] : ''; ?></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td>
                <?php
                if (isset($_POST['kota'])) {
                    if ($_POST['kota'] == "Semarang") {
                        echo "Semarang";
                    } elseif ($_POST['kota'] == "Solo") {
                        echo "Solo";
                    } elseif ($_POST['kota'] == "Salatiga") {
                        echo "Salatiga";
                    } elseif ($_POST['kota'] == "Kudus") {
                        echo "Kudus";
                    } else {
                        echo "Pekalongan";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <?php
                if (isset($_POST['jk'])) {
                    if ($_POST['jk'] == "Laki-laki") {
                        echo "Jenis Kelamin Laki-laki";
                    } else {
                        echo "Jenis Kelamin Perempuan";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td>:</td>
            <td><?php echo isset($_POST['no_hp']) ? $_POST['no_hp'] : ''; ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><?php echo isset($_POST['umur']) ? $_POST['umur'] : ''; ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?php echo isset($_POST['status']) ? $_POST['status'] : ''; ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
                <?php
                if (isset($_POST['hobi']) && is_array($_POST['hobi'])) {
                    echo implode(", ", $_POST['hobi']);
                } elseif (isset($_POST['hobi'])) {
                    echo $_POST['hobi'];
                } else {
                    echo '';
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
