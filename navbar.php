<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>ระบบสมัครเรียน</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ฟอนต์ + Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="../css/css.css">

  
</head>

<body>

    <!-- เมนู -->
    <header class="header">
        <div class="container d-flex justify-content-between align-items-center py-3">

            <!-- ซ้าย: ข้อความ -->
            <div class="header-title">
                <div class="d-flex">
                   
                    <h4 > <i class="bi bi-book-half fs-5 text-dark"></i> ระบบรับสมัครนักเรียน 2569</h4>
                </div>

            </div>

            <!-- ขวา: เมนู -->
            <ul class="nav">
                <li class="list-item">
                    <a href="home.php" class="nav-link fs-5">หน้าหลัก</a>
                </li>
                <li class="list-item">
                    <a href="from.admission.php" class="nav-link fs-5">สมัครเรียน</a>
                </li>
                <li class="list-item">
                    <a href="edit.fromadmission.php" class="nav-link fs-5">ตรวจสอบ/แก้ไขการสมัคร</a>
                </li>
                <li class="list-item">
                    <a href="index.php" class="nav-link fs-5">สถิติรับสมัคร</a>
                </li>
                <li class="list-item">
                    <a href="index.php" class="nav-link fs-5">ติดต่อ</a>
                </li>
                
            </ul>

        </div>
    </header>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scroll Script -->
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>