<html>
    <body>
        <div>
            <form method = "POST">
                <label>Nama : 1 </label>
                <input type="text" id="nama" name="nama1"><br>
                <label>Nama : 2 </label>
                <input type="text" id="nama" name="nama2"><br>
                <label>Nama : 3 </label>
                <input type="text" id="nama" name="nama3"><br>
                <button type="submit">Urutkan</button>
        </div>
        <div>
        <?php
            $nama1 = NULL;
            $nama2 = NULL;
            $nama3 = NULL;
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST['nama1'])){
                    $nama1 = $_POST['nama1'];
                }
                if(isset($_POST['nama2'])){
                    $nama2 = $_POST['nama2'];
                }
                if(isset($_POST['nama3'])){
                    $nama3 = $_POST['nama3'];
                }
            }
            if ($nama1 < $nama2 && $nama1 < $nama3){
                echo "$nama1 <br>";
                if ($nama2 < $nama3){
                    echo "$nama2 <br>";
                    echo "$nama3 <br>";
                } else {
                    echo "$nama3 <br>";
                    echo "$nama2 <br>";
                }
            } elseif ($nama2 < $nama1 && $nama2 < $nama3){
                echo "$nama2 <br>";
                if ($nama1 < $nama3){
                    echo "$nama1 <br>";
                    echo "$nama3 <br>";
                } else {
                    echo "$nama3 <br>";
                    echo "$nama1 <br>";
                }
            } elseif ($nama3 < $nama1 && $nama3 < $nama2){
                echo "$nama3 <br>";
                if ($nama1 < $nama2){
                    echo "$nama1 <br>";
                    echo "$nama2 <br>";
                } else {
                    echo "$nama2 <br>";
                    echo "$nama1 <br>";
                }
            }
        ?>
        </div>
    </body>
</html>
