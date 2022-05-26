<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    <?php
        session_start();
        if(isset($_POST['logout'])){
            unset($_SESSION['id']);
        }
        if(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
            if(isset($id)){
                echo "#login { display : none ;}";
            }
        }
    ?>
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perpustakaan</title>
</head>
<body>
    <ul>
        <li id="login">
            <a href='FormLogin.php'><button>Login</button></a>
        </li>
        <li>
            <a href='Buku.php'><button>Data Buku</button></a>
        </li>
        <li>
            <a href='Member.php'><button>Lihat Data Member</button></a>
        </li>
        <li>
            <a href='Peminjaman.php'><button>Lihat Data Peminjaman</button></a>
        </li>
        <?php
        if(isset($id)){
            echo "
            <li>
                <form method='POST'>
                <input type='submit' name='logout' value='Log Out'>
                </form>
            </li>";
        }
        ?>
    </ul>
</body>
</html>,