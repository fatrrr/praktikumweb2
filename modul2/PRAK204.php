<html>
<body>
    <style type="text/css">
           h1 {text : bold;}
    </style>
    <div>
    <form method = "POST">
        <label>Nilai    : </label>
        <input type="text" name="nilai"><br>
        <input type="submit" name="konversi" value="Konversi"><br>
    </form>
    </div>
    <?php
    $nilai = NULL;
    if(isset($_POST['konversi'])){
        $nilai = (int)$_POST['nilai'];
        if($nilai == 0){
            echo "<h1>Hasil: Nol</h1>";
        } elseif (0 < $nilai && $nilai < 10 ){
            echo "<h1>Hasil: Satuan</h1>";
        } elseif (10 < $nilai && $nilai< 20 ){
            echo "<h1>Hasil: Belasan</h1>";
        } elseif ($nilai == 10 || 19 < $nilai && $nilai< 100 ){
            echo "<h1>Hasil: Puluhan</h1>";
        } elseif (99 < $nilai && $nilai < 1000 ){
            echo "<h1>Hasil: Ratusan</h1>";
        } elseif ($nilai == 1000){
            echo
            "<h1>Hasil: Anda Menginput Melebihi Limit Bilangan</h1>";
        }
    }
    ?>
</body>
</html>