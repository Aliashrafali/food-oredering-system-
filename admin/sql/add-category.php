<?php
    date_default_timezone_set('Asia/Kolkata');
    include 'config.php';
    
    if(isset($_POST['ok'])){
        $cname = $_POST['cname'] ?? '';
        $status = 0;
        $date = date('Y-m-d H:i:s');
        $cimage = $_FILES['cimage']['name'];
        move_uploaded_file($_FILES['cimage']['tmp_name'], 'category/'.$_FILES['cimage']['name']);

        $sql = mysqli_query($conn, "
            INSERT INTO tbl_category(cname,image,date_and_time,status
            )VALUES('$cname', '$cimage', '$date', '$status')
        ")or die(mysqli_error($conn));

        if($sql){
            echo "<script>
                alert('Data Inserted');
                window.location = '../add-category.php';
                </script>";
        }else{
            echo "Error".mysqli_error($conn);
        }
    }
?>