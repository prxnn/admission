<?php include('../conn.php');    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขการสมัคร</title>
</head>
<?php include("../navbar.php"); ?>

<body>
    <div class="container">
        <div class="headtext">
            <h3 class="text-center mt-5 mb-5">ตรวจสอบข้อมูลการสมัครเรียน และ แก้ไขการสมัคร</h3>
        </div>
        <table class="table">

            <thead>
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">คำนำหน้า</th>
                    <th scope="col">ชื่อ-นามสกุล</th>
                    <th scope="col">เพศ</th>
                    <th scope="col">ว/ด/ป.เกิด</th>
                    <th scope="col">เลขบัตรประจำตัวประชาชน</th>
                    <th scope="col">ระดับชั้น</th>
                    <th scope="col">เบอร์โทร</th>
                    <th scope="col">อีเมล</th>
                     <th scope="col">ที่อยู่</th>
                </tr>
            </thead>
            <!-- เอาข้อมูลมาใส่ -->
            <?php
            $sql = "SELECT * FROM `tb_students`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["student_id"] . "</td>";
                    echo "<td>" . $row["stu_sex"] . "</td>";
                    echo "<td>" . $row["stu_first_name"] . $row["stu_last_name"];
                  
                    echo "<td>" . $row["stu_gender"] . "</td>";
                    echo "<td>" . $row["stu_date_of_birth"] . "</td>";
                    echo "<td>" . $row["stu_national_id"] . "</td>";
                    echo "<td>" . $row["stu_class"] . "</td>";
                    echo "<td>" . $row["stu_phone_number"] . "</td>";
                    echo "<td>" . $row["stu_email"] . "</td>";
                    echo "<td>" . $row["stu_address"] . "</td>";


                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>ไม่มีข้อมูล</td></tr>";
            }
            ?>

        </table>
    </div>

</body>

</html>