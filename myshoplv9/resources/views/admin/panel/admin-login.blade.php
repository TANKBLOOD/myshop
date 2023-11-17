<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS via CDN -->
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <title>
        Marble shop
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

    <style>
        /* Shabnam - Single @font-face rule for multiple variations */
        @font-face {
            font-family: 'Shabnam';
            src: url('{{ asset('assets/fonts/shabnam/Shabnam-Bold-WOL.eot') }}');
            src: url('{{ asset('assets/fonts/shabnam/Shabnam-Bold-WOL.eot?#iefix') }}') format('embedded-opentype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Bold-WOL.woff2') }}') format('woff2'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Bold-WOL.woff') }}') format('woff'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Bold-WOL.ttf') }}') format('truetype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Light-WOL.eot') }}') format('embedded-opentype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Light-WOL.eot?#iefix') }}') format('embedded-opentype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Light-WOL.woff2') }}') format('woff2'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Light-WOL.woff') }}') format('woff'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Light-WOL.ttf') }}') format('truetype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Medium-WOL.eot') }}') format('embedded-opentype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Medium-WOL.eot?#iefix') }}') format('embedded-opentype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Medium-WOL.woff2') }}') format('woff2'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Medium-WOL.woff') }}') format('woff'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Medium-WOL.ttf') }}') format('truetype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Thin-WOL.eot') }}') format('embedded-opentype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Thin-WOL.eot?#iefix') }}') format('embedded-opentype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Thin-WOL.woff2') }}') format('woff2'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Thin-WOL.woff') }}') format('woff'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-Thin-WOL.ttf') }}') format('truetype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-WOL.eot') }}') format('embedded-opentype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-WOL.eot?#iefix') }}') format('embedded-opentype'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-WOL.woff2') }}') format('woff2'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-WOL.woff') }}') format('woff'),
                url('{{ asset('assets/fonts/shabnam/Shabnam-WOL.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
            unicode-range: U+0600-06FF, U+200C-200F, U+FB50-FDFF, U+FE70-FEFF;
            /* Specify the supported Unicode range */
            font-display: swap;
            /* Use 'swap' to prioritize loading the font for text rendering */
        }
    </style>
    @yield('exclusiveStyles')
</head>

<body class="g-sidenav-show rtl  bg-gray-100" style="font-family: Shabnam;">
    <div class="container mt-10">
        <form action="/admin/login" method="POST">
            @csrf
            <h2>صفحه ورود</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">نام کاربری</label>
                        <input type="text" name="username" class="form-control form-control-alternative"
                            id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="">پسورد</label>
                    <div class="form-group">
                        <input type="text" name="password" placeholder="*******" class="form-control form-control-alternative"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-outline-primary">ورود</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
