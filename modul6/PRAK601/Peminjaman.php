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
    <title>Data Peminjaman</title>
</head>

<body>
    <a href='FormPeminjaman.php?form=tambah'><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?php foreach (GetAllDataPeminjaman($conn) as $row) : ?>
            <tr>
                <td><?= $row->tgl_pinjam; ?></td>
                <td><?= $row->tgl_kembali; ?></td>
                <td>
                    <a href='FormPeminjaman.php?id_peminjaman=<?= $row->id_peminjaman ?>&form=update'>Edit</a>
                    <a onclick="return confirm('Yakin hapus data yang dipilih?')" href='FormPeminjaman.php?id_peminjaman=<?= $row->id_peminjaman ?>&form=delete'>Delete</a>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href='index.php'><button>Kembali</button></a>
</body>
</html>