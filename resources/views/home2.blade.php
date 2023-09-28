<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

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
        </div>
    </nav>
</head>

<body>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1500">
                <img src="{{ asset('img/IMG_3620 2.jpg') }}" class="d-block w-100" alt="">
            </div>

            <div class="carousel-item" data-bs-interval="1500">
                <img src="{{ asset('img/IMG_3629.jpg') }}" class="d-block w-100" alt="">
            </div>

            <div class="carousel-item" data-bs-interval="1500">
                <img src="{{ asset('img/986c7b10529841f6a23fec879ef599c6 3.jpg') }}" class="d-block w-100"
                    alt="">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br> <br>
    <center>
        <h1>
            <font color="darkyellow">รายการ</font>
        </h1>
    </center>
    <br> <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card border-warning bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title text-warning">แผนผังร้าน</h5>
                        <p class="card-title text-warning">สามารถเข้าไปเลือกชมหรือจับจองโต๊ะที่ท่านต้องการได้</p>
                        <a href="/table" class="btn btn-outline-warning">Let's go</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card border-warning bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Promotion</h5>
                        <p class="card-title text-warning">สามารถดูโปรโมชั่น และรายการสินค้าในร้านได้ที่นี่</p>

                        <a href="/pro" class="btn btn-outline-warning">Let's go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

    <center>
        <h5>
            {{-- <font color="darkyellow">-- ยินดีต้อนรับสู่เว็บจองโต๊ะของ Alcoholism
                ขอให้ท่านเพลิดเพลินกับการใช้บริการเว็บเพจของเรา --</font> --}}
                <font color="darkyellow">"Let's drink until we get drunk."</font>
                <br>
                <font color="darkyellow">"เหล้าเบียร์มันไม่ดี เลิกได้เลิก เลิกไม่ได้ก็มาจองโต๊ะ"</font>

        </h5>
    </center>

    <br><br><br>


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
