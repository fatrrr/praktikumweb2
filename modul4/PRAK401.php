<html>
<style type="text/css">
    table, th, td {
        border : 1px solid;
        border-collapse : collapse;
        text-align: center;
    }
    td {
        width : 24px;
        height : 24px;
    }
</style>
<body>
    <?php
        $p = 0;
        $l = 0;
        $nilai = 0;
        $i = 0;
    ?>
    <form method="POST">
        <label> Panjang : </label>
        <input type="text" name="p" ><br>
        <label> Lebar : </label>
        <input type="text" name="l"><br>
        <label> Nilai : </label>
        <input type="text" name="nilai"><br>
        <input type="submit" name="cetak" value="Cetak"><br>
    </form>
    <?php
        if(isset($_POST['cetak'])){
            if(isset($_POST['p'])){
                $p = $_POST['p'];
            }
            if(isset($_POST['l'])){
                $l = $_POST['l'];
            }
            if(isset($_POST['nilai'])){
                $nilai = $_POST['nilai'];
            }
            $isi = explode(" ", $nilai);
            $bykNilai = sizeof($isi);
            $luas = $p * $l;
            if ($luas < $bykNilai){
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            } else {
                $index = 0;
                echo "<table>";
                while ($i < $p){
                    $j = 0;
                    echo "<tr>";
                    while ($j < $l){
                        echo "<td>";
                        if(isset($isi[$index])){
                            echo "$isi[$index]";
                        }
                        echo "</td>";
                        $j ++;
                        $index ++;
                    }
                    echo "</tr>";
                    $i ++;
                }
                echo "</table>";
            }
        }
    ?>
</body>
</html>