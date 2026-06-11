<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1 alight="center">
         WEB TI ICA| 2026
        </h1>

        <table border="1" align="center" cellspacing="0" class="table">
            <tr>
                <td><a href="index.php">Beranda</a></td>
                <td><a href="biodata.php">Biodata</a></td>
                <td><a href="contact.php">Kontak</a></td>
                <td><a href="data.php">Data</a></td>
                <td><a href="form.php">form mahasiswa</a></td>
            </tr>
        </table>

        <br><br>
        <h2>Data Mahasiswa</h2>
        <a href="tambahan.php"><button></a>
        <table border="1" cellpadding="5px">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <th>Email</th>
                <th>Nomor Whatsapp</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Ichya</td>
                <td> 13242520050 </td>
                <td>Teknologi Informasi Digital </td>
                <td>icharosiana14@gmail.com</td>
                <td>081987654321</td>
                <td><img src="icha.jpeg" width="50"></td>
                <td>
                    <a href="editdata.php"><button>Edit</button></a>
                    <a href="deletedata.php"><button>Hapus</button></a>
                </td>
            </tr>
        </table>

        <br><br>
        <table border="1" cellpadding="5px">
            <tr>
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
                <!-- <td>baris 2, kolom 2</td> -->
            </tr>
            <tr>
                <td>2,1</td>
                <td rowspan="2" colspan="2"></td>
                <td>2,4</td>
                <!-- <td>baris 2, kolom 3</td> -->
            </tr>
            <tr>
                <td>3,1</td>
                <td>3,4</td>
            </tr>
            <tr>
                <td>4,1</td>
                <td>4,2</td>
                <td>4,3</td>
                <td>4,4</td>
                
            </tr>
        </table>
</body>
</html>