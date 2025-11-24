<?php

$dataFile = 'feedback_data.json';

if (file_exists($dataFile)) {
    $records = json_decode(file_get_contents($dataFile), true) ?? [];
} else {
    $records = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['fullname_feedback'] ?? '');
    $rating = trim($_POST['rating'] ?? '');
    $favorite = trim($_POST['favorite_booth'] ?? '');
    $comment = trim($_POST['comment'] ?? '');
    $consent = isset($_POST['consent']) ? true : false;

    if ($name && $rating && $favorite && $consent) {

        $records[] =  [
            'name' => $name,
            'rating' => $rating,
            'favorite_booth' => $favorite,
            'comment' => $comment
        ];

        file_put_contents($dataFile, json_encode($records, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        header("Location: feedback_summary.php");
        exit;
    } else {
        echo "<script>
                alert('กรุณากรอกข้อมูลให้ครบถ้วน และติ๊กยืนยันความยินยอม'); 
                history.back();
              </script>";
        exit;
        
    }
}

?>