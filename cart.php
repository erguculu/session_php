<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">

        <strong> Dans votre Panier : </strong> <br>
<ul>
    
        <?php foreach ($catalog as $id => $cookie) { ?>
            <?php if (isset($_COOKIE[$id])): ?>
               <li> <strong><?php  echo $_COOKIE[$id] ?> : </strong>
                <strong><?php echo ' Quantity : ' . $_COOKIE[$id . 'counter'] ?> </strong><br></li>
            <?php endif; ?>
        <?php } ?>
</ul>
    </div>
</section>