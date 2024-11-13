<?php
$servername = "localhost";
$username = "root"; // default XAMPP user
$password = ""; // default XAMPP password (kosong)
$dbname = "ekspresi";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari formulir
$name = $_POST['name'];
$expression = $_POST['expression'];

// Menyimpan data ke database
$sql = "INSERT INTO users (name, expression) VALUES ('$name', '$expression')";

if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman hasil
    header("Location: result.php?expression=" . urlencode($expression));
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
