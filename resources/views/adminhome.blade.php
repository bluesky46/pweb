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

                <font style="font-size:30px;" color="darkyellow">Alcoholism</font>
            </a>
            <a class="nav-link" href="/adminhome">
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                        <p class="card-title text-warning">สามารถเข้าไปดูโต๊ะและแก้ไขได้</p>
                        <a href="/adminHome/storelayout" class="btn btn-outline-warning">Let's go</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card border-warning bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title text-warning">ข้อมูลการจอง</h5>
                        <p class="card-title text-warning">สามารถเข้าไปดูการจองได้ที่นี่</p>

                        <a href="/bdata" class="btn btn-outline-warning">Let's go</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-warning bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title text-warning">วงดนตรี</h5>
                        <p class="card-title text-warning">สามารถเข้าไปดูการจองได้ที่นี่</p>

                        <a href="/addsingle" class="btn btn-outline-warning">Let's go</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card border-warning bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Menu</h5>
                        <p class="card-title text-warning">สามารถเข้าไปเพิ่มเมนูอาหารได้</p>

                        <a href="/product" class="btn btn-outline-warning">Let's go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

    <center>
        <h5>
            <font color="darkyellow">"Let's drink until we get drunk."</font>
            <br>
            <font color="darkyellow">"เหล้าเบียร์มันไม่ดี เลิกได้เลิก เลิกไม่ได้ก็มาจองโต๊ะ"</font>

        </h5>
    </center>

    <br><br><br>




    <br>

</body>

</html>
