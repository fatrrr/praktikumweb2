<?php
require 'Koneksi.php';
require 'Model.php';


$form = $_GET['form'];
if ($form != 'tambah')
    $id = $_GET['id_member'];

if ($form == 'update') {
    $dataMember = GetDataMemberById($conn, $id);
    if (isset($_POST['nama_member'])) {
        $nama_member = $_POST['nama_member'];
        $nomor_member = $_POST['nomor_member'];
        $alamat = $_POST['alamat'];
        $tgl_mendaftar = $_POST['tgl_mendaftar'];
        $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
        UpdateMember($conn, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id);
    }
} else if ($form == 'tambah') {
    if (isset($_POST['nama_member'])) {
        $nama_member = $_POST['nama_member'];
        $nomor_member = $_POST['nomor_member'];
        $alamat = $_POST['alamat'];
        $tgl_mendaftar = $_POST['tgl_mendaftar'];
        $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
        AddMember($conn, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    }
} else if ($form == 'delete') {
    DeleteMember($conn, $id);
}

?>

<?php if ($form == 'tambah') : ?>

    <form method="post">
        <label for="nama_member">Nama Member</label><br>
        <input type="text" name="nama_member" id="nama_member"><br><br>

        <label for="nomor_member">Nomor Member</label><br>
        <input type="text" name="nomor_member" id="nomor_member"><br><br>

        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" id="alamat"><br><br>

        <label for="tgl_mendaftar">Tanggal Mendaftar</label><br>
        <input type="datetime-local" name="tgl_mendaftar" id="tgl_mendaftar"><br><br>

        <label for="tgl_terakhir_bayar">Tanggal Terakhir Bayar</label><br>
        <input type="date" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar"><br>
        <button name='tambah' type="submit">Tambahkan Data</button>
    </form>
    <a href='Member.php'><button>Cancel</button></a>

<?php elseif ($form == 'update') : ?>
    <form method="post">

        <label for="nama_member">Nama Member</label><br>
        <input type="text" value="<?php $dataMember->nama_member;
                                    echo "$dataMember->nama_member" ?>" name="nama_member" id="nama_member"><br><br>

        <label for="nomor_member">Nomor Member</label><br>
        <input type="text" value="<?php $dataMember->nomor_member;
                                    echo "$dataMember->nomor_member" ?>" name="nomor_member" id="nomor_member"><br><br>

        <label for="alamat">Alamat</label><br>
        <input type="text" value="<?php $dataMember->alamat;
                                    echo "$dataMember->alamat" ?>" name="alamat" id="alamat"><br><br>
                                    
        <label for="tgl_mendaftar">Tanggal Mendaftar</label><br>
        <input type="datetime-local" value="<?php $dataMember->tgl_mendaftar;
                                    echo "$dataMember->tgl_mendaftar" ?>" name="tgl_mendaftar" id="tgl_mendaftar"><br><br>

        <label for="tgl_terakhir_bayar">Tanggal Terakhir Bayar</label><br>
        <input type="date" value="<?php $dataMember->tgl_terakhir_bayar;
                                    echo "$dataMember->tgl_terakhir_bayar" ?>" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar"><br>
        <button name='update' type="submit">Update Member</button>
    </form>
    <a href='Member.php'><button>Cancel</button></a>
<?php endif; ?>