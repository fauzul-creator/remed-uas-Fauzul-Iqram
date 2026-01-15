<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Gadget</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        .mahal {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Daftar Gadget</h2>

<?php
// membaca file JSON
$data = file_get_contents("data_gadget.json");

// decode JSON ke array PHP
$gadget = json_decode($data, true);
?>

<table>
    <tr>
        <th>Merek</th>
        <th>Seri</th>
        <th>Harga</th>
    </tr>

    <?php foreach ($gadget as $g): ?>
    <tr>
        <td><?= $g['merek']; ?></td>
        <td><?= $g['seri']; ?></td>
        <td class="<?= ($g['harga'] > 14000000) ? 'mahal' : ''; ?>">
            Rp <?= number_format($g['harga'], 0, ',', '.'); ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>