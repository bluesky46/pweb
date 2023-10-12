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
                        การจอง
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">ข้อมูลการจอง</h5>

                        <?php
                        $selectedTables = $_GET['selectedTables'] ?? '';
                        ?>

                        {{-- <form action="{{ route('booking.store') }}" method="POST">
                            @csrf
                            Table Name: <input type="text" id='table_number' name="table_number" value="{{ $selectedTables }}" readonly><br><br>
                            Name: <input type="text" id="name" name="name"><br><br>
                            จำนวนคน: <input type="text" id="count" name="count"><br><br>
                            Tel: <input type="text" id="phone" name="phone"><br><br>
                            <p id="currentDateTime"></p>
                            <br><br>
                            <dt>กรุณาจ่ายเงินตามจำนวนโต๊ะที่ท่านได้จองไป
                                <dd>1 โต๊ะ 300 บาท <br>
                                    2 โต๊ะ 600 บาท <br>
                                    3 โต๊ะ 900 บาท</dd>
                            </dt>
                            <h6>ร้านนี้ยินดีต้อนรับปัญญาชนและบุคคลที่มีจรรญาบรร 🙏🙏🙏</h6>
                        <img src="{{ asset('img/IMG_3733.PNG') }}" width="400" height="500"> <br><br>

                            {{-- <button type="submit" class="btn btn-warning">Let's Go</button><br> --}}
                            {{-- <button type="submit" class="btn btn-warning" onclick="showBookingCompleteAlert()">Let's Go</button><br>


                        </form>
                        <script>
                            function showBookingCompleteAlert() {
                                alert("การจองสำเร็จ ขอบคุณที่ใช้บริการ");
                            }
                        </script> --}}
                        @if (Auth::check())
                        <form action="{{ route('booking.store') }}" method="POST">
                            @csrf
                            Table Name: <input type="text" id='table_number' name="table_number" value="{{ $selectedTables }}" readonly><br><br>
                            {{-- Name: <input type="text" id="name" name="name"><br><br> --}}
                            Name : <input type="text" name="user_email" value="{{ Auth::user()->email }}" readonly><br><br>

                            Date : <input type="date"><br><br>
                            จำนวนคน: <input type="text" id="count" name="count"><br><br>
                            Tel: <input type="text" id="phone" name="phone"><br><br>
                            <p id="currentDateTime"></p>
                            <br><br>

                            <input type="hidden" id="totalCost" name="totalCost" value="0">


                            <div class="card">
                                <div class="card-body">
                                    <p>จำนวนเงินที่ต้องชำระ: <span id="totalCostSpan">0</span> บาท</p>
                                    <img src="{{ asset('img/IMG_3733.PNG') }}" width="400" height="500"> <br><br>
                                </div>

                            </div><br>
                            <button type="submit" class="btn btn-warning" onclick="showBookingCompleteAlert()">Let's Go</button><br>


                        </form>
                        @endif
                        <script>
                            function showBookingCompleteAlert() {
                                alert("การจองสำเร็จ ขอบคุณที่ใช้บริการ");
                            }
                        </script>
                        </form>

                    </div>
                </div>
                <script>
                    function calculateTotalCost() {
                        const selectedTables = document.getElementById("table_number").value.split(",");
                        const numTables = selectedTables.length;
                        let totalCost = numTables * 300; // Assuming 1 table costs 300 baht

                        document.getElementById("totalCost").value = totalCost;

                        document.getElementById("totalCostSpan").textContent = totalCost;
                    }
                    window.addEventListener("load", calculateTotalCost);
                </script>

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
                เว็บจองโต๊ะสำหรับบุคคลที่ต้องการให้แอลกอฮอล์ไหลเข้าสู่ร่างกาย </h5>
            <p class="card-title text-warning">Website for booking tables for individuals who want alcohol to flow into their bodies.
            </p>
        </div>
    </div>

</body>

</html>
