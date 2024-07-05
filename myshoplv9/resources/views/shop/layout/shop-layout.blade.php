<!DOCTYPE html>
<html lang="FA-IR" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>هایپر ابزار ساختمان و تجهیزات ماربل</title>
    <link rel="stylesheet" href="/assets/shop-assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="/assets/shop-assets/font/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/shop-assets/plugin/waves/waves.min.css">
    <link rel="stylesheet" href="/assets/shop-assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/shop-assets/plugin/timer/timer.css">
    <link rel="stylesheet" href="/assets/shop-assets/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="/assets/shop-assets/css/style.css">
    <link rel="stylesheet" href="/assets/shop-assets/css/responsive.css">

    <!-- ======== tagify -->
    <link rel="stylesheet" href="/assets/shop-assets/plugin/tagify/tagify.css">
    <!-- ======== end tagify -->

    <link rel="shortcut icon" href="{{asset('assets/img/mainlogo.png')}}" type="image/x-icon">

    @yield('exclusive-styles')

</head>

<body>
    @include('shop.layout.shop-header')
    @include('shop.layout.shop-mega-menu')
    {{-- @include('shop.layout.shop-breadcroumb') --}}
    @yield('main-content')
    {{-- @include('shop.layout.shop-similar-products') --}}
    @include('shop.layout.shop-footer')
    <!-- mobile menu -->

    <div class="mobile-footer d-lg-none d-flex">
        <div class="parent">
            <div class="item" onclick="topFunction()">
                <i class="bi bi-chevron-up font-20"></i>
            </div>
            <div class="item">
                <a href="index.html">
                    <i class="bi bi-house font-20"></i>
                </a>
            </div>
            <div class="item item-float">
                <a href="#offcanvasCart" data-bs-toggle="offcanvas" href="#offcanvasCart" role="button"
                    aria-controls="offcanvasCart">
                    <i class="bi bi-bag font-20"></i>
                </a>
            </div>
            <div class="item">
                <a href="index.html">
                    <i class="bi bi-archive"></i>
                </a>
            </div>
            <div class="item">
                <a href="index.html">
                    <i class="bi bi-person"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- end mobile menu -->

    <div class="float-btn">
        <div class="container-fluid">
            <!-- go top top -->
            <div class="progress-wrap d-lg-block d-none">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                </svg>
            </div>
            <!-- end go top top -->

            <!-- contact us floating -->
            <div id="btncollapzion" class=" btn_collapzion"></div>
            <div class="" id="contactOverlay"></div>
            <!-- end contact us floating -->
        </div>
    </div>

    @if (!isset($excludePortableCart))
        @include('shop.layout.shop-cart-canvas')
    @elseif (isset($excludePortableCart) && $excludePortableCart == false)
        @include('shop.layout.shop-cart-canvas')
    @endif

    <script src="/assets/shop-assets/js/jquery.min.js"></script>
    <script src="/assets/shop-assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/shop-assets/plugin/waves/waves.min.js"></script>
    <script src="/assets/shop-assets/plugin/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/shop-assets/plugin/timer/timer.js"></script>
    <script src="/assets/shop-assets/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="/assets/shop-assets/js/app.js"></script>
    <script src="/assets/shop-assets/js/jquery-app.js"></script>

    <!-- ===== start new update -->
    <script src="/assets/shop-assets/plugin/go-to-top/script.js"></script>
    <script src="/assets/shop-assets/plugin/rasta-contact/script.js"></script>

    <link rel="stylesheet" href="/assets/shop-assets/plugin/go-to-top/style.css">
    <link rel="stylesheet" href="/assets/shop-assets/plugin/rasta-contact/style.css">

    <script>
        //// config floating contact
        $('#btncollapzion').Collapzion({
            _child_attribute: [{
                    'label': 'پشتیبانی تلفنی',
                    'url': 'tel:0930555555555',
                    'icon': 'bi bi-telephone'
                },
                {
                    'label': 'پشتیبانی تلگرام',
                    'url': 'https://tlgrm.me',
                    'icon': 'bi bi-telegram'
                },
                {
                    'label': 'پشتیبانی واتس آپ',
                    'url': 'https://wa.me/444444444',
                    'icon': 'bi-whatsapp'
                },

            ],
        });
    </script>
    <!-- ===== end new update -->

    <!-- ======== tagify -->
    <script src="/assets/shop-assets/plugin/tagify/jQuery.tagify.min.js"></script>
    <script>
        $(document).ready(function() {
            ///input tag
            $('.commentTags').tagify();
        });
    </script>

    <!-- ======== end tagify -->

    <!-- chart -->
    <script src="/assets/shop-assets/plugin/chartjs/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');
        Chart.defaults.font.family = "main-font";
        Chart.defaults.font.size = 14;


        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['23 مهر 1401', '11 آبان 1401', '4 آذر 1401', '11 دی 1401', '5 بهمن 1401',
                    '19 اسفند 1401'
                ],
                datasets: [{
                    label: 'iphone 12 promax 256',
                    data: [1500000, 1700000, 1900000, 1400000, 1600000, 3200000],
                    borderWidth: 4,
                    borderColor: '#1c39bb',
                    pointBackgroundColor: '#eee',
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    tension: 0.1,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: false,
                        text: (ctx) => 'نمودار فروش محصول: ' + 'ایفون 12 pro max',
                    },
                }
            }
        });
    </script>
    <!-- end chart -->

    @yield('exclusive-scripts')
</body>

</html>
