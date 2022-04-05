<html>
<style type="text/css">
    #red {
        color : #FF0000;
    }
    #green {
        color : #008000;
    }
</style>
<body>
    <?php
        $peserta = 0;
        $i = 1;
    ?>
    <form method="POST">
        <label>Jumlah Peserta : </label>
        <input type="text" name="peserta"><br>
        <input type="submit" name="cetak" value="Cetak"><br>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['peserta'])){
                $peserta = htmlspecialchars($_POST['peserta']);
            }
            while ($i <= $peserta){
                if($i % 2 == 0){
                    echo "<h1 id='green'>Peserta ke-$i<br></h1>";
                } else {
                    echo "<h1 id='red'>Peserta ke-$i<br></h1>";
                }
                $i ++;
            }
        }
    ?>
</body>
</html>