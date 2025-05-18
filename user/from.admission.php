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

<?php include("../menu/navbar.php")?>

<body>
    <form action="insert_into.fromadmission.php" method="post">
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
                    <!-- เลขบัตรประชาชน -->
                    <div class="form-group mb-3">
                        <label for="national_id">เลขบัตรประชาชน:</label><br>
                        <input type="text" class="form-control" id="national_id" name="national_id" required>
                    </div>
                    <!-- ระดับชั้นที่จะสมัคร -->
                    <div class="form-group mb-3">
                        <label for="class">ระดับชั้นที่จะสมัคร:</label>
                        <select class="form-control" id="class" name="class" required>
                            <option value="ม.1">ม.1</option>
                            <option value="ม.4">ม.4</option>
                            
                        </select>
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