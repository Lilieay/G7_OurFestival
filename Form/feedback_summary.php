<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สรุปผลความคิดเห็น - Boo(k) Night! Fair</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style_form.css">
</head>
<body>

    <header class="stickyhead">
        <h1>Boo(k) Night! Fair</h1>
        <nav>
            <a href="../index.html"><button>Home</button></a>
            <a href="../booth_directory/booth_directory.html"><button>Booth</button></a>
            <a href="Register.html"><button>Register</button></a>
            <a href="Feedback.html"><button>Feedback</button></a>
        </nav>
    </header>
    <div class="container mt-5">
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-center fw-bold mb-4">เสียงตอบรับจากผู้เข้าร่วมงาน</h2>
            <?php
            $dataFile = 'feedback_data.json';
            if (file_exists($dataFile)) {
                $jsonContent = file_get_contents($dataFile);
                $records = json_decode($jsonContent, true);
            } else {
                $records = [];
            }
            if (!empty($records)) {
            ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อ-สกุล</th>
                                <th>ความพึงพอใจ</th>
                                <th>ร้านที่ชอบ</th>
                                <th>ข้อเสนอแนะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($records as $index => $row) {
                                $name = htmlspecialchars($row['name']);
                                $rating = htmlspecialchars($row['rating']);
                                $favorite = htmlspecialchars($row['favorite_booth']);
                                $comment = htmlspecialchars($row['comment']);
                                $number = $index + 1;
                                echo "<tr>";
                                echo "<td>$number</td>";
                                echo "<td>$name</td>";
                                echo "<td><span class='badge bg-primary'>$rating</span></td>";
                                echo "<td>$favorite</td>";
                                echo "<td>$comment</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="alert alert-success mt-3 text-center">
                    รวมทั้งหมด: <?php echo count($records); ?> ความคิดเห็น
                </div>
            <?php
            } else {
                echo "<div class='alert alert-warning text-center'>ยังไม่มีข้อมูลความคิดเห็น</div>";
            }
            ?>
            <div class="text-center mt-4">
                <a href="Feedback.html" class="btn btn-secondary">กลับไปหน้าประเมิน</a>
            </div>
        </div>
    </div>

</body>
</html>