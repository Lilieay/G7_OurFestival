<?php
$dataFile = 'register_data.json';
if (file_exists($dataFile)) {
    $jsonContent = file_get_contents($dataFile);
    $records = json_decode($jsonContent, true) ?? [];
} else {
    $records = [];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname_register'] ?? '');
    $user = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $tel = trim($_POST['tel'] ?? '');
    $pass = trim($_POST['password'] ?? ''); 
    $gender = trim($_POST['gender'] ?? 'ไม่ระบุ');
    if ($fullname && $user && $email) {
        $newData = [
            'fullname' => $fullname,
            'username' => $user,
            'email' => $email,
            'tel' => $tel,
            'gender' => $gender,
            'timestamp' => date('Y-m-d H:i:s') 
        ];
        $records[] = $newData;
        if (file_put_contents($dataFile, json_encode($records, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
            echo "<script>
                    alert('ลงทะเบียนเรียบร้อย!');
                    window.location.href = 'register_summary.php'; 
                  </script>";
        } else {
            echo "เกิดข้อผิดพลาดในการบันทึกไฟล์";
        }
    } else {
        echo "<script>
                alert('กรุณากรอกข้อมูลให้ครบถ้วน');
                history.back();
              </script>";
    }
}
?>