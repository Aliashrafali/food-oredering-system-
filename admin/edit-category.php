<?php
    include 'sql/config.php';
    include 'includes/header.php';
    include 'includes/navbar.php';
    include 'includes/top-header.php';

    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM tbl_category WHERE id = '$id'") or die(mysqli_error($conn));
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_array($sql);
    }
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 pt-3">
                <h4>Dashbaord</h4><hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12"></div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form p-3">
                    <h6>Edit Food Category Details</h6><hr>
                    <form action="sql/edit-category.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category Name</label>
                            <input type="text" name="cname" class="form-control" value="<?= $row['cname']; ?>" id="cname" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image </label>
                            <input type="file" name="cimage" class="form-control" id="cimage" aria-describedby="emailHelp">
                            <p class="pt-2">Old Image</p>
                            <img src="sql/category/<?php echo $row['image']; ?>" alt="" class="img-thumbnail" height="100px" width="100px">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Status </label>
                            <select name="status" class="form-control">
                                <?php
                                    if($row['status'] == 0){
                                ?>
                                    <option value="0" selected>In-stock</option>
                                    <option value="1">Out of stock</option>
                                <?php
                                    }else{
                                ?>
                                    <option value="0">In-stock</option>
                                    <option value="1" selected>Out of stock</option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div style="display: block; float: right;">
                                    <button type="submit" name="ok" style="background-color: #555879;">Edit Details</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    include ('includes/footer.php');
?>