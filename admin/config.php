    <?php
    // File: config.php
    $host = 'localhost'; // Host database
    $username = 'root'; // Username database
    $password = ''; // Password database
    $database = 'admintandoor'; // Nama database

    // Membuat koneksi ke database
    $conn = mysqli_connect($host, $username, $password, $database);

    // Periksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    ?>
