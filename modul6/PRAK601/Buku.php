<?php
require 'Model.php';
require 'Koneksi.php';

session_start();
if(!isset($_SESSION['id'])){
    header('Location: ErrorPage.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>

<body>
    <a href='FormBuku.php?form=tambah'><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php foreach (GetAllDataBuku($conn) as $row) : ?>
            <tr>
                <td><?= $row->judul_buku; ?></td>
                <td><?= $row->penulis; ?></td>
                <td><?= $row->penerbit; ?></td>
                <td><?= $row->tahun_terbit; ?></td>
                <td>
                    <a href='FormBuku.php?id_buku=<?= $row->id_buku ?>&form=update'>Edit</a>
                    <a onclick="return confirm('Yakin hapus data yang dipilih?')" href='FormBuku.php?id_buku=<?= $row->id_buku ?>&form=delete'>Delete</a>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href='index.php'><button>Kembali</button></a>
</body>
</html>