<?php require 'inc/data/products.php'; ?>


<?php
$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    foreach ($catalog as $id => $cookie) {
        if ($host == 'localhost/index.php?add_to_cart=' . $id) {
            setcookie($id,$cookie['name']);

            if (isset($_COOKIE[$id . 'counter'])){
                $counter[$id] =  $_COOKIE[$id . 'counter'] + 1;
            } else {
                $counter[$id] =1;
            }
            setcookie($id . 'counter',$counter[$id]);
        }
}

?>


<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        
                        <p><?= $cookie['description']; ?></p>


                       <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>


                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>