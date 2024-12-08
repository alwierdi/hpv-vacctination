<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
<<<<<<< HEAD
    <script src="{{ asset('bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}" defer></script>
    <style>
=======
    <style>
        .navbar {
            background-color: transparent;
            padding: 20px 0;
        }

        .navbar-brand img {
            height: 40px;
        }

        .contact-btn {
            background-color: #FF7F50;
            color: white !important;
            border-radius: 25px;
            padding: 8px 25px;
        }

        .contact-btn:hover {
            background-color: #ffff;
            border: #FF7F50 1px solid;
            color: #FF7F50 !important;
        }

>>>>>>> 1a70ae5 (feat: layout and footer component)
        .hero-section {
            background: linear-gradient(to right, #5EB47C, #007D6E);
            padding: 100px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .curved-line {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 40%;
            height: 100%;
            border: 4px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(20%, 50%);
        }

        .services-section {
<<<<<<< HEAD
            padding: 2rem 0;
=======
            padding: 80px 0;
>>>>>>> 1a70ae5 (feat: layout and footer component)
        }

        .service-card {
            background: linear-gradient(to bottom, #32EBA9 -50%, #000000 150%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            height: 450px;
            width: 550px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-bottom: 20px;
        }
<<<<<<< HEAD
=======

        .footer-bg {
            background: linear-gradient(to right, #5EB47C, #007D6E);
            color: white;
            padding: 80px 0;
        }

        .text-body-secondary {
            color: white !important;
        }
>>>>>>> 1a70ae5 (feat: layout and footer component)
    </style>
    <title>Serices - HPV Vaccination</title>
</head>

<body>

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    <script src="{{ asset('bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}" defer></script>
</body>

</html>
