<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data (POST)</title>
</head>
<body>
    <h1>Form Input Data Mahasiswa POST</h1>
    <form action="proses_get.php" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" rows="4" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:</td>
                <td>
                    <select name="kota">
                        <option value="Semarang">Semarang</option>
                        <option value="Solo">Solo</option>
                        <option value="Salatiga">Salatiga</option>
                        <option value="Kudus">Kudus</option>
                        <option value="Pekalongan">Pekalongan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jk" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="number" name="umur"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <input type="radio" name="status" value="Kawin"> Kawin
                    <input type="radio" name="status" value="Belum Kawin"> Belum Kawin
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
                    <input type="checkbox" name="hobi[]" value="Olah Raga"> Olah Raga<br>
                    <input type="checkbox" name="hobi[]" value="Musik"> Musik<br>
                    <input type="checkbox" name="hobi[]" value="Traveling"> Traveling
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Kirim"></td>
            </tr>
        </table>
    </form>
</body>
</html>
