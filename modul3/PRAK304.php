<html>
<style type="text/css">
    img {
        width : 64px;
        height : 64px;
    }
    <?php
        if(isset($_POST['submit']) || $_POST['star'] > 1){
            echo "#main { display : none ;}";
        }
    ?>
</style>
<body>
    <form id="main" method="POST" >
        <label>Jumlah bintang</label>
        <input type="text" name="star"><br>
        <input type="submit" name="submit" value="Submit"><br>
    </form>
    <?php
        $star = 0;
        $starImg = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['star'])){
                $star = $_POST['star'];
            }
            if(isset($_POST['incr'])){
                $star = $_POST['star'];
                $star ++;
            }
            if(isset($_POST['decr'])){
                $star = $_POST['star'];
                $star --;
            }
            $i = 0;
            if($star > 0){
                echo "Jumlah bintang $star <br>";
                while ($i < $star){
                    echo "<img src='$starImg'> &nbsp";
                    $i ++;
                }
    ?>
    <form method="POST">
        <input type="submit" name="incr" value="Tambah">
        <input type="submit" name="decr" value="Kurang"><br>
        <input type="text" name="star" value="<?php echo $star ?>" hidden>
    </form>
    <?php
            }
        }
    ?>
</body>
</html>