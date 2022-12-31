<?php
    include 'includes/header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5 text-success">All Product</h1>

            </div>
        </div>
        <div class="row mt-5">
            <?php  foreach ($allProducts as $product) { ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/11.jpg" alt="" class="card-img-top " style="height: 250px;">
                    <div class="card-body">
                        <h3><?php echo $product['name']?></h3>
                        <h4>Price: <?php echo $product['price']?> Taka</h4>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-success float-end">View</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php
include 'includes/footer.php';
?>
