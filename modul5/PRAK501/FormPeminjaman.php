<?php
require 'Koneksi.php';
require 'Model.php';


$form = $_GET['form'];
if ($form != 'tambah')
    $id = $_GET['id_peminjaman'];

if ($form == 'update') {
    $dataPeminjaman = GetDataPeminjamanById($conn, $id);
    if (isset($_POST['tgl_pinjam'])  && isset($_POST['tgl_kembali'])) {
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        UpdatePeminjaman($conn, $tgl_pinjam, $tgl_kembali, $id);
    }
} else if ($form == 'tambah') {
    if (isset($_POST['tgl_pinjam'])  && isset($_POST['tgl_kembali'])) {
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        AddPeminjaman($conn, $tgl_pinjam, $tgl_kembali);
    }
} else if ($form == 'delete') {
    DeletePeminjaman($conn, $id);
}

?>

<?php if ($form == 'tambah') : ?>

    <form method="post">
        <label for="tgl_pinjam">Tambah Tanggal Pinjam</label><br>
        <input type="date" name="tgl_pinjam" id="tgl_pinjam"><br><br>

        <label for="tgl_kembali">Tanggal Kembali</label><br>
        <input type="date" name="tgl_kembali" id="tgl_kembali"><br>
        <button name='tambah' type="submit">Tambahkan Data</button>
    </form>
    <a href='Peminjaman.php'><button>Cancel</button></a>

<?php elseif ($form == 'update') : ?>
    <form method="post">

        <label for="tgl_pinjam">Tanggal Pinjam</label><br>
        <input type="date" value="<?php $dataPeminjaman->tgl_pinjam;
                                    echo "$dataPeminjaman->tgl_pinjam" ?>" name="tgl_pinjam" id="tgl_pinjam"><br><br>

        <label for="tgl_kembali">Tanggal Kembali</label><br>
        <input type="date" value="<?php $dataPeminjaman->tgl_kembali;
                                    echo "$dataPeminjaman->tgl_kembali" ?>" name="tgl_kembali" id="tgl_kembali"><br>
        <button name='update' type="submit">Update Peminjaman</button>
    </form>
    <a href='Peminjaman.php'><button>Cancel</button></a>
<?php endif; ?>