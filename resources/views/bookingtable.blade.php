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

    <nav class="navbar navbar-dark bg-black">
        <div class="container-fluid">
            <a class="navbar-brand">
                <a class="nav-link" href="/home2">
                    <font style="font-size:22px;" color="darkyellow">Home</font>
                    <img src="img/pngtree-clink-glasses-to-celebrate-beer-toasts-png-image_5768200.png.jpeg"
                        alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                </a>
            </a>
        </div>
    </nav>
</head>

<body style="background-color: black">
    <div>
        <h1>
            <center>
                <font style="font-size:30px;"color="darkyellow">Booking Table</font>
            </center>
        </h1>
    </div>
    <div>
        <h2>
            <center>
                <font style="font-size:15px;" color="darkyellow">"No matter how many problems come your way, remember
                    this have a beer first."</font>
            </center>
        </h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-header">
                        กางจอง
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">ข้อมูลการจอง</h5>

                        <?php
                        $selectedTables = $_GET['selectedTables'] ?? '';
                        if (!empty($selectedTables)) {
                            echo "<p>Table Number : $selectedTables</p>";
                        }
                        ?>
                        <p id="currentDateTime"></p>

                        <script>
                            // สร้างฟังก์ชันเพื่ออัปเดตวันที่และเวลาทุกๆ 1 วินาที
                            function updateDateTime() {
                                var currentDate = new Date();
                                var dateString = currentDate.toLocaleDateString();
                                var dateTimeString = "Date : " + dateString;
                                document.getElementById("currentDateTime").textContent = dateTimeString;
                            }
                            updateDateTime();
                        </script>

                        <form action="{{ route('table.store') }}" method="POST">
                            @csrf
                            Name : <input type="text" name="name"><br><br>
                            <button type="submit" class="btn btn-warning">Let's Go</button><br>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

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
