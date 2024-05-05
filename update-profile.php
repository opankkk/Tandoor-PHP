<?php

@include 'admin/config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:Login.php');
};
$email = "";
$nama_lengkap = "";

$fetch_profile = array();

if(isset($_POST['update_profile'])){

   $nama_lengkap = $_POST['nama_lengkap'];
   $nama_lengkap = filter_var($nama_lengkap, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);

   $update_profile = $conn->prepare("UPDATE `member` SET nama_lengkap = ?, email = ? WHERE id = ?");
   $update_profile->execute([$nama_lengkap, $email, $user_id]);

   $old_pass = md5($_POST['old_pass']);
   $update_pass = md5($_POST['update_pass']);
   $update_pass = filter_var($update_pass, FILTER_SANITIZE_STRING);
   $new_pass = md5($_POST['new_pass']);
   $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
   $confirm_pass = md5($_POST['confirm_pass']);
   $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);

   if(!empty($update_pass) AND !empty($new_pass) AND !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         $update_pass_query = $conn->prepare("UPDATE `member` SET password = ? WHERE id = ?");
         $update_pass_query->execute([$confirm_pass, $user_id]);
         $message[] = 'password updated successfully!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Admin Profile</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/components.css">
   <style>
    .option-btn{
   background-color: #F7E652;
   color: black;
}
   </style>
</head>
<body>
   
<?php include 'header.php'; ?>

<section class="update-profile">
   <h1 class="title">Update Profile</h1>
   <form action="" method="POST" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>Nama Lengkap :</span>
            <input type="text" name="nama_lengkap" value="<?= isset($fetch_profile['nama_lengkap']) ? $fetch_profile['nama_lengkap'] : ''; ?>" placeholder="Update Nama Lengkap" required class="box">
            <span>Email :</span>
            <input type="email" name="email" value="<?= isset($fetch_profile['email']) ? $fetch_profile['email'] : ''; ?>" placeholder="Update email" required class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?= isset($fetch_profile['password']) ? $fetch_profile['password'] : ''; ?>">
            <span>Old Password :</span>
            <input type="password" name="update_pass" placeholder="Enter previous password" class="box">
            <span>New Password :</span>
            <input type="password" name="new_pass" placeholder="Enter new password" class="box">
            <span>Confirm Password :</span>
            <input type="password" name="confirm_pass" placeholder="Confirm new password" class="box">
         </div>
      </div>
      <div class="flex-btn">
         <input type="submit" class="btn" value="Update Profile" name="update_profile">
         <a href="Index.php" class="option-btn">Go back</a>
      </div>
   </form>
</section>

<script src="js/script.js"></script>

</body>
</html>