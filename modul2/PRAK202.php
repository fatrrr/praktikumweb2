<html>
<body>
    <style type="text/css">
           #red {color : #FF0000;}
    </style>
    <div>
        <form method = "POST">
            <label>Nama : </label>
            <input type="text" name="nama">
            <label id='red'>*</label>
            <?php
                $nama = NULL;
                if(isset($_POST['submit'])){
                    $nama = ucwords($_POST['nama']);
                    if($nama == NULL){
                        echo
                        "<label id='red'> nama tidak boleh kosong</label>";
                    }
                }
            ?>
            <br>
            <label>NIM  : </label>
            <input type="text" name="nim">
            <label id='red'>*</label>
            <?php
                $nim = NULL;
                if(isset($_POST['submit'])){
                    $nim = $_POST['nim'];
                    if($nim == NULL){
                        echo
                        "<label id='red'> nim tidak boleh kosong</label>";
                    }
                }
            ?>
            <br>
            <label>Jenis Kelamin :</label>
            <label id='red'>*</label>
            <?php
                $jk = NULL;
                if(isset($_POST['submit'])){
                    $jk = isset($_POST['jk']);
                    if($jk == NULL){
                        echo
                        "<label id='red'> jenis kelamin tidak boleh kosong</label>";
                    }
                }
            ?>
            <br>
            <input type="radio" name="jk" value="l">Laki-Laki<br>
            <input type="radio" name="jk" value="p">Perempuan<br>
            <input type="submit" name="submit" value="Submit"><br>
        </form>
    </div>
    <?php
        if($nama != NULL && $nim != NULL && $jk != NULL){
            echo "$nama <br>";
            echo "$nim <br>";
            if($jk == "l"){
                echo "Laki-Laki";
            } elseif($jk == "p"){
                echo "Perempuan";
            }
        }
    ?>
</body>
</html>