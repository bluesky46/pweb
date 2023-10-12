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
            <a class="nav-link" href="admin/home">
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
    <h1> <br>
        <center>
            <font color="darkyellow">การจอง</font>
        </center>
    </h1>
    <br>  <br>

    <div class="row justify-content-center">
        <div class="col-sm-8 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-header">
                    ข้อมูลการจอง
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <table class="table ">

                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Table Number</th>
                                    <th scope="col">Count</th>
                                    <th scope="col">Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->table_number }}</td>
                                        <td>{{ $user->count }}</td>
                                        <td>{{ $user->phone }}</td>

                                        </th>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>




</body>

</html>
