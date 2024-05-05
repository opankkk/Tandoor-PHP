
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
    <title>TANDOOR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      .home-category {
      text-align: center; 
      margin: auto;
      background-image: white;
      }
      section .home-category{
         background-image:url('aset/light_bg.png')
      }
      .home-bg{
         background-image: url('aset/home-bg.jpg');
         background-size: cover;
         background-position: center;
      }
    </style>
  
</head>
<body>  
<?php include("header.php") ?>

<div class="home-bg">

   <section class="home">

      <div class="content">
        <span>Kualitas Sayur Restoran, Kami yang Menyediakan</span>
        <h3>Sayuran Segar Langsung dari Sumbernya</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto natus culpa officia quasi, accusantium explicabo?</p>
        <a href="about.php" class="btn">about us</a>
      </div>

   </section>

</div>

<section class="home-category">


   <div class="box-container">

      <div class="box">
         <img src="aset/cat-1.png" alt="">
         <h3>fruits</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=fruits" class="btn">fruits</a>
      </div>

      <div class="box">
         <img src="aset/cat-2.png" alt="">
         <h3>meat</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=meat" class="btn">meat</a>
      </div>

      <div class="box">
         <img src="aset/cat-3.png" alt="">
         <h3>vegitables</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=vegitables" class="btn">vegitables</a>
      </div>

      <div class="box">
         <img src="aset/cat-4.png" alt="">
         <h3>fish</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=fish" class="btn">fish</a>
      </div>

   </div>

</section>


<script src="js/script.js"></script>

    
   
</body>
</html>
