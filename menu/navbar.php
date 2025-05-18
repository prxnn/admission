 <style>
        a.nav-link {
            color: #000;
        }

        .img-fluid {
            max-width: 10%;
            height: auto;
        }

        /* ฟอร์มและการจัด Layout */
        .section1 {
            background-color: rgb(255, 255, 255);
            padding: 50px 0;
        }

        .section1 img {
            width: 15%;
            margin-bottom: 20px;
        }

        .text-center {
            font-size: 24px;
            font-weight: bold;
        }

        .button {
            text-align: center;
            margin-top: 20px;
        }

        .button .btn {
            width: 200px;
            padding: 12px;
            background-color: #6c5ce7;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
        }

        .button .btn:hover {
            background-color: #5a3cb2;
        }

        /* การจัดการเมนู */
        .header {
            background-color: #ecc8ff;
        }

        .nav-item a {
            color: #000;
            font-weight: 500;
            padding: 10px 15px;
            transition: all 0.3s;
        }

        .nav-item a:hover {
            color: #6c5ce7;
        }

        .nav-item.dropdown .dropdown-menu {
            background-color: #6c5ce7;
        }

        .nav-item.dropdown .dropdown-menu a {
            color: white;
        }

        .nav-item.dropdown .dropdown-menu a:hover {
            background-color: #5a3cb2;
        }
    </style>
     <!-- เมนู -->
    <header class="header">
        <ul class="nav p-3 container">
            <li class="list-item">
                <a href="../index.php" class="nav-link">หน้าหลัก</a>
            </li>
            <li class="list-item">
                <a href="user/from.admission.php" class="nav-link">สมัครเรียน</a>
            </li>
            <li class="list-item">
                <a href="index.php" class="nav-link">ตรวจสอบ/แก้ไขการสมัคร</a>
            </li>
            <li class="list-item">
            
                <a href="index.php" class="nav-link">สถิติรับสมัคร</a>
            </li>
            <li class="list-item">
                <a href="index.php" class="nav-link">ติดต่อ</a>
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