<?php
    include 'sql/config.php';
    include 'includes/header.php';
    include 'includes/navbar.php';
    include 'includes/top-header.php';
    include 'cardarray.php';
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 pt-3">
                <h4>Dashbaord</h4><hr>
            </div>
        </div>
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="category-view p-3">
                   <h6>All Food Details</h6><hr>
                   <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Entry Date</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = mysqli_query($conn, "SELECT * FROM tbl_category");
                                $i = 1;
                                if(mysqli_num_rows($sql) > 0){
                                    while($row = mysqli_fetch_array($sql)){
                            ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td>
                                        <?php 
                                            $date = $row['date_and_time'];
                                            $org_date = date('d-m-Y H:i:s A', strtotime($date));
                                            echo $org_date; 
                                        ?>
                                    </td>
                                    <td><?= $row['cname']; ?></td>
                                    <td>
                                        <img src="sql/category/<?= $row['image'] ?>" alt="" class="img-thumbnail" height="50px" width="50px">
                                    </td>
                                    <td>
                                        <?php
                                            if($row['status'] == 0){
                                        ?>
                                            <span class="badge rounded-pill text-bg-success">In-stock</span>
                                        <?php
                                            }else{
                                        ?>
                                            <span class="badge rounded-pill text-bg-danger">Out of Stock</span>
                                        <?php
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <a href=""><span class="badge rounded-pill text-bg-primary">Edit</span></a>
                                        <a href=""><span class="badge rounded-pill text-bg-danger">Delete</span></a>
                                    </td>
                                </tr>
                            <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
</script>
<?php
    include ('includes/footer.php');
?>