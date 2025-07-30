<?php
    include 'config.php';

    if(isset($_POST['ok'])){
        $id = $_POST['id'] ?? '';
        $cname = $_POST['cname'] ?? '';
        $status = $_POST['status'] ?? '';
        $cimage = $_FILES['cimage']['name'] ?? '';
        move_uploaded_file($_FILES['cimage']['tmp_name'], 'category/'.$_FILES['cimage']['name']);

        if(!empty($cimage)){
            $sql = mysqli_query($conn, "UPDATE tbl_category SET cname = '$cname', image = '$cimage', status = '$status' WHERE id = '$id'") or die(mysqli_error($conn));
            if($sql){
                echo "Edited";
            }else{
                echo "Error".mysqli_error($conn);
            }
        }else{
            $sql = mysqli_query($conn, "UPDATE tbl_category SET cname = '$cname', status = '$status' WHERE id = '$id'") or die(mysqli_error($conn));
            if($sql){
                echo "Edited";
            }else{
                echo "Error".mysqli_error($conn);
            }
        }

    }
?>