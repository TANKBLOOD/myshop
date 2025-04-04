<div class="amazing py-20">
    <div class="container-fluid">
        <div
            class="header-content mb-4 bg-white shadow-box rounded-3 p-3 d-flex align-items-center justify-content-between flex-wrap">
            <div class="title d-flex align-items-center">
                <img src="/assets/shop-assets/image/square.png" alt="" class="img-fluid">
                <h5 class="font-16 ms-3">اسلایدر<span class="main-color-one-color d-inline-block ms-1">شگفت
                        انگیز</span></h5>
            </div>
            <div class="link">
                <a href="" class="border-animate fromCenter pb-1 fw-bold">
                    مشاهده همه
                    <i class="bi bi-chevron-double-left main-color-one-color"></i>
                </a>
            </div>
        </div>
        <div class="amazing-slider">
            <div class="row">
                <div class="col-lg-8">
                    <div class="amazing-pro-parent">
                        <div class="swiper amazing-slider-slider">
                            <div class="swiper-wrapper">
                                @foreach ($productsWithDiscount as $product)
                                    <div class="swiper-slide">
                                        <div class="slider-item rounded-3 shadow-box bg-white"
                                            style="min-height: 400px;">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="image">
                                                        <img src="/product/image/{{ $product->avatar_image }}"
                                                            loading="lazy" class="img-fluid" alt=""
                                                            style="height: 350px;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="timer">
                                                        <div class='countdown' data-date="2025-01-01" data-time="18:30">
                                                        </div>
                                                    </div>
                                                    <div class="desc mt-3">
                                                        <div class="title">
                                                            <div class="d-flex align-items-center flex-wrap">
                                                                <h3 class="text-overflow-1 font-18 me-2">
                                                                    {{ $product->title }}</h3>
                                                                <span
                                                                    class="discount danger-label mt-sm-0 mt-3">{{ $product->discount }}%
                                                                    تخفیف</span>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="short-desc mt-3">
                                                            <p class="mb-2 text-overflow-3 text-muted">
                                                                برخی از شرکت‌های فعال در زمینه گوشی‌های هوشمند، تا به
                                                                امروز توانسته‌اند گوشی‌های هوشمند انعطاف‌پذیر یا همان
                                                                تاشو را روانه بازار کنند. یکی از این شرکت‌های موفق،
                                                                هوآوی است که P50 Pocket Premium Edition به عنوان یکی از
                                                                جدید‌ترین گوشی‌ خاص این شرکت با صفحه‌نمایشی تاشو معرفی
                                                                شده است. در نمای رو‌به‌رویی این گوشی به صفحه‌نمایش 6.9
                                                                اینچی تاشو مجهز شده است و حتی در حالت تاشو هم هوآوی
                                                                صفحه‌نمایش ثانویه با ابعاد 1.04 اینچی را برای این گوشی
                                                                هوشمند در نظر گرفته است
                                                            </p>
                                                        </div> --}}
                                                    </div>
                                                    <div class="meta">
                                                        <ul class="navbar-nav flex-lg-row justify-content-between">
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">
                                                                    صفحه نمایش 27 اینج </span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">حافظه
                                                                    داخلی یک ترابایت</span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">مخصوص
                                                                    بازی</span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">پردازنده
                                                                    گرافیکی nvidia</span></li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="foot mt-3 d-flex justify-content-between align-items-center flex-wrap">
                                                        <div class="price d-flex align-items-center">
                                                            @if ($product->discount && $product->discount != 0)
                                                                <h6 class="font-25 main-color-one-color">
                                                                    {{ $product->discountedPrice() }}</h6>
                                                                <h6 class="font-12 ms-1">هزار تومان</h6>

                                                                <h6 class="font-13 old-price ms-2">{{ $product->price }}
                                                                </h6>
                                                            @else
                                                                <h6 class="font-25 main-color-one-color">
                                                                    {{ $product->price }}</h6>
                                                                <h6 class="font-12 ms-1">هزار تومان</h6>
                                                            @endif
                                                        </div>
                                                        <div class="link">
                                                            <a href="/product/show/{{ $product->slug }}"
                                                                class="btn border-0 rounded-3 main-color-one-bg">
                                                                <i class="bi bi-basket text-white"></i>
                                                                <span class="text-white">خرید محصول</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination d-lg-none d-block"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-lg-block d-none">
                    <div class="parent">
                        <div class="swiper amazing-slider-link" thumbsSlider="">
                            <div class="swiper-wrapper">
                                @foreach ($productsWithDiscount as $product)
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="row gy-2">
                                                <div class="col-4">
                                                    <div class="image">
                                                        <img src="/product/image/{{ $product->avatar_image }}"
                                                            loading="lazy" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="title">
                                                        <h6 class="font-14 text-overflow-2">{{ $product->title }}</h6>
                                                        <p class="mb-0 text-muted font-12 mt-2 text-overflow-2">
                                                            {{ $product->meta_title }}</p>
                                                    </div>
                                                    <div class="price">
                                                        @if ($product->discount && $product->discount != 0)
                                                            <p class="text-end new-price mb-2 price-off fw-bold"><span
                                                                    class="main-color-one-color">{{ $product->discountedPrice() }}</span> <small
                                                                    class="font-11">تومان</small></p>
                                                            <p class="text-end old-price price-discount">{{ $product->price }}
                                                                <small class="font-11">تومان</small></p>
                                                        @else
                                                        <p class="text-end new-price mb-2 price-off fw-bold"><span
                                                            class="main-color-one-color">{{ $product->price }}</span> <small
                                                            class="font-11">تومان</small></p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
