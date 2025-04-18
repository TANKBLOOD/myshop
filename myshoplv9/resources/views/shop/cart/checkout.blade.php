@extends('shop.layout.shop-layout', ['excludePortableCart' => true])

@section('main-content')
    <!-- start breadcroumb -->

    <div class="bread-crumb pt-3">
        <div class="container-fluid">
            <div class="content-box">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb" class="my-lg-0 my-2">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="font-14 text-muted">خانه</a></li>
                            <li class="breadcrumb-item active main-color-one-color font-14" aria-current="page">سبد خرید
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- end breadcroumb -->

    <!-- start content -->

    <div class="content">
        <div class="container-fluid">

            <style>
                .line-step-box.complete:nth-child(1):before {
                    width: 100%;
                }
            </style>

            <div class="line-step-container d-sm-block d-none">
                <div class="line-step">
                    <div class="line-step-boxs">
                        <div class="line-step-box complete">
                            <a href="cart.html">
                                <p>سبد خرید</p>
                                <div class="icon">
                                    1
                                </div>
                            </a>
                        </div>
                        <div class="line-step-box complete">
                            <a href="checkout.html">
                                <p>جزییات پرداخت</p>
                                <div class="icon">
                                    2
                                </div>
                            </a>
                        </div>
                        <div class="line-step-box disabled">
                            <a href="cart.html">
                                <p>تکمیل سفارش</p>
                                <div class="icon">
                                    3
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid">

            <div class="show-discount-modal pointer py-3 mb-3" data-bs-toggle="modal" data-bs-target="#discountModal">
                <i class="bi bi-patch-exclamation main-color-one-color me-1" style="font-size: 40px;"></i>
                کوپن تخفیف دارید برای نوشتن کد اینجا کلیک
                کنید
            </div>

            <div class="check-out-form">
                <div class="row gy-3">
                    <div class="col-lg-8">
                        <div class="content-box position-sticky top-0">
                            <div class="container-fluid">
                                <div class="checkout-forms">
                                    <div class="checkout-form-title">
                                        <h5 class="mb-3">جزییات پرداخت</h5>
                                    </div>
                                    <div class="checkout-form">
                                        <form action="">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="form-label">نام <span
                                                                    class="text-danger ms-1">*</span></label>
                                                            <input type="text" id="name"
                                                                class="form-control rounded-3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lname" class="form-label">نام خانوادگی <span
                                                                    class="text-danger ms-1">*</span></label>
                                                            <input type="text" id="lname"
                                                                class="form-control rounded-3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="ostan" class="form-label">استان <span
                                                                    class="text-danger ms-1">*</span></label>
                                                            <select id="ostan" class="form-select rounded-3">
                                                                <option>تهران</option>
                                                                <option>یزد</option>
                                                                <option>اصفهان</option>
                                                                <option>لرستان</option>
                                                                <option>کردستان</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="city" class="form-label">شهر <span
                                                                    class="text-danger ms-1">*</span></label>
                                                            <select id="city" class="form-select rounded-3">
                                                                <option>کرج</option>
                                                                <option>خرم آباد</option>
                                                                <option>کرمانشاه</option>
                                                                <option>مهاباد</option>
                                                                <option>بروجرد</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="street" class="form-label">خیابان<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input type="text" placeholder="پلاک خانه و نام خیابان" id="street"
                                                    class="form-control rounded-3">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="شماره واحد ، بلوک ، پلاک (دلخواه)"
                                                    id="street" class="form-control rounded-3">
                                            </div>
                                            <div class="form-group">
                                                <label for="tel" class="form-label">تلفن<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input type="text" id="tel" class="form-control rounded-3">
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="form-label">آدرس ایمیل<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input type="text" id="email" class="form-control rounded-3">
                                            </div>
                                            <div class="form-group">
                                                <label for="postal-code" class="form-label">کد پستی<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input type="text" id="postal-code" class="form-control rounded-3">
                                            </div>
                                            <div class="form-group">
                                                <label for="descOrder" class="form-label">یادداشت های سفارش اختیاری<span
                                                        class="text-danger ms-1">*</span></label>
                                                <textarea id="descOrder" rows="5" class="form-control rounded-3"
                                                    placeholder="نکاتی در مورد سفارش به عنوان مثال نکاتی برای تحویل"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-side position-sticky top-0">
                            <div class="cart-canvases mb-4">
                                <div class="item">
                                    <div class="factor">
                                        <div class="title">
                                            <div class="d-flex align-items-end">
                                                <i class="bi bi-calendar2-check-fill me-2 main-color-one-color"></i>
                                                <h6 class="font-16">زمان ارسال</h6>
                                            </div>
                                        </div>

                                        <div class="row gy-3">
                                            <div class="col-4">
                                                <div class="send-item active">
                                                    <h6 class="font-14 text-center">یک شنبه</h6>
                                                    <p class="font-14 text-center mt-1 mb-0 text-muted">4 تیر ماه</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="send-item">
                                                    <h6 class="font-14 text-center">دو شنبه</h6>
                                                    <p class="font-14 text-center mt-1 mb-0 text-muted">6 تیر ماه</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="send-item">
                                                    <h6 class="font-14 text-center">سه شنبه</h6>
                                                    <p class="font-14 text-center mt-1 mb-0 text-muted">7 تیر ماه</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="send-item">
                                                    <h6 class="font-14 text-center">چهار شنبه</h6>
                                                    <p class="font-14 text-center mt-1 mb-0 text-muted">8 تیر ماه</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="send-item">
                                                    <h6 class="font-14 text-center">پنج شنبه</h6>
                                                    <p class="font-14 text-center mt-1 mb-0 text-muted">9 تیر ماه</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="send-item">
                                                    <h6 class="font-14 text-center">شنبه</h6>
                                                    <p class="font-14 text-center mt-1 mb-0 text-muted">15 تیر ماه</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="cart-canvases mb-4">
                                <div class="item">
                                    <div class="factor">
                                        <div class="title">
                                            <div class="d-flex align-items-end">
                                                <i class="bi bi-rocket-fill me-2 main-color-one-color"></i>
                                                <h6 class="font-16">انتخاب شیوه ارسال
                                                </h6>
                                            </div>
                                        </div>

                                        <div class="row gy-2">
                                            <div class="col-12">
                                                <div class="shipping-item">
                                                    <img src="assets/image/post-logo.png" class="img-thumbnail"
                                                        alt="">
                                                    <h6 class="font-14 mx-2">پست معمولی :</h6>
                                                    <p class="mb-0 text-muted">8000 تومان</p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="shipping-item active">
                                                    <img src="assets/image/post-logo.png" class="img-thumbnail"
                                                        alt="">
                                                    <h6 class="font-14 mx-2">پست پیشتاز :</h6>
                                                    <p class="mb-0 text-muted">16000 تومان</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="cart-canvases mb-4">
                                <div class="item">
                                    <div class="factor">
                                        <div class="title">
                                            <div class="d-flex align-items-end">
                                                <i class="bi bi-credit-card-2-front-fill me-2 main-color-one-color"></i>
                                                <h6 class="font-16">انتخاب شیوه پرداخت
                                                </h6>
                                            </div>
                                        </div>

                                        <div class="row gy-2">
                                            <div class="col-12">
                                                <div class="bank-item active">
                                                    <i class="bi bi-credit-card-2-back main-color-one-color"></i>
                                                    <h6 class="font-14 mx-2">انتقال مستقیم بانکی</h6>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bank-item">
                                                    <i class="bi bi-house-fill main-color-one-color"></i>
                                                    <h6 class="font-14 mx-2">پرداخت هنگام دریافت</h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="cart-canvases">
                                <div class="item">
                                    <div class="factor">
                                        <div class="title">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/image/shopping-bag.png" class="img-fluid"
                                                    alt="">
                                                <h6 class="font-16">سفارش شما</h6>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3 align-items-center justify-content-between">
                                            <p class="fw-bold mb-0">محصول</p>
                                            <p class="fw-bold mb-0">قیمت کل</p>
                                        </div>
                                        @foreach ($summary['productsSummary'] as $item)
                                            <div
                                                class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                                                <p class="mb-0">{{$item["name"]}} (x{{$item["count"]}})</p>
                                                <p class="mb-0">{{$item["price"]}} تومان</p>
                                            </div>
                                        @endforeach
                                        <div
                                            class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                                            <p class="mb-0 fw-bold">تخفیف:</p>
                                            <p class="mb-0">{{$summary["totalDiscount"]}} تومان</p>
                                        </div>
                                        <div
                                            class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                                            <p class="mb-0 fw-bold">جمع کل:</p>
                                            <p class="mb-0">{{$summary["totalPrice"]}} تومان</p>
                                        </div>
                                        <div class="action mt-3 d-flex align-items-center justify-content-center">
                                            <a href="#"
                                                class="btn border-0 main-color-two-bg rounded-3 py-2 d-block w-100">پرداخت</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- end content -->
@endsection
