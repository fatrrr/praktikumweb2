<html>
<style type="text/css">
    img {
        width : 16px;
        height : 16px;
    }
    td {
        float : right;
    }
</style>
<body>
    <?php
        $tinggi = 0;
        $gambar = "";
        $i = 0;
        ?>
    <form method="POST">
        <label>Tinggi : </label>
        <input type="text" name="tinggi"><br>
        <label>Alamat Gambar : </label>
        <input type="url" name="gambar"><br>
        <input type="submit" name="cetak" value="Cetak"><br>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if (isset($_POST['tinggi'])){
                $tinggi = htmlspecialchars($_POST['tinggi']);
            }
            if (isset($_POST['gambar'])){
                $gambar = $_POST['gambar'];
            }
            echo "<table>";
            while ($tinggi > $i){
                $j = 0;
                echo "<tr><td>";
                while ($j < $tinggi){
                    echo "<img src='$gambar'>";
                    $j ++;
                }
                echo "</td></tr>";
                $tinggi --;
            }
            echo "</table>";
        }
    ?>
</body>
</html>