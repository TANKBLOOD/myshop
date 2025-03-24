@extends('shop.layout.shop-layout')

@section('main-content')
    <!-- start product meta -->

    <div class="product-meta py-20">
        <div class="container-fluid">
            <div class="content-box">
                <div class="container-fluid">
                    <div class="row gy-3">
                        <div class="col-lg-4">
                            <div class="pro_gallery">
                                <div class="icon-product-box">
                                    <div class="icon-product-box-item" data-bs-toggle="modal" data-bs-target="#shareModal"
                                        data-bs-placement="right" title="اشتراک گذاری">
                                        <i class="bi bi-share"></i>
                                    </div>
                                    <div class="icon-product-box-item" data-bs-toggle="tooltip" data-bs-placement="right"
                                        data-bs-title="افزودن به علاقه مندی">
                                        <i class="bi bi-heart"></i>
                                    </div>
                                    <div class="icon-product-box-item" data-bs-toggle="tooltip" data-bs-placement="right"
                                        data-bs-title="مقایسه محصول">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </div>
                                    <div class="icon-product-box-item" data-bs-toggle="modal" data-bs-target="#chartModal"
                                        data-bs-toggle="tooltip" data-bs-placement="right" title="نمودار تغییر قیمت">
                                        <i class="bi bi-bar-chart"></i>
                                    </div>
                                </div>
                                <div class="swiper product-gallery">
                                    <div class="swiper-wrapper" title="برای بزرگنمایی تصویر دابل کلیک کنید">
                                        @foreach ($product->images as $image)
                                            <div class="swiper-slide">
                                                <div class="swiper-zoom-container">
                                                    <img class="img-fluid" src="/product/image/{{ $image }}" />
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-button-next d-none d-lg-flex"></div>
                                    <div class="swiper-button-prev d-none d-lg-flex"></div>
                                    <div class="swiper-pagination d-none d-lg-block"></div>
                                </div>
                                <div thumbsSlider="" class="swiper product-gallery-thumb">
                                    <div class="swiper-wrapper">
                                        @foreach ($product->images as $image)
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="/product/image/{{ $image }}" />
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="product-meta-title">
                                <div class="row align-items-baseline gy-3">
                                    <div class="col-lg-8">
                                        <h5 class="font-16">{{ $product->title }}</h5>
                                        <p class="mb-0 mt-2 text-muted">{{ $product->meta_title }}</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="" class="text-lg-end d-block">
                                            <img src="/assets/shop-assets/image/brand1-1.png" alt=""
                                                class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-meta-feature">
                                <div class="row gy-3">
                                    <div class="col-lg-8">
                                        <div class="product-meta-feature-items">
                                            <h5 class="title font-16 mb-2">ویژگی های کالا</h5>
                                            <ul class="navbar-nav">
                                                <li class="nav item"><span>نوع اتصال:</span><strong>با سیم</strong></li>
                                                <li class="nav item"><span>رابط ها:</span><strong>3.5 میلیمتری</strong>
                                                </li>
                                                <li class="nav item"><span>مقدار رم :</span><strong>8 گیگابایت</strong>
                                                </li>
                                                <li class="nav item"><span>نوع گوشی:</span><strong>دوگوشی</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="product-meta-rating">
                                            <div class="d-flex align-items-center justify-content-lg-end">
                                                <div class="count-comment text-muted">16 دیدگاه</div>
                                                <div class="count-rating">
                                                    <span>(17) 4.5</span>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-meta-garanty justify-content-lg-end justify-content-start">
                                            <i class="bi bi-shield-fill-check"></i>
                                            <span class="text-muted"> گارانتی اصالت و سلامت فیزیکی کالا
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-meta-color">
                                <h5 class="font-16">
                                    انتخاب رنگ کالا
                                </h5>
                                <div class="product-meta-color-items">
                                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off"
                                        checked>
                                    <label class="btn " for="option1">
                                        <span style="background-color: #c00;"></span>
                                        قرمز
                                    </label>

                                    <input type="radio" class="btn-check" name="options" id="option2"
                                        autocomplete="off">
                                    <label class="btn " for="option2">
                                        <span style="background-color: #111;"></span>
                                        مشکی
                                    </label>

                                    <input type="radio" class="btn-check" name="options" id="option3"
                                        autocomplete="off" disabled>
                                    <label class="btn " for="option3">
                                        <span style="background-color: #00cc5f;"></span>
                                        سبز
                                    </label>

                                    <input type="radio" class="btn-check" name="options" id="option4"
                                        autocomplete="off">
                                    <label class="btn " for="option4">
                                        <span style="background-color: #1b69f0;"></span>
                                        آبی
                                    </label>
                                </div>
                            </div>
                            <div class="product-meta-count text-muted">
                                <span>14 عدد در انبار</span>
                            </div>

                            <div class="product-meta-action product" data-product-id="{{ $product->id }}">
                                <div class="row align-items-center gy-3">
                                    @if (isset($product->discount))
                                        <div class="col-lg-3 col-6 w-100-in-400">
                                            <p class="mb-0 old-price font-16 text-lg-end text-center">{{ $product->price }}
                                                تومان</p>
                                        </div>
                                    @endif
                                    <div class="col-lg-3 col-6 w-100-in-400">
                                        <h6 class="font-16 new-price main-color-one-color">
                                            {{ $product->price - ceil(($product->price * $product->discount) / 100) }} تومان
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-6 w-100-in-400">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn w-100 border-0 main-color-three-bg add-to-cart-button"><i
                                                    class="bi bi-basket text-white font-20 me-1"></i>خرید کالا</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6 w-100-in-400">
                                        <div class="counter">
                                            <input type="text" name="count" class="counter" value="1"
                                                id="product-count">
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

    <!-- end product meta -->

    <!-- start product desc -->

    <div class="product-desc py-20">
        <div class="container-fluid">
            <div class="row gy-3">
                <div class="col-lg-9">
                    <div class="content-box">
                        <div class="container-fluid">
                            <div class="product-descs" id="prodesc">
                                <div class="product-desc">
                                    <div class="product-desc-tab">
                                        <ul class="nav" id="productTab" role="tablist">
                                            <li class="nav-item">
                                                <button class="active waves-effect waves-light" id="productDescLess"
                                                    data-bs-toggle="tab" data-bs-target="#productDescLess-pane"
                                                    role="tab" type="button" aria-selected="true"><a
                                                        data-toggle="tab" href="#productDescLess-pane">توضیحات
                                                        کالا</a></button>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <button class=" waves-effect waves-light" id="productDesc"
                                                    data-bs-toggle="tab" data-bs-target="#productDesc-pane"
                                                    role="tab" type="button" aria-selected="true"><a
                                                        data-toggle="tab" href="#productDesc-pane">
                                                        مشخصات کالا</a></button>
                                            </li> --}}
                                            <li class="nav-item">
                                                <button class=" waves-effect waves-light" id="productTable"
                                                    data-bs-toggle="tab" data-bs-target="#productTable-pane"
                                                    role="tab" type="button" aria-selected="false"><a
                                                        data-toggle="tab" href="#productTable-pane">ویژگی ها</a></button>
                                            </li>
                                            <li class="nav-item">
                                                <button class=" waves-effect waves-light" id="productComment"
                                                    data-bs-toggle="tab" data-bs-target="#productComment-pane"
                                                    role="tab" type="button" aria-selected="false"><a
                                                        data-toggle="tab" href="#productComment-pane">نظرات</a></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-desc-tab-content">
                                        <div class="tab-content" id="productTabContent">
                                            <div class="tab-pane fade show active product-desc-less-contents"
                                                id="productDescLess-pane">
                                                <div class="product-desc-content">
                                                    <input type="checkbox" class="read-more-state" id="readMore3" />
                                                    <!-- والد بیشتر ، کمتر ، تمام متن توضیحات باید داخل این تگ قرار بگیرند -->
                                                    <div class="read-more-wrap">
                                                        <h6 class="font-22 mb-2">معرفی محصول</h6>

                                                        <div class="row gy-3 p-4">
                                                            {!! $product->content !!}
                                                        </div>

                                                        <!-- متن بیشتر -->
                                                        {{-- <div class="read-more-target">
                                                            <p>
                                                                و این ویژگی، آن را برای مکالمه مناسب می‌سازد. از ویژگی‌های
                                                                اصلی این محصول محفظه نگهدارنده یا همان کیس آن است. این کیس
                                                                قابلیت شارژ هدفون را دارد. برای شارژ آن کافی است از درگاه
                                                                USB-C تعبیه شده بر روی کیس و کابل شارژ درون بسته‌بندی
                                                                استفاده کنید. گفتنی است باتری 400 میلی‌آمپر ساعتی این هدفون
                                                                در حدود 4-6 ساعت مکالمه و 4-6 ساعت پخش موسیقی را پاسخ‌گو
                                                                خواهد بود.
                                                            </p>
                                                        </div> --}}
                                                        <!-- پایان متن بیشتر -->
                                                    </div>
                                                    <!-- پایان والد بیشتر کمتر -->
                                                    {{-- <label for="readMore3" class="read-more-trigger"></label> --}}
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="productTable-pane">
                                                <div class="tab-pane fade active show" id="productTable-pane"
                                                    role="tabpanel" aria-labelledby="#productTable">
                                                    <h6 class="font-26 mb-2">مشخصات فنی</h6>
                                                    <div class="box_list mt-4">
                                                        <p class="title"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z">
                                                                </path>
                                                            </svg>مشخصات کلی</p>
                                                        <section>
                                                            <ul class="param_list list-inline">
                                                                <div class="container-fluid">
                                                                    @foreach (json_decode($product->product_specifications) as $key => $value)
                                                                        <div class="row ps-md-2">
                                                                            <li
                                                                                class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
                                                                                <div class="box_params_list">
                                                                                    <p class="block border_right_custom1">
                                                                                        {{ $value->title }}
                                                                                    </p>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-inline-item col-md-8 p-0 m-0">
                                                                                <div class="box_params_list">
                                                                                    <p class="block border_right_custom2">
                                                                                        {{ $value->value }}
                                                                                    </p>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </ul>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade product-comment-content" id="productComment-pane">

                                                <div class="comment-form">
                                                    <h6 class="font-26 mb-2">نظرت در مورد این محصول چیه؟</h6>
                                                    <p class="font-14 text-muted mt-2">برای ثبت نظر، از طریق دکمه افزودن
                                                        دیدگاه جدید
                                                        نمایید. اگر این محصول را قبلا خریده باشید، نظر شما به عنوان خریدار
                                                        ثبت خواهد
                                                        شد.</p>
                                                    <div class="row gy-4">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="comment-item mb-3">
                                                                        <input type="email" class="form-control"
                                                                            id="floatingInputEmail">
                                                                        <label for="floatingInputEmail"
                                                                            class="form-label label-float">ایمیل خود را
                                                                            وارد
                                                                            کنید</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="comment-item mb-3">
                                                                        <input type="text" class="form-control"
                                                                            id="floatingInputName">
                                                                        <label for="floatingInputName"
                                                                            class="form-label label-float">نام خود را وارد
                                                                            کنید</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div
                                                                        class="comment-item d-flex align-items-center mb-3">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="rememberComment">
                                                                        <label for="rememberComment"
                                                                            class="form-check-label d-block">
                                                                            ذخیره
                                                                            نام، ایمیل و وبسایت من در مرورگر برای زمانی که
                                                                            دوباره
                                                                            دیدگاهی می‌نویسم.
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group mt-3">
                                                                        <label for="commentRating" class="">امتیاز
                                                                            شما</label>
                                                                        <fieldset class="rating">
                                                                            <input type="radio" id="star5"
                                                                                name="rating" value="5" required />
                                                                            <label for="star5">5 stars</label>
                                                                            <input type="radio" id="star4"
                                                                                name="rating" value="4" required />
                                                                            <label for="star4">4 stars</label>
                                                                            <input type="radio" id="star3"
                                                                                name="rating" value="3" required />
                                                                            <label for="star3">3 stars</label>
                                                                            <input type="radio" id="star2"
                                                                                name="rating" value="2" required />
                                                                            <label for="star2">2 stars</label>
                                                                            <input type="radio" id="star1"
                                                                                name="rating" value="1" required />
                                                                            <label for="star1">1 star</label>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="comment-item my-3">
                                                                        <textarea class="form-control" id="floatingTextarea2" style="height: 150px"></textarea>
                                                                        <label for="floatingTextarea2"
                                                                            class="form-label label-float">متن نظر!</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group mt-3">
                                                                        <label for="tags-pos"
                                                                            class="text-success mb-2">نقاط
                                                                            قوت</label>
                                                                        <input name="tags-pos" id="tags-pos"
                                                                            class="commentTags tag-pos form-control"
                                                                            placeholder="با کلید اینتر اضافه کنید">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group mt-3">
                                                                        <label for="tags-neg"
                                                                            class="text-danger mb-2">نقاط
                                                                            ضعف</label>
                                                                        <input name="tags-neg" id="tags-neg"
                                                                            class="commentTags tag-neg form-control"
                                                                            placeholder="با کلید اینتر اضافه کنید">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <a href=""
                                                                        class="btn btn-comment border-0 main-color-one-bg my-3 mx-auto btn-lg waves-effect waves-light">ثبت
                                                                        نظر</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment bg-light shadow-inner mb-4">
                                                    <div class="title">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-10">
                                                                <div class="d-flex align-items-center">
                                                                    <div
                                                                        class="avatar p-2 bg-white shadow-box rounded-circle">
                                                                        <img src="/assets/shop-assets/image/user.png"
                                                                            alt=""
                                                                            class="img-fluid rounded-circle">
                                                                    </div>
                                                                    <div class="d-flex flex-wrap align-items-center ms-2">
                                                                        <h6 class="text-muted font-14">امیر رضایی</h6>
                                                                        <h6 class="text-muted font-14 ms-2">1 دی ماه 1401
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="d-flex star justify-content-end">
                                                                    <i class="bi bi-star"></i>
                                                                    <i class="bi bi-star-fill"></i>
                                                                    <i class="bi bi-star-fill"></i>
                                                                    <i class="bi bi-star-fill"></i>
                                                                    <i class="bi bi-star-fill"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc py-3">
                                                        <p class="font-14 text-muted">
                                                            بنده این گوشی را خریداری کردم و کاملا راضی هشتم و بهترین گارانتی
                                                            را دارد
                                                            و پلپ بود و حتما به شما هم پیشنهاد می نمایم که چنانچه قصد خرید
                                                            این کالا
                                                            را دارید از دیجی کالا تهیه نمایید ؛پارت نامبر من هم سنگاپور بود
                                                            که
                                                            بهترین پارت نامبر در بازار است و هیچ محدودیتی ندارد.
                                                        </p>
                                                    </div>
                                                    <div class="foot">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-8">
                                                                <div class="comment-rates">
                                                                    <div class="positive rounded-4">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-start">
                                                                            <h6 class="font-14 me-3">نقاط قوت</h6>
                                                                            <nav class="navbar flex-column positive-nav">
                                                                                <ul class="navbar-nav flex-wrap">
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">جنس
                                                                                            بدنه</span>
                                                                                    </li>
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">کیفیت
                                                                                            تصویر</span></li>
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">شارژ
                                                                                            باطری</span></li>
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">دوربین
                                                                                            قوی</span></li>
                                                                                </ul>
                                                                            </nav>
                                                                        </div>
                                                                    </div>
                                                                    <div class="negitive rounded-4 mt-3">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-start">
                                                                            <h6 class="font-14 me-3">نقاط ضعف</h6>
                                                                            <nav class="navbar flex-column negitive-nav">
                                                                                <ul class="navbar-nav flex-wrap">
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">جنس
                                                                                            بدنه</span>
                                                                                    </li>
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">کیفیت
                                                                                            تصویر</span></li>
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">شارژ
                                                                                            باطری</span></li>
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">دوربین
                                                                                            قوی</span></li>
                                                                                </ul>
                                                                            </nav>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="comment-reply">
                                                                    <a href=""
                                                                        class="btn btn-sm rounded-pill main-color-two-bg px-4">پاسخ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment bg-light shadow-inner mb-4">
                                                    <div class="title">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-10">
                                                                <div class="d-flex align-items-center">
                                                                    <div
                                                                        class="avatar p-2 bg-white shadow-box rounded-circle">
                                                                        <img src="/assets/shop-assets/image/user.png"
                                                                            alt=""
                                                                            class="img-fluid rounded-circle">
                                                                    </div>
                                                                    <div class="d-flex flex-wrap align-items-center ms-2">
                                                                        <h6 class="text-muted font-14">امیر رضایی</h6>
                                                                        <h6 class="text-muted font-14 ms-2">1 دی ماه 1401
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="d-flex star justify-content-end">
                                                                    <i class="bi bi-star"></i>
                                                                    <i class="bi bi-star-fill"></i>
                                                                    <i class="bi bi-star-fill"></i>
                                                                    <i class="bi bi-star-fill"></i>
                                                                    <i class="bi bi-star-fill"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="desc py-3">
                                                        <p class="font-14 text-muted">
                                                            بنده این گوشی را خریداری کردم و کاملا راضی هشتم و بهترین گارانتی
                                                            را دارد
                                                            و پلپ بود و حتما به شما هم پیشنهاد می نمایم که چنانچه قصد خرید
                                                            این کالا
                                                            را دارید از دیجی کالا تهیه نمایید ؛پارت نامبر من هم سنگاپور بود
                                                            که
                                                            بهترین پارت نامبر در بازار است و هیچ محدودیتی ندارد.
                                                        </p>
                                                    </div>
                                                    <div class="foot">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-8">
                                                                <div class="comment-rates">
                                                                    <div class="positive rounded-4">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-start">
                                                                            <h6 class="font-14 me-3">نقاط قوت</h6>
                                                                            <nav class="navbar flex-column positive-nav">
                                                                                <ul class="navbar-nav flex-wrap">
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">جنس
                                                                                            بدنه</span>
                                                                                    </li>
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">کیفیت
                                                                                            تصویر</span></li>
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">شارژ
                                                                                            باطری</span></li>
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">دوربین
                                                                                            قوی</span></li>
                                                                                </ul>
                                                                            </nav>
                                                                        </div>
                                                                    </div>
                                                                    <div class="negitive rounded-4 mt-3">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-start">
                                                                            <h6 class="font-14 me-3">نقاط ضعف</h6>
                                                                            <nav class="navbar navbar-expand negitive-nav">
                                                                                <ul
                                                                                    class="navbar-nav flex-column flex-wrap">
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">جنس
                                                                                            بدنه</span>
                                                                                    </li>
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">کیفیت
                                                                                            تصویر</span></li>
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">شارژ
                                                                                            باطری</span></li>
                                                                                    <li class="nav-item"><span
                                                                                            class="nav-link font-14">دوربین
                                                                                            قوی</span></li>
                                                                                </ul>
                                                                            </nav>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="comment-reply">
                                                                    <a href=""
                                                                        class="btn btn-sm rounded-pill main-color-two-bg px-4">پاسخ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment comment-replay shadow-inner mb-4">
                                                            <div class="title">
                                                                <div class="row align-items-center">
                                                                    <div class="col-sm-10">
                                                                        <div class="d-flex align-items-center">
                                                                            <div
                                                                                class="avatar p-2 bg-white shadow-box rounded-circle">
                                                                                <img src="/assets/shop-assets/image/user.png"
                                                                                    alt=""
                                                                                    class="img-fluid rounded-circle">
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-wrap align-items-center ms-2">
                                                                                <h6 class="text-muted font-14">امیر رضایی
                                                                                </h6>
                                                                                <h6 class="text-muted font-14 ms-2">1 دی
                                                                                    ماه
                                                                                    1401
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="d-flex star justify-content-end">
                                                                            <i class="bi bi-star"></i>
                                                                            <i class="bi bi-star-fill"></i>
                                                                            <i class="bi bi-star-fill"></i>
                                                                            <i class="bi bi-star-fill"></i>
                                                                            <i class="bi bi-star-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="desc py-3">
                                                                <p class="font-14 text-muted">
                                                                    بنده این گوشی را خریداری کردم و کاملا راضی هشتم و بهترین
                                                                    گارانتی
                                                                    را دارد
                                                                    و پلپ بود و حتما به شما هم پیشنهاد می نمایم که چنانچه
                                                                    قصد خرید
                                                                    این کالا
                                                                    را دارید از دیجی کالا تهیه نمایید ؛پارت نامبر من هم
                                                                    سنگاپور بود
                                                                    که
                                                                    بهترین پارت نامبر در بازار است و هیچ محدودیتی ندارد.
                                                                </p>
                                                            </div>
                                                            <div class="foot">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-8">
                                                                        <div class="comment-rates">
                                                                            <div class="positive rounded-4">
                                                                                <div
                                                                                    class="d-flex align-items-center justify-content-start">
                                                                                    <h6 class="font-14 me-3">نقاط قوت</h6>
                                                                                    <nav
                                                                                        class="navbar flex-column positive-nav">
                                                                                        <ul class="navbar-nav flex-wrap">
                                                                                            <li class="nav-item"><span
                                                                                                    class="nav-link font-14">جنس
                                                                                                    بدنه</span>
                                                                                            </li>
                                                                                            <li class="nav-item"><span
                                                                                                    class="nav-link font-14">کیفیت
                                                                                                    تصویر</span></li>
                                                                                            <li class="nav-item"><span
                                                                                                    class="nav-link font-14">شارژ
                                                                                                    باطری</span></li>
                                                                                            <li class="nav-item"><span
                                                                                                    class="nav-link font-14">دوربین
                                                                                                    قوی</span></li>
                                                                                        </ul>
                                                                                    </nav>
                                                                                </div>
                                                                            </div>
                                                                            <div class="negitive rounded-4 mt-3">
                                                                                <div
                                                                                    class="d-flex align-items-center justify-content-start">
                                                                                    <h6 class="font-14 me-3">نقاط ضعف</h6>
                                                                                    <nav
                                                                                        class="navbar navbar-expand negitive-nav">
                                                                                        <ul
                                                                                            class="navbar-nav flex-column flex-wrap">
                                                                                            <li class="nav-item"><span
                                                                                                    class="nav-link font-14">جنس
                                                                                                    بدنه</span>
                                                                                            </li>
                                                                                            <li class="nav-item"><span
                                                                                                    class="nav-link font-14">کیفیت
                                                                                                    تصویر</span></li>
                                                                                            <li class="nav-item"><span
                                                                                                    class="nav-link font-14">شارژ
                                                                                                    باطری</span></li>
                                                                                            <li class="nav-item"><span
                                                                                                    class="nav-link font-14">دوربین
                                                                                                    قوی</span></li>
                                                                                        </ul>
                                                                                    </nav>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="comment-reply">
                                                                            <a href=""
                                                                                class="btn btn-sm rounded-pill main-color-two-bg px-4">پاسخ</a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-lg-block d-none position-relative">
                    <div class="content-box top-0 position-sticky">
                        <div class="container-fluid">
                            <div class="product-float">
                                <div class="product-float-title">
                                    <div class="row align-items-center gy-2">
                                        <div class="col-4">
                                            <div class="image">
                                                <img src="/assets/shop-assets/image/product/laptop-1.jpg" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <a href="">
                                                <div class="title">
                                                    <h6 class="font-14">ساعت هوشمند سامسونگ مدل Galaxy Watch3 SM-R840 45mm
                                                        بند چرمی
                                                    </h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-meta-color-items">
                                    <input type="radio" class="btn-check" name="options" id="option11"
                                        autocomplete="off">
                                    <label class="btn " for="option11">
                                        <span style="background-color: #c00;"></span>
                                        قرمز
                                    </label>

                                    <input type="radio" class="btn-check" name="options" id="option21"
                                        autocomplete="off">
                                    <label class="btn " for="option21">
                                        <span style="background-color: #111;"></span>
                                        مشکی
                                    </label>

                                    <input type="radio" class="btn-check" name="options" id="option31"
                                        autocomplete="off" disabled>
                                    <label class="btn " for="option31">
                                        <span style="background-color: #00cc5f;"></span>
                                        سبز
                                    </label>

                                    <input type="radio" class="btn-check" name="options" id="option41"
                                        autocomplete="off">
                                    <label class="btn " for="option41">
                                        <span style="background-color: #1b69f0;"></span>
                                        آبی
                                    </label>
                                </div>
                                <div class="product-float-brand my-3">
                                    <a href="" class="d-inline">
                                        <img src="/assets/shop-assets/image/brand1-1.png" alt=""
                                            class="img-fluid">
                                        <p class="mb-0 mr-2 d-inline">شیائومی</p>
                                    </a>
                                </div>
                                <div class="product-meta-rating">
                                    <div class="d-flex align-items-center">
                                        <div class="count-comment text-muted">16 دیدگاه</div>
                                        <div class="count-rating">
                                            <span>(17) 4.5</span>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-meta-garanty justify-content-start">
                                    <i class="bi bi-shield-fill-check"></i>
                                    <span class="text-muted"> گارانتی اصالت و سلامت فیزیکی کالا
                                    </span>
                                </div>
                                <div class="product-float-price product-meta-action p-0 bg-transparent shadow-none">
                                    <div class="row gy-3">
                                        <div class="col-6 w-100-in-400">
                                            <p class="mb-0 old-price font-16 text-start">1,500,000 تومان</p>
                                        </div>
                                        <div class="col-6 w-100-in-400">
                                            <h6 class="font-16 new-price main-color-one-color">1,200,000 تومان</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-float-action product-meta-action p-0 bg-transparent shadow-none">
                                    <div class="row gy-3">
                                        <div class="col-12 w-100-in-400">
                                            <div class="counter">
                                                <input type="text" name="count" class="counter" value="1"
                                                    id="product-count">
                                            </div>
                                        </div>
                                        <div class="col-12 w-100-in-400">
                                            <div class="d-flex justify-content-center">
                                                <a href="" class="btn border-0 main-color-three-bg w-100"><i
                                                        class="bi bi-basket text-white font-20 me-1"></i>خرید کالا</a>
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
    </div>

    <!-- end product desc -->


    <!-- modal shahre -->
    <div class="share-modal">
        <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">اشتراک گذاری</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="font-14 my-3">این کالا را با دوستان خود به اشتراک بگذارید!</h4>
                        <button type="button" class="btn d-block text-center main-color-one-bg w-100" id="liveToastBtn">
                            <i class="bi bi-clipboard text-white me-1"></i>
                            کپی کردن لینک</button>
                        <div class="row mt-3 gy-3">
                            <div class="col-3">
                                <a href="" class="btn rounded-circle"
                                    style="background-color: #11c56b !important;">
                                    <i class="bi bi-whatsapp font-20"></i>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="btn rounded-circle"
                                    style="background-color: #137dcf !important;">
                                    <i class="bi bi-twitter font-20"></i>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="btn rounded-circle"
                                    style="background-color: #07528b !important;">
                                    <i class="bi bi-facebook font-20"></i>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="btn rounded-circle"
                                    style="background-color: #ed3a0d !important;">
                                    <i class="bi bi-pinterest font-20"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--end modal share-->

    <!-- chart modal -->
    <div class="modal fade" id="chartModal" tabindex="-1" aria-labelledby="chartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-comment-title">
                        <h5 class="modal-title fw-bold text-muted-2">نمودار قیمت فروش
                        </h5>
                        <p class="text-muted mt-1 font-14">گوشی موبایل اپل مدل iPhone 11 تک سیم‌ کارت ظرفیت 128 گیگابایت
                            و رم 4 گیگابایت - هند
                        </p>
                    </div>
                    <button type="button" class="btn-close waves-effect waves-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn main-color-one-bg waves-effect waves-light"
                        data-bs-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end chart modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ///شمارنده محصول برای اضافه کردن به سبد خرید
            $("input[name='count']").TouchSpin({
                min: 0,
                max: '1000000000000000',
                buttondown_class: "btn-counter waves-effect waves-light",
                buttonup_class: "btn-counter waves-effect waves-light"
            });
            const getProductCountInUserCart= ()=> {
                // Get the product ID from the parent element's data attribute
                const productId = "{{ $product->id }}";

                // Send a POST request to the server
                fetch(`/api/user/cart/productCount?product_id=${productId}`, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data);
                        // Handle the response data
                        $("#product-count").val(data.productCount);
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }
            getProductCountInUserCart();
            const addItemToCart = () => {
                // Get the product ID from the parent element's data attribute
                const productId = "{{ $product->id }}";

                // Define the data to be sent in the request body
                const data = {
                    productId: productId
                };

                // Send a POST request to the server
                fetch('/api/user/cart/add', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data);
                        // Handle the response data
                        // alert(`Item added to cart with ID: ${data.itemId}`);
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }

            const removeItemFromCart = () => {
                // Get the product ID from the parent element's data attribute
                const productId = "{{ $product->id }}";

                // Define the data to be sent in the request body
                const data = {
                    productId: productId
                };

                // Send a POST request to the server
                fetch('/api/user/cart/remove', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data);
                        // Handle the response data
                        // alert(`Item removed from cart with ID: ${data.itemId}`);
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }
            // Add event listeners to all add-to-cart buttons
            const addToCartButtons = document.querySelectorAll('.add-to-cart-button');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    addItemToCart();
                });
            });

            var previousItemCount = $("#product-count").val();

            // Handle value change event
            $("input[name='count']").on('change', function() {
                var currentValue = $(this).val(); // Get the current value

                if (currentValue > previousItemCount) {
                    addItemToCart(); // Call function to handle increase
                } else if (currentValue < previousItemCount) {
                    removeItemFromCart(); // Call function to handle decrease
                }

                previousItemCount = currentValue; // Update the previous value
            });
        });
    </script>
@endsection
