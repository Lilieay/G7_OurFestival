<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>รายชื่อผู้ลงทะเบียน - Boo(k) Night! Fair</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style_form.css">
    <link rel="stylesheet" href="../CSS/style_navbar_and_footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <!--Navbar Desktop-->
    <header class="stickyhead-desktop navbar">
        <h2 class="name">Boo(k) Night! Fair</h2>
        <nav id="desktop-nav" class="navbtn">
            <a href="../index.html">Home</a>
            <a href="../booth_directory/booth_directory.html">Booth</a>
            <a href="Register.html">Register</a>
            <a href="Feedback.html">Feedback</a>
        </nav>
    </header>
    <!--Navbar Mobile-->
    <div id="mobile">
        <header class="stickyhead-mobile">
            <div class="navbar" id="navbar-bg">
                <h2 class="name">Boo(k) Night! Fair</h2>
                <h2 id="bar"><i class="fa-solid fa-bars"></i></h2>
            </div>
        </header>
        <nav id="mobile-nav" class="text-center hidden navbtn">
            <a href="../index.html">Home</a>
            <a href="../booth_directory/booth_directory.html">Booth</a>
            <a href="Register.html">Register</a>
            <a href="Feedback.html">Feedback</a>
        </nav>
    </div>
    <div class="summary-container">
        <div class="card p-4 shadow-sm" style="width: 100%; max-width: 900px;">
            <h2 class="text-center fw-bold mb-4" style="color: #3b1a00;">รายชื่อผู้ลงทะเบียนเข้าร่วมงาน</h2>

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
                    <table class="table table-hover table-bordered align-middle text-center table-theme">
                        <thead>
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
                                // เปลี่ยน badge bg-secondary เป็น badge-theme
                                echo "<td><span class='badge badge-theme'>$user</span></td>";
                                echo "<td class='text-start'>$email</td>";
                                echo "<td>$gender</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
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
    <footer>
        <div class="footer-content">
            <p class="footer-copyright"> Boo(k) Night Fair </p>
            <div class="footer-social">
                <a href="https://github.com/Lilieay/G7_OurFestival.git" aria-label="Github"><i
                        class="fab fa-github"></i></a>
                <a href="#" aria-label="Phone"><i class="fas fa-phone"></i></a>
                <a href="#" aria-label="Shop"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </footer>
    <script src="../JS/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>