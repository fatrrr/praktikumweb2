<html>
<body>
    <style type="text/css">
           h1 {text : bold;}
    </style>
    <div>
    <form method = "POST">
        <label>Nilai    : </label>
        <input type="text" name="nilai"><br>
        <label>Dari     : </label><br>
        <input type="radio" name="fr" value="c1">Celcius<br>
        <input type="radio" name="fr" value="f1">Fahrenheit<br>
        <input type="radio" name="fr" value="r1">Réaumur<br>
        <input type="radio" name="fr" value="k1">Kelvin<br>
        <label>Ke       : </label><br>
        <input type="radio" name="to" value="c2">Celcius<br>
        <input type="radio" name="to" value="f2">Fahrenheit<br>
        <input type="radio" name="to" value="r2">Réaumur<br>
        <input type="radio" name="to" value="k2">Kelvin<br>
        <input type="submit" name="konversi" value="Konversi"><br>
    </form>
    </div>
    <?php
    $nilai = NULL;
    $fr = NULL;
    $to = NULL;
    if(isset($_POST['konversi'])){
        $nilai = $_POST['nilai'];
        $fr = isset($_POST['fr']);
        $to = isset($_POST['to']);
        switch($fr){
        case "c1" :
            switch($to){
            case "c2" :
                echo "<h1> Hasil Konversi: $nilai &deg;C</h1>";
                break;
            case "f2" :
                $hasil = $nilai * 9 / 5 + 32;
                echo "<h1> Hasil Konversi: $hasil &deg;F</h1>";
                break;
            case "r2" :
                $hasil = $nilai * 4 / 5;
                echo "<h1> Hasil Konversi: $hasil &deg;R</h1>";
                break;
            case "k2" :
                $hasil = $nilai + 273;
                echo "<h1> Hasil Konversi: $hasil &deg;K</h1>";
                break;
            default:
                echo "Anda belum memilih!!";
            }
            break;
        case "f1" :
            switch($to){
            case "c2" :
                $hasil = ($nilai - 32) * 5 / 9;
                echo "<h1> Hasil Konversi: $hasil &deg:C</h1>";
                break;
            case "f2" :
                echo "<h1> Hasil Konversi: $nilai &deg;F</h1>";
                break;
            case "r2" :
                $hasil = ($nilai - 32) * 4 / 9;
                echo "<h1> Hasil Konversi: $hasil &deg;R</h1>";
                break;
            case "k2" :
                $hasil = ($nilai - 32) * 5 / 9 + 273;
                echo "<h1> Hasil Konversi: $hasil &deg;K</h1>";
                break;
            default:
                echo "Anda belum memilih!!";
            }
            break;
        case "r1" :
            switch($to){
            case "c2" :
                $hasil = $nilai * 5 / 4;
                echo "<h1> Hasil Konversi: $hasil &deg;C</h1>";
                break;
            case "f2" :
                $hasil = $nilai * 9 / 4 + 32;
                echo "<h1> Hasil Konversi: $hasil &deg;F</h1>";
                break;
            case "r2" :
                echo "<h1> Hasil Konversi: $nilai &deg;R</h1>";
                break;
            case "k2" :
                $hasil = $nilai * 5 / 4 + 273;
                echo "<h1> Hasil Konversi: $hasil &deg;K</h1>";
                break;
            default:
                echo "Anda belum memilih!!";
            }
            break;
        case "k1" :
            switch($to){
            case "c2" :
                $hasil = $nilai - 273 ;
                echo "<h1> Hasil Konversi: $hasil &deg;C</h1>";
                break;
            case "f2" :
                $hasil = ($nilai - 273) * 9 / 5 + 32;
                echo "<h1> Hasil Konversi: $hasil &deg;F</h1>";
                break;
            case "r2" :
                $hasil = ($nilai - 273) * 4 / 5;
                echo "<h1> Hasil Konversi: $hasil &deg;R</h1>";
                break;
            case "k2" :
                echo "<h1> Hasil Konversi: $nilai &deg;K</h1>";
                break;
            default:
                echo "Anda belum memilih!!";
            }
            break;
        default:
            echo "Anda belum memilih!!";
        }
    }
    ?>
</body>
</html>