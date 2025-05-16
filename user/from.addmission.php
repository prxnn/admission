<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มสมัครเรียน</title>
    <link rel="stylesheet" href="../css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<style>
    a.nav-link {
        color: #000;
    }

    .section1 {
        background-color: rgb(255, 255, 255);
    }

    .img-fluid {
        max-width: 10%;
        height: auto;
    }



    .form-container {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        border-radius: 5px;
        width: 100%;
    }

    .btn-submit {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        width: 100%;
    }

    .btn-submit:hover {
        background-color: #45a049;
    }
</style>

<header class="header " style="background-color: #ecc8ff">
    <ul class="nav p-3 container">
        <li class="list-item">
            <a href="../index.php" class="nav-link ">หน้าหลัก</a>
        </li>
        <li class="list-item">
            <a href="from.addmission.php" class="nav-link  ">สมัครเรียน</a>
        </li>
        <li class="list-item">
            <a href="../index.php" class="nav-link  ">ตรวจสอบ/แก้ไขการสมัคร</a>
        </li>
        <li class="list-item">
            <a href="../index.php" class="nav-link  ">สถิติรับสมัคร</a>
        </li>
        <li class="list-item">
            <a href="../index.php" class="nav-link  ">ติดต่อ</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                เข้าสู่ระบบ
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">นักเรียน</a></li>
                <li><a class="dropdown-item" href="#">ครู/เจ้าหน้าที่</a></li>
                <li><a class="dropdown-item" href="#">ผู้ดูแลระบบ</a></li>
            </ul>
        </li>
    </ul>
</header>

<body>
    <form action="user/insert_into.fromaddmission.php" method="post">
        <section class="section1">
            <div class="container form-container">
                <h2 class="form-header">ฟอร์มสมัครเรียน</h2>
                <!-- คำนำหน้า -->
                
                    <div class="form-group mb-3">
                        <label for="sex">คำนำหน้า:</label>
                        <select class="form-control" id="sex" name="sex" required>
                            <option value="ประถม">เด็กชาย</option>
                            <option value="มัธยม">เด็กหญิง</option>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                        </select>
                    </div>
                    <!-- ชื่อ -->
                    <div class="form-group mb-3">
                        <label for="first_name">ชื่อ:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>

                    <!-- นามสกุล -->
                    <div class="form-group mb-3">
                        <label for="last_name">นามสกุล:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>

                    <!-- วันเกิด -->
                    <div class="form-group mb-3">
                        <label for="dob">วันเกิด:</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>

                    <!-- เพศ -->
                    <div class="form-group mb-3">
                        <label for="gender">เพศ:</label><br>
                        <label><input type="radio" name="gender" value="ชาย" required> ชาย</label>
                        <label><input type="radio" name="gender" value="หญิง"> หญิง</label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="national_id">เลขบัตรประชาชน:</label><br>
                        <input type="text" class="form-control" id="national_id" name="national_id" required>
                    </div>
                    <!-- เบอร์โทร -->
                    <div class="form-group mb-3">
                        <label for="phone">เบอร์โทรศัพท์:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>

                    <!-- ที่อยู่ -->
                    <div class="form-group mb-3">
                        <label for="address">ที่อยู่:</label>
                        <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
                    </div>

                    <!-- อีเมล -->
                    <div class="form-group mb-3">
                        <label for="email">อีเมล:</label>
                        <input type="tel" class="form-control" id="email" name="email" required>
                    </div>

                    <!-- ปุ่มสมัคร -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-submit">ส่งข้อมูลสมัครเรียน</button>
                    </div>
                
            </div>
        </section>
    </form>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</html>