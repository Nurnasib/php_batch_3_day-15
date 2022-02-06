<?php include 'header.php';?>
<section class="py-5 bg-success">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $product['image']?>" alt="" class="card-img-top" />
                        <div class="card-body">
                            <h1 class="card-title text-success"><?php echo $product['description']?></h1>
                            <h2 class="card-title text-dark"><?php echo $product['brand']?></h2>
                            <h4 class="text-dark"><?php echo $product['price']?></h4>
                            <hr/>
                            <a href="action.php?status=describe" id="id" class="btn btn-danger">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>







<?php include 'footer.php';?>
