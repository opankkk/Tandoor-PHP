<?php
include_once("inc/inc-koneksi.php");
include_once("inc/inc_fungsi.php");

?>
<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
     <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/StylePro.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>
    

</head>
<body>
<?php include 'header.php'; ?>
<div class="container">

   <div class="products-container">

      <div class="product" data-name="p-1">
         <img src="<?php echo ambil_gambar('10')?>"/>
         <h2><?php echo ambil_nama_produk('10')?></h2>
         <div class="price"><p><?php echo ambil_harga('10'); ?></p></div>
      </div>

      <div class="product" data-name="p-2">
         <img src="<?php echo ambil_gambar('12')?>"/>
         <h2><?php echo ambil_nama_produk('12')?></h2>
         <div class="price"><p><?php echo ambil_harga('12'); ?></p></div>
      </div>

      <div class="product" data-name="p-3">
         <img src="<?php echo ambil_gambar('13')?>"/>
         <h2><?php echo ambil_nama_produk('13')?></h2>
         <div class="price"><p><?php echo ambil_harga('13'); ?></p></div>
      </div>

      <div class="product" data-name="p-4">
         <img src="<?php echo ambil_gambar('14')?>"/>
         <h2><?php echo ambil_nama_produk('14')?></h2>
         <div class="price"><p><?php echo ambil_harga('14'); ?></p></div>
      </div>

   </div>

</div>

<div class="products-preview">

   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img src="<?php echo ambil_gambar('10')?>"/>
      <h2><?php echo ambil_nama_produk('10')?></h2>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price"><p><?php echo ambil_harga('10'); ?></p></div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <img src="<?php echo ambil_gambar('12')?>"/>
      <h2><?php echo ambil_nama_produk('12')?></h2>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price"><p><?php echo ambil_harga('12'); ?></p></div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      <img src="<?php echo ambil_gambar('13')?>"/>
      <h2><?php echo ambil_nama_produk('13')?></h2>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price"><p><?php echo ambil_harga('13'); ?></p></div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-4">
      <i class="fas fa-times"></i>
      <img src="<?php echo ambil_gambar('14')?>"/>
      <h2><?php echo ambil_nama_produk('14')?></h2>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price"><p><?php echo ambil_harga('14'); ?></p></div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

</div>

</body>
</html>