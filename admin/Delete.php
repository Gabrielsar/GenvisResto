
<?php
    $host = "localhost";
    $username = "root";
    $dbname = "fos_db";
    $password = "";
    $db = mysqli_connect($host, $username, $password, $dbname);

    if( isset($_GET['id']) ){

        $id = $_GET['id'];
    
        $sql = "DELETE FROM product_list WHERE id='$id'";
        $query = mysqli_query($db, $sql);
    
        if( $query ){
            header('Location: index.php');
        } else {
            die("gagal menghapus...");
        }
    
    } else {
        die("akses dilarang...");
    }
    header('location: index.php');
?>