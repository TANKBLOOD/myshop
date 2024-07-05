<!DOCTYPE html>
<html lang="FA-IR" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالب سانیار</title>
    <link rel="stylesheet" href="/assets/shop-assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="/assets/shop-assets/font/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/shop-assets/plugin/waves/waves.min.css">
    <link rel="stylesheet" href="/assets/shop-assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/shop-assets/plugin/timer/timer.css">
    <link rel="stylesheet" href="/assets/shop-assets/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="/assets/shop-assets/css/style.css">
    <link rel="stylesheet" href="/assets/shop-assets/css/responsive.css">

</head>

<body>


    <!-- start content -->

    <div class="content">
        <div class="container-fluid">
            <div class="vh-100">
                <div class="row gy-2 justify-content-center align-items-center h-100">
                    <div class="col-md-6">
                        <div class="content-box">
                            <div class="container-fluid">
                                <div class="title-panel">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="font-18">فرم عضویت</h6>
                                        <a href="index.html">
                                            <img src="assets/image/logo.png" alt="" class="img-fluid"
                                                width="150">
                                        </a>
                                    </div>
                                </div>
                                <form action="/customer/register" method="POST" id="form-auth">
                                    @csrf
                                    <div class="form-group step-username">
                                        <label for="name" class="form-label font-18">نام</label>
                                        <input type="text" name="name" id="name"
                                            placeholder="لطفا نام خود را وارد کنید" class="form-control py-4" required>

                                        <label for="last_name" class="form-label font-18">نام خانوادگی</label>
                                        <input type="text" name="last_name" id="last_name"
                                            placeholder="لطفا نام خانوادگی خود را وارد کنید" class="form-control py-4"
                                            required>

                                        <label for="phone_number" class="form-label font-18">شماره تلفن</label>
                                        <input type="text" name="phone_number" id="phone_number"
                                            placeholder="شماره تلفن خود را وارد کنید" class="form-control py-4">
                                        <label for="email" class="form-label font-18">ایمیل(اختیاری)</label>
                                        <input type="text" name="email" id="email"
                                            placeholder="ایمیل خود را وارد کنید" class="form-control py-4">
                                    </div>
                                    <div class="form-group step-passwd">
                                        <label for="code" class="form-label font-18">کلمه عبور :</label>
                                        <input type="text" name="verify_code" id="code"
                                            placeholder="کد ارسال شده را وارد کنید" class="form-control py-4" required>
                                    </div>

                                    <div class="form-group step-two py-4">
                                        <a href="sending-code.html" class="main-color-one-color"> ورود با رمز یک بار
                                            مصرف <i class="bi bi-chevron-left font-14 main-color-one-color"></i></a>
                                    </div>

                                    <div class="form-group step-one">
                                        <button type="submit" class="btn border-0 main-color-one-bg w-100 py-3">ثبت نام</button>
                                    </div>

                                    <div class="form-group step-two">
                                        <button type="button"
                                            class="btn border-0 btnForm main-color-one-bg w-100 py-3">تایید</button>
                                    </div>

                                    <div class="form-group text-center">
                                        <a href="/customer/login"
                                            class="text-center main-color-one-color border-animate fromCenter py-2  d-inline-block">قبلا ثبت نام کردی ؟ برو صفحه ورود !</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- این بی آر ها برای ایجاد اسکرول در صفحه هستند که تمام اجزای فرم به بدرستی نمایش داده شود و منوی موبایلی خودش را روی اجزای فرم نیندازد -->
    <br><br><br><br><br><br><br><br>

    <!-- end content -->





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


    <!-- cart canvas -->

    <div class="offcanvas cart-canvas offcanvas-end" tabindex="-1" id="offcanvasCart"
        aria-labelledby="offcanvasCartLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasCartLabel">سبد خرید</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="cart-canvases">
                <div class="item">
                    <div class="row gy-2">
                        <div class="col-4">
                            <div class="image">
                                <img src="assets/image/product/laptop-1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-8">
                            <a href="">
                                <div class="title">
                                    <h6 class="font-14">هدست مخصوص بازی پاب جی</h6>
                                    <p class="mb-0 text-muted font-12 mt-2">مدل Quantom 300</p>
                                </div>
                                <div class="price">
                                    <p class="text-end mb-2 price-off fw-bold">1,750,000 تومان</p>
                                    <p class="text-end price-discount">2,750,000 تومان</p>
                                </div>
                                <div class="action d-flex justify-content-between align-items-center">
                                    <div class="remove bg-light  rounded-3">
                                        <a href="">
                                            <i class="bi bi-x font-25"></i>
                                        </a>
                                    </div>
                                    <div class="counter">
                                        <input type="text" name="count" class="counter" value="1">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="factor">
                        <div class="title">
                            <div class="d-flex align-items-center">
                                <img src="assets/image/shopping-bag.png" class="img-fluid" alt="">
                                <h6 class="font-16">سفارش شما</h6>
                            </div>
                        </div>
                        <div class="d-flex mb-3 align-items-center justify-content-between">
                            <p class="fw-bold mb-0">محصول</p>
                            <p class="fw-bold mb-0">قیمت کل</p>
                        </div>
                        <div
                            class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                            <p class="mb-0">هدست مخصوص بازی پابجی</p>
                            <p class="mb-0">1,750,000 تومان</p>
                        </div>
                        <div
                            class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                            <p class="mb-0">هدست مخصوص بازی پابجی</p>
                            <p class="mb-0">1,750,000 تومان</p>
                        </div>
                        <div
                            class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                            <p class="mb-0 fw-bold">جمع کل:</p>
                            <p class="mb-0">4,000,000 تومان</p>
                        </div>
                        <div class="action mt-3 d-flex align-items-center justify-content-center">
                            <a href="#" class="btn border-0 main-color-two-bg rounded-3">سبد خرید</a>
                            <a href="#" class="btn border-0 main-color-one-bg rounded-3 ms-2">تسویه حساب</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end cart canvas -->

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
        $(document).ready(function() {
            ///disable fild password in load form
            $(".step-passwd").hide();
            ///disable button submit in step one
            $(".step-two").hide();

            ///show filed password in step two form
            $(".step-one").click(function() {

                ///check empty fild username
                if ($(".step-username #username").val() != "") {
                    ///hide username filed
                    $(".step-username").hide();
                    ///show password filed
                    $(".step-passwd").show();
                    ///hide button step one
                    $(this).hide();
                    ///show button submit
                    $(".step-two").show();

                    fetch('/sendVerificationCode', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include the CSRF token for Laravel
                            },
                            body: JSON.stringify({
                                phone: $('#phone_number').val(),
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Verification code sent successfully.');
                            } else {
                                alert('Error: ' + (data.error || 'Unknown error'));
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('An error occurred while sending the verification code.');
                        });
                } else {
                    $(".step-username #username").addClass("border-danger border-2");
                }


                ///check empty fild password

                $(".btnForm").click(function() {
                    if ($(".step-passwd #code").val() != "") {
                        $("#form-auth").submit();
                    } else {
                        $(".step-passwd #passwd").addClass("border-danger border-2");
                    }
                })


            })

        })
    </script>
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



</body>

</html>
