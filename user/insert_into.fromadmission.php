<?php
include("../conn.php");
$sex = $_POST["sex"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$national_id = $_POST["national_id"];
$class = $_POST["class"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$email = $_POST["email"];

$sql = "INSERT INTO tb_students(stu_sex,stu_first_name,stu_last_name,stu_gender,stu_date_of_birth,stu_national_id,stu_class,stu_phone_number,stu_email,stu_address)
VALUES('$sex','$first_name','$last_name','$dob','$gender','$national_id','$class','$phone','$address','$email')";

if($conn->query($sql)==TRUE){
    ?> <script>
        alert("บันทึกข้อมูลนักเรียนสำเร็จ");
        window.location.href = '../index.php';
    </script>
    <?php
}
?>
