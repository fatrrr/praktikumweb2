<html>
    <body>
        <div>
            <form method = "POST">
                <label>Nama : 1 </label>
                <input type="text" id="nama" name="nama[]"><br>
                <label>Nama : 2 </label>
                <input type="text" id="nama" name="nama[]"><br>
                <label>Nama : 3 </label>
                <input type="text" id="nama" name="nama[]"><br>
                <button type="submit">Urutkan</button>
        </div>
        <div>
        <?php
            $nama = [];
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST['nama'])){
                    $nama = $_POST['nama'];
                }
            }
            sort($nama);
            foreach ($nama as $key => $val){
                echo "$val<br>";
            }
        ?>
        </div>
    </body>
</html>