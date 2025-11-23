<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_night_db";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลไม่ได้: " . $conn->connect_error);
}

if (isset($_POST['btn_register'])) {
    $fullname = $_POST['fullname_register'];
    $user = $_POST['username'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $pass = $_POST['password']; 
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users (fullname, username, email, tel, password, gender) 
            VALUES ('$fullname', '$user', '$email', '$tel', '$pass', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('ลงทะเบียนเรียบร้อย!');
                window.location.href = 'register.php';
              </script>";
    } else {
        echo "เกิดข้อผิดพลาด: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>