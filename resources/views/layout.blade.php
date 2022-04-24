<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 CRUD Application - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.
3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }

        .navbar-laravel {
            box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
        }

        .navbar-brand,
        .nav-link,
        .my-form,
        .login-form {
            font-family: Raleway, sans-serif;
       
        }
        .navbar-brand{
            margin-top: 20px;
        }
        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }
        .img img{
            height:5%;
            width: 100%;
    
        }
   
    </style>
</head>

<body>
    <nav class="navbar-expand-lg navbar-light">
        <div class="container">
            <picture>
                <source srcset="/image/telkom2.png" type="image/svg+xml">
                <div class="img">
                <img src="/image/telkom2.png" class="img-fluid img-thumbnail" alt="telkom2">
                </div>
            </picture>
        </div>
        <div class="container">
            <div class="row">
                <a class="navbar-brand" href="#">Aplikasi Pendaftaran Mahasiswa Magang</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria￾controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item">
                        <button class="btn btn-primary">
                        <a class="nav-link" href="{{route('login') }}" style="color:white; font-weight:bold;">Login</a>
    </button>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ 
route('register') }}">Register</a>
                    </li> -->
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pesertas.index') }}">Peserta</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ 
route('logout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>