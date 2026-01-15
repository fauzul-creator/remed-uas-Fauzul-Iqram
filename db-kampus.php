<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 50px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        caption {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<?php
// Koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_kampusss";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query ambil data
$query = "SELECT * FROM db";
$result = mysqli_query($koneksi, $query);
?>

<table>
    <caption>Data Mahasiswa</caption>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Prodi/th>
    </tr>

    <?php
    $no = 1;
    while ($data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data['NAMA']."</td>";
        echo "<td>".$data['NIM']."</td>";
        echo "<td>".$data['PRODI']."</td>";
        echo "</tr>";
        $no++;
    }
    ?>
</table>

</body>
</html>
