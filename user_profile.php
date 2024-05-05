<?php

@include 'admin/config.php'; // Include config.php file

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:Login.php');
    exit; // Exit to prevent further execution
};

// Check if the database connection is established before using $conn
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/admin_style.css">
    <style>
        .box {
            position: relative;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
        h1.title {
            color: #00541A;
            transition: color 0.3s ease;
            border: 2px solid #00541A;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            background-color: #f0f0f0; /* Tambahkan warna latar belakang */
        }

        h1.title:hover {
            color: #009688;
            border-color: #009688;
            background-color: #FEF9D9; /* Ubah warna latar belakang saat dihover */
        }


        .btn, .option-btn {
            display: inline-block;
            padding: 10px 20px 10px 20px;
            margin-top: 10px;
            border: none;
=           color: white;
            text-decoration: none;
            cursor: pointer;
            width: auto;
        }

        .option-btn {
            margin-left: 10px;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>


<h1 class="title">User Profile</h1>
<br>

<div class="box-container">
    <?php
    $select_user = $conn->prepare("SELECT * FROM `member` WHERE id = ?");
    $select_user->bind_param("i", $user_id);
    $select_user->execute();
    $result = $select_user->get_result();

    while ($fetch_user = $result->fetch_assoc()) {
        ?>
        <div class="box">
            <h1>User ID: <span><?= $fetch_user['id']; ?></span></h1>
            <h1>Username: <span><?= $fetch_user['nama_lengkap']; ?></span></h1>
            <h1>Email: <span><?= $fetch_user['email']; ?></span></h1>
            <h1>User Type: <span style="color: <?php echo $fetch_user['user_type'] == 'admin' ? 'orange' : 'black'; ?>"><?= $fetch_user['user_type']; ?></span></h1>
            <a href="update-profile.php?delete=<?= $fetch_users['id']; ?>" onclick="return confirm('Delete this user?');" class="btn">Update</a>
            <a href="Login.php?delete=<?= $fetch_user['id']; ?>" onclick="return confirm('Anda yakin mau Logout?');" class="option-btn">Logout</a>
        </div>
        <?php
    }
    ?>
</div>


</body>
</html>
