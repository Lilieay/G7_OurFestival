<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สรุปผลความคิดเห็น - Boo(k) Night! Fair</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style_form.css">
    <link rel="stylesheet" href="../CSS/style_navbar_and_footer.css">
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

    <div class="summary-container">
        <div class="card p-4 shadow-sm" style="width: 100%; max-width: 900px;">
            <h2 class="text-center fw-bold mb-4" style="color: #3b1a00;">เสียงตอบรับจากผู้เข้าร่วมงาน</h2>

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
                    <table class="table table-hover table-bordered align-middle text-center table-theme">
                        <thead>
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
                            $records = array_reverse($records); // โชว์ล่าสุดก่อน
                            foreach ($records as $index => $row) {
                                $name = htmlspecialchars($row['name']);
                                $rating = htmlspecialchars($row['rating']);
                                $favorite = htmlspecialchars($row['favorite_booth']);
                                $comment = htmlspecialchars($row['comment']);
                                $number = count($records) - $index;

                                echo "<tr>";
                                echo "<td>$number</td>";
                                echo "<td class='text-start'>$name</td>";
                                // ใช้ badge-theme สีส้ม
                                echo "<td><span class='badge badge-theme'>$rating</span></td>";
                                echo "<td>$favorite</td>";
                                echo "<td class='text-start'>$comment</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                
                <?php
            } else {
                echo "<div class='alert alert-warning text-center'>ยังไม่มีข้อมูลความคิดเห็น</div>";
            }
            ?>

            <div class="text-center mt-4">
                <a href="Feedback.html" class="btn btn-primary px-4">กลับไปหน้าประเมิน</a>
            </div>
        </div>
    </div>

</body>
</html>