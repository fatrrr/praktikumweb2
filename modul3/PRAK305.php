<html>
<body>
    <?php
        $kalimat = 0;
        $long = 0;
    ?>
    <form method="POST">
        <input type="text" name="kalimat">
        <input type="submit" name="submit" value="submit"><br>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['kalimat'])){
                $kalimat = htmlspecialchars($_POST['kalimat']);
            }
            $long = strlen($kalimat);
            $i = 0;
            echo "<b>Input : </b><br>".$kalimat."<br>";
            echo "<b>Output : </b><br>";
            while($i < $long){
                $k = $long;
                while($k > 0){
                    if ($k == $long){
                        echo strtoupper($kalimat[$i]);
                    } else echo strtolower($kalimat[$i]);
                    $k--;
                }
                $i++;
            }
        }
    ?>
</body>
</html>
