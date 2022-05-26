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
    <title>Data Member</title>
</head>

<body>
    <a href='FormMember.php?form=tambah'><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Nama Member</th>
            <th>Nomor Member</th>
            <th>Alamat</th>
            <th>Tanggal Mendaftar</th>
            <th>Tanggal Terakhir Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach (GetAllDataMember($conn) as $row) : ?>
            <tr>
                <td><?= $row->nama_member; ?></td>
                <td><?= $row->nomor_member; ?></td>
                <td><?= $row->alamat; ?></td>
                <td><?= $row->tgl_mendaftar; ?></td>
                <td><?= $row->tgl_terakhir_bayar; ?></td>
                <td>
                    <a href='FormMember.php?id_member=<?= $row->id_member ?>&form=update'>Edit</a>
                    <a onclick="return confirm('Yakin hapus data yang dipilih?')" href='FormMember.php?id_member=<?= $row->id_member ?>&form=delete'>Delete</a>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href='index.php'><button>Kembali</button></a>
</body>
</html>