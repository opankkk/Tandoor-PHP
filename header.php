<?php
@include 'config.php'; 
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="css/StyleNav.css">
   
</head>
<body>
<nav>
    <div class="wrapper">
        <div class="logo"><a href="Index.php"><img src="aset/Logo-Tandoor.png" alt=""></a></div>
        <div class="menu"> 
            <ul>
                <li><a href="Index.php">Home</a></li>
                <li><a href="Products.php">Products</a></li>
                <li><a href="about.php">About Us</a></li>
                <?php
                // Periksa apakah sesi untuk pengguna sudah ada
                if(isset($_SESSION['user_id']) || isset($_SESSION['admin_id'])) {
                    // Jika sudah login, tampilkan nama pengguna atau ikon user
                    echo '<li><a href="user_profile.php" id="user-btn"><i class="fa-solid fa-user" style="color: #fef9d9;"></i></a></li>';
                } else {
                    // Jika belum login, tampilkan link untuk login
                    echo '<li><a href="Login.php">Login</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
