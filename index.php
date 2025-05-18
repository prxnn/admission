<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>

<body>
<?php include("menu/navbar.php")?>
   

    <!-- ส่วนเนื้อหาของหน้าหลัก -->
    <section class="section1">
        <div class="container text-center">
            <div class="img mb-5">
                <img src="https://skj.ac.th/uploads/logoSchool/LogoSKJ_4.png" class="img-fluid" alt="">
            </div>

            <h1 class="text-center mt-4">รับสมัครนักเรียนใหม่ ปีการศึกษา 2568</h1>
            <hr class="container">

            <div class="button">
                <a href="user/from.addmission.php" class="btn">สมัครเรียน</a>
            </div>
        </div>
    </section>

    <!-- ส่วนข้อปฏิบัติการเตรียมตัวเข้าสอบและการสอบ -->
    <section class="section2 mt-5">
        <div class="container d-flex justify-content-around">
            <div>
                <h3>ข้อปฏิบัติการเตรียมตัวเข้าสอบและการสอบ</h3>
                <div class="button mt-3">
                    <button type="button" class="btn btn-outline-primary">อ่าน</button>
                </div>
            </div>

            <div>
                <h3>วิธีตรวจสอบการสมัครและพิมพ์บัตรประจำตัวสอบ</h3>
                <div class="button mt-3">
                    <button type="button" class="btn btn-outline-primary">ดู</button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
 