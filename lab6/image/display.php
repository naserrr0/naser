<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// جلب الصور من قاعدة البيانات
$sql = "SELECT id, image, name FROM images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" style="max-width: 300px;"><br>';
    }
} else {
    echo "No images found.";
}

$conn->close();
?>
