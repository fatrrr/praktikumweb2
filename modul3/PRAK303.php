<html>
<style type="text/css">
    img {
        width : 16px;
        height : 16px;
    }
</style>
<body>
    <?php
        $str = 0;
        $end = 0;
        $starImg = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
    ?>
    <form method="POST">
        <label> Batas Bawah : </label>
        <input type="text" name="str"><br>
        <label> Batas Atas : </label>
        <input type="text" name="end"><br>
        <input type="submit" name="cetak" value="Cetak"><br>
    </form>
    <?php
        if(isset($_POST['cetak'])){
            if(isset($_POST['str'])){
                $str = $_POST['str'];
            }
            if(isset($_POST['end'])){
                $end = $_POST['end'];
            }
            do{
                if(($str+7) % 5 == 0){
                    echo "<img src='$starImg'>";
                } else echo $str;
                echo "&nbsp";
                $str ++;
            } while ($str<=$end);
        }
    ?>
</body>
</html>