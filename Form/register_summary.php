<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>รายชื่อผู้ลงทะเบียน - Boo(k) Night! Fair</title>
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

    <div class="container d-flex justify-content-center align-items-center min-vh-100 mt-5 mb-5">
        <div class="card p-4 shadow-sm" style="width: 100%; max-width: 900px;">
            <h2 class="text-center fw-bold mb-4">รายชื่อผู้ลงทะเบียนเข้าร่วมงาน</h2>

            <?php
            $dataFile = 'register_data.json';
            if (file_exists($dataFile)) {
                $jsonContent = file_get_contents($dataFile);
                $visitors = json_decode($jsonContent, true);
            } else {
                $visitors = [];
            }
            if (!empty($visitors)) {
            ?>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>เพศ</th>
                                </tr>
                        </thead>
                        <tbody>
                            <?php
                            $visitors = array_reverse($visitors); 
                            foreach ($visitors as $index => $row) {
                                $name = htmlspecialchars($row['fullname']);
                                $user = htmlspecialchars($row['username']);
                                $email = htmlspecialchars($row['email']);
                                $gender = htmlspecialchars($row['gender']);
                                $number = count($visitors) - $index;
                                echo "<tr>";
                                echo "<td>$number</td>";
                                echo "<td class='text-start'>$name</td>"; 
                                echo "<td>$user</td>";
                                echo "<td class='text-start'>$email</td>";
                                echo "<td>$gender</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="alert alert-success mt-3 text-center">
                    <strong>ยอดรวมผู้ลงทะเบียนทั้งหมด: <?php echo count($visitors); ?> คน</strong>
                </div>
            <?php
            } else {
                echo "<div class='alert alert-warning text-center'>ยังไม่มีผู้ลงทะเบียน</div>";
            }
            ?>
            <div class="text-center mt-4">
                <a href="Register.html" class="btn btn-primary px-4">ลงทะเบียนเพิ่ม</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>