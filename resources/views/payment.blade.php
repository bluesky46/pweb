<?php
session_start(); // เริ่มเซสชัน (session)

// ตรวจสอบว่ามีข้อมูลการจองในเซสชันหรือไม่
if (isset($_SESSION['bookingData'])) {
    $bookingData = $_SESSION['bookingData'];
} else {
    // หากไม่มีข้อมูลการจองในเซสชัน ให้เปลี่ยนเส้นทางหรือทำสิ่งที่ต้องการ
    header('Location: /booking'); // เปลี่ยนเส้นทางไปยังหน้า Booking
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body style="background-color: black">
    <nav class="navbar navbar-dark bg-black">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="img/pngtree-clink-glasses-to-celebrate-beer-toasts-png-image_5768200.png.jpeg" alt="Logo"
                    width="30" height="24" class="d-inline-block align-text-top">
                <font style="font-size:30px;" color="darkyellow">Alcoholism</font>
            </a>
            <a class="nav-link" href="/home2">
                <font color="darkyellow">Home</font>
            </a>

            <ul class="navbar-nav ms-auto">

                <!-- Authentication Links -->

                @guest

                    @if (Route::has('login'))

                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    <div>
        <h1>
            <center>
                <font style="font-size:30px;" color="darkyellow">Payment Page</font>
            </center>
        </h1>
    </div>
    <div>
        <h2>
            <center>
                <font style="font-size:15px;" color="darkyellow">"Your Payment Details"</font>
            </center>
        </h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <h4 class="card-header">การจอง</h4>
                    <div class="card-body">
                        <h5 class="card-title">ข้อมูลการจอง</h5>
                        <?php
                        // แสดงเลขโต๊ะที่ถูกเลือก
                        if (!empty($bookingData['selectedTables'])) {
                            echo '<p>Table Number : ' . $bookingData['selectedTables'] . '</p>';
                        }
                        // แสดงวันที่และเวลา
                        echo '<p>Date : ' . $bookingData['date'] . '</p>';

                        ?>

                        <p>Name: {{ $name }}</p>
                        <br><br>
                        <h5>ร้านนี้ยินดีต้อนรับปัญญาชนและบุคคลที่มีจรรญาบรร</h5>
                        <img src="{{ asset('img/IMG_3733.PNG') }}" width="400" height="500"> <br><br>
                        {{-- <input type="file"> <br><br> --}}

                           <!-- เพิ่ม Input สำหรับอัปโหลดไฟล์ -->
                           <form action="/upload.php" method="POST" enctype="multipart/form-data">
                            <input type="file" name="uploadedFile">
                            <input type="submit" value="Upload File" name="submit">
                        </form>
                        <a href="/home2" class="btn btn-warning">Go somewhere</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <br><br><br><br>


    <div class="card border-warning bg-transparent">
        <br>
        <h5 class="card-header text-warning">About us</h5>
        <div class="card-body">
            <h5 class="card-title text-warning">
                เว็บสำหรับการจองโต๊ะเหมาะสำหรับบุคคลที่ต้องการให้แอลกอฮอล์ไหลเข้าสู่ร่างกาย </h5>
            <p class="card-title text-warning">กะจะกินเหล้าให้ลืมเธอ แต่ดันลืมทุกอย่างยกเว้นเธอ <br>
                ชีวิตเราเกิดมาเพื่อเบียร์ ไม่ใช่เพื่อเธอ <br>
                อกหักไม่ตาย โปรเจคไม่เสร็จต่างหากถึงตาย

            </p>
        </div>
    </div>


</body>

</html>
