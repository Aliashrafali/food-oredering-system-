<?php
    include 'config.php';

    $id = $_GET['id'];
    $sql = mysqli_query($conn, "DELETE FROM tbl_category WHERE id = '$id'") or die(mysqli_error($conn));
    if($sql){
        echo "Deleted";
    }else{
        echo "Error".mysqli_error($conn);
    }
?>