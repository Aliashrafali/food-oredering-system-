<?php
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
            <?php
                foreach($cardarray as $item){
            ?>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card1" style="border-left:<?= $item['border']; ?>;">
                        
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>

<?php
    include ('includes/footer.php');
?>