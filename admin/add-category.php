<?php
    include 'includes/header.php';
    include 'includes/navbar.php';
    include 'includes/top-header.php';
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
                    <h6>Fill Food Category Details</h6><hr>
                    <form action="sql/add-category.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category Name <sup><span style="color: red;">*</span></sup></label>
                            <input type="text" name="cname" class="form-control" id="cname" aria-describedby="emailHelp" placeholder="Enter Category Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image <sup><span style="color: red;">*</span></sup></label>
                            <input type="file" name="cimage" class="form-control" id="cimage" aria-describedby="emailHelp" required>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div style="display: block; float: right;">
                                    <button type="reset" style="background-color: red;">Reset</button>
                                    <button type="submit" name="ok" style="background-color: #555879;">Submit</button>
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