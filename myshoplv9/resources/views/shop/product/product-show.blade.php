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
                                        <div class="swiper-slide">
                                            <div class="swiper-zoom-container">
                                                <img class="img-fluid" src="/assets/shop-assets/image/product/laptop-1.jpg" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-zoom-container">
                                                <img class="img-fluid" src="/assets/shop-assets/image/product/laptop-2.jpg" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-zoom-container">
                                                <img class="img-fluid" src="/assets/shop-assets/image/product/laptop-3.jpg" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-zoom-container">
                                                <img class="img-fluid" src="/assets/shop-assets/image/product/laptop-4.jpg" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-zoom-container">
                                                <img class="img-fluid" src="/assets/shop-assets/image/product/laptop-5.jpg" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-zoom-container">
                                                <img class="img-fluid" src="/assets/shop-assets/image/product/laptop2.jpg" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next d-none d-lg-flex"></div>
                                    <div class="swiper-button-prev d-none d-lg-flex"></div>
                                    <div class="swiper-pagination d-none d-lg-block"></div>
                                </div>
                                <div thumbsSlider="" class="swiper product-gallery-thumb">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/assets/shop-assets/image/product/laptop-1.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/assets/shop-assets/image/product/laptop-2.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/assets/shop-assets/image/product/laptop-3.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/assets/shop-assets/image/product/laptop-4.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/assets/shop-assets/image/product/laptop-5.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/assets/shop-assets/image/product/laptop-2.jpg" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="product-meta-title">
                                <div class="row align-items-baseline gy-3">
                                    <div class="col-lg-8">
                                        <h5 class="font-16">
                                            ساعت هوشمند سامسونگ مدل Galaxy Watch3 SM-R840 45mm بند چرمی
                                        </h5>
                                        <p class="mb-0 mt-2 text-muted">Samsung smart watch model Galaxy Watch3 SM-R840 45mm
                                            leather strap</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="" class="text-lg-end d-block">
                                            <img src="/assets/shop-assets/image/brand1-1.png" alt="" class="img-fluid">
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
                                    <input type="radio" class="btn-check" name="options" id="option1"
                                        autocomplete="off" checked>
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
                            <div class="product-meta-action">
                                <div class="row align-items-center gy-3">
                                    <div class="col-lg-3 col-6 w-100-in-400">
                                        <p class="mb-0 old-price font-16 text-lg-end text-center">1,500,000 تومان</p>
                                    </div>
                                    <div class="col-lg-3 col-6 w-100-in-400">
                                        <h6 class="font-16 new-price main-color-one-color">1,200,000 تومان</h6>
                                    </div>
                                    <div class="col-lg-3 col-6 w-100-in-400">
                                        <div class="d-flex justify-content-center">
                                            <a href="" class="btn w-100 border-0 main-color-three-bg"><i
                                                    class="bi bi-basket text-white font-20 me-1"></i>خرید کالا</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6 w-100-in-400">
                                        <div class="counter">
                                            <input type="text" name="count" class="counter" value="1">
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
                                            <li class="nav-item">
                                                <button class=" waves-effect waves-light" id="productDesc"
                                                    data-bs-toggle="tab" data-bs-target="#productDesc-pane"
                                                    role="tab" type="button" aria-selected="true"><a
                                                        data-toggle="tab" href="#productDesc-pane">
                                                        مشخصات کالا</a></button>
                                            </li>
                                            <li class="nav-item">
                                                <button class=" waves-effect waves-light" id="productTable"
                                                    data-bs-toggle="tab" data-bs-target="#productTable-pane"
                                                    role="tab" type="button" aria-selected="false"><a
                                                        data-toggle="tab" href="#productTable-pane"> توضیحات
                                                        تکمیلی</a></button>
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

                                                        <div class="row gy-3">
                                                            <div class="col-lg-6">
                                                                <p>
                                                                    اگر به دنبال تهیه یک هدفون بی‌سیم گیمینگ هستید، هدفون
                                                                    بلوتوثی مدل K55
                                                                    به‌عنوان
                                                                    یکی از جدیدترین گزینه‌های موجود در بازار ارزش بررسی را
                                                                    دارد. این مدل با
                                                                    ابعادی
                                                                    کوچک تولید شده است. ابعاد و وزن کم آن، جابه‌جایی این
                                                                    وسیله و استفاده
                                                                    طولانی‌مدت
                                                                    از آن را آسان می‌کند و باعث خستگی گوش‌ها نخواهد شد. این
                                                                    مدل برای اتصال
                                                                    به
                                                                    دستگاه‌ به بلوتوث نسخه 5.0 مجهز شده است و در مدت زمان
                                                                    اندکی، اتصال با
                                                                    گوشی
                                                                    موبایل اندروید یا ios شما برقرار خواهد شد. هدفون بی سیم
                                                                    K55 دارای یک
                                                                    میکروفون با
                                                                    کیفیت است و ...
                                                                </p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="video">
                                                                    <video id="aboutVideo" class="img-fluid vd-style" loop
                                                                        preload="none"
                                                                        poster="/assets/shop-assets/image/product/laptop-1.jpg">
                                                                        <source src="/assets/shop-assets/video/video.mp4"
                                                                            type="video/mp4">
                                                                    </video>
                                                                    <div class="play-btn pointer active">
                                                                        <div class="play">
                                                                            <i class="bi bi-play-fill" id="play-icon"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- متن بیشتر -->
                                                        <div class="read-more-target">
                                                            <p>
                                                                و این ویژگی، آن را برای مکالمه مناسب می‌سازد. از ویژگی‌های
                                                                اصلی این محصول محفظه نگهدارنده یا همان کیس آن است. این کیس
                                                                قابلیت شارژ هدفون را دارد. برای شارژ آن کافی است از درگاه
                                                                USB-C تعبیه شده بر روی کیس و کابل شارژ درون بسته‌بندی
                                                                استفاده کنید. گفتنی است باتری 400 میلی‌آمپر ساعتی این هدفون
                                                                در حدود 4-6 ساعت مکالمه و 4-6 ساعت پخش موسیقی را پاسخ‌گو
                                                                خواهد بود.
                                                            </p>
                                                        </div>
                                                        <!-- پایان متن بیشتر -->
                                                    </div>
                                                    <!-- پایان والد بیشتر کمتر -->
                                                    <label for="readMore3" class="read-more-trigger"></label>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade product-desc-contents" id="productDesc-pane">
                                                <div class="product-desc-content">
                                                    <input type="checkbox" class="read-more-state" id="readMore2" />
                                                    <!-- والد بیشتر ، کمتر ، تمام متن توضیحات باید داخل این تگ قرار بگیرند -->
                                                    <div class="read-more-wrap">
                                                        <h6 class="font-26 mb-2">طراحی و کیفیت ساخت گوشی شیائومی ردمی 9A
                                                        </h6>
                                                        <p>به عنوان گوشی&zwnj;ای که قیمت خیلی زیادی ندارد، باید به این موضوع
                                                            اشاره
                                                            کنیم که
                                                            داخل بسته بندی Redmi 9A آیتم&zwnj;های خاصی دیده نمی شود. دفترچه
                                                            راهنما،
                                                            ابزار
                                                            خارج کردن سیم کارت و شارژ ۱۰ واتی را به همراه کابل USB مشاهده
                                                            می&zwnj;کنید. این
                                                            گوشی شیائومی در ابعاد ۱۶۴.۹ در ۷۷.۱ در ۹ میلی متر ساخته شده و
                                                            وزن آن هم
                                                            ۱۹۶ گرم
                                                            است. در حال کلی باید به این موضوع اشاره کنیم که این گوشی خیلی
                                                            خوب در دست
                                                            قرار
                                                            میگیرد. قاب این گوشی بافت جالب توجهی دارد و به همین دلیل خیلی
                                                            خوب داخل
                                                            دست قرار
                                                            میگیرد. البته باید به این موضوع اشاره کنیم که قاب پشتی گوشی خیلی
                                                            زود اثر
                                                            انگشت
                                                            را به خود جلب می&zwnj;کند. قاب پشتی که به صورت مات طراحی شده
                                                            میزبان
                                                            دوربین&zwnj;های پشت است و به جز دوربین&zwnj;ها چیزی روی آن قرار
                                                            نگرفته
                                                            است. به
                                                            همین دلیل گوشی بسیار ساده به نظر می&zwnj;رسد. زمانی که به گوشی
                                                            نگاه
                                                            می&zwnj;کنید، متوجه می&zwnj;شوید که صفحه نمایش آن حاشیه&zwnj;های
                                                            بسبتا
                                                            بزرگی
                                                            دارد.</p>
                                                        <!-- متن بیشتر -->
                                                        <div class="read-more-target">
                                                            <p>البته که با توجه به قیمت ارزان این گوشی نیاید انتظار زیادی از
                                                                این
                                                                محصول داشته
                                                                باشید. روی صفحه نمایش ناچ قطره&zwnj; ای قرار گرفته که داخل
                                                                آن دوربین
                                                                سلفی
                                                                دیده
                                                                می&zwnj;شود. روی لبه بالای گوشی جک ۳.۵ میلی صدا قرار گرفته و
                                                                روی لبه
                                                                پایین
                                                                هم
                                                                پورت micro-USB و اسپیکر گوشی &nbsp;و میکروفن را مشاهده
                                                                می&zwnj;کنید.
                                                                خیلی
                                                                دوست
                                                                داشتیم که روی این گوشی پورت USB C مشاهده می کردیم. روی لبه
                                                                سمت چپ
                                                                گوشی محل
                                                                قرار
                                                                گرفتن سیم کارت و کارت حافظه را مشاهده می&zwnj;کنید. همچنین
                                                                باید به
                                                                این موضوع
                                                                اشاره کنیم که این گوشی در سه رنگ آبی و سبز و مشکی راهی بازار
                                                                شده
                                                                است.</p>
                                                            <p>&nbsp;</p>
                                                            <figure class="image-center"><img class="aligncenter"
                                                                    src="https://www.technolife.ir/media/editor_uploads/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%B4%DB%8C%D8%A7%D8%A6%D9%88%D9%85%DB%8C-%D9%85%D8%AF%D9%84-Redmi-9A-2.jpg"
                                                                    alt="گوشی موبایل شیائومی مدل Redmi 9A"></figure>
                                                            <p>&nbsp;</p>
                                                            <h2 class="font-26 mb-2">صفحه نمایش شیائومی ردمی 9a</h2>
                                                            <p>برای گوشی Redmi 9A از صفحه نمایش ۶.۵ اینچی با وضوح HD+ یا ۷۲۰
                                                                در ۱۶۰۰
                                                                پیکسل
                                                                استفاده شده است. صفحه نمایشی که تراکم پیکسلی آن به ۲۶۹ پیکسل
                                                                در هر
                                                                اینچ
                                                                می&zwnj;رسد. صفحه نمایش عملکرد خوبی در محیط&zwnj;های داخلی
                                                                دارد، اما
                                                                در زیر
                                                                نور
                                                                خورشید نظر شما را به خود جلب نمی&zwnj;کند. چرا که روشنایی
                                                                گوشی زیاد
                                                                نیست.
                                                                صفحه
                                                                نمایش رنگ&zwnj;ها را خوب نشان می&zwnj;دهد، اما عالی نیست.
                                                                البته که
                                                                در
                                                                تنظیمات
                                                                گوشی می&zwnj;توانید حالت نمایش رنگ&zwnj;ها را تغییر دهید،
                                                                اما این
                                                                موضوع هم
                                                                باعث
                                                                نمی&zwnj;شود که رنگ&zwnj;ها بهتر نشان داده شوند. رابط کاربری
                                                                MIUI
                                                                همیشه
                                                                یکسری
                                                                ویژگی&zwnj;های خاص و جذاب را پیش روی کاربران قرار
                                                                می&zwnj;دهد و این
                                                                اتفاق را
                                                                روی
                                                                این گوشی ارزان قیمت هم مشاهده می&zwnj;کنیم. به طور مثال روی
                                                                صفحه
                                                                نمایش LCD
                                                                این
                                                                گوشی حالت مطالعه و حتی دارک مود هم در نظر گرفته شده است. این
                                                                ویژگی&zwnj;ها
                                                                باعث
                                                                می&zwnj;شوند که بتوانید بهتر با گوشی کار کنید. در حالت کلی
                                                                باید
                                                                بگوییم که
                                                                صفحه
                                                                نمایش در انجام فعالیت&zwnj;های معمولی عملکرد خوبی دارد و به
                                                                نیاز شما
                                                                پاسخ
                                                                می&zwnj;دهد.</p>
                                                            <p>&nbsp;</p>
                                                            <figure class="image-center"><img class="aligncenter"
                                                                    src="https://www.technolife.ir/media/editor_uploads/%D8%B5%D9%81%D8%AD%D9%87-%D9%86%D9%85%D8%A7%DB%8C%D8%B4-%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%B4%DB%8C%D8%A7%D8%A6%D9%88%D9%85%DB%8C-%D9%85%D8%AF%D9%84-Redmi-9A.jpg"
                                                                    alt="نمایشگر گوشی موبایل شیائومی مدل Redmi 9A">
                                                            </figure>
                                                            <p>&nbsp;</p>
                                                            <h2 class="font-26 mb-2">اسپیکر شیائومی 9A</h2>
                                                            <p>تنها یک اسپیکر روی این گوشی قرار دارد که به وظیفه خودش به
                                                                خوبی عمل
                                                                می&zwnj;کند.
                                                                میکروفن کوچکی روی این محصول قرار گرفته که حجم صدای خیلی
                                                                زیادی تولید
                                                                نمی کند،
                                                                اما
                                                                کیفیت مناسبی دارد. این اسپیکر در زمان پخش موسیقی&nbsp; و
                                                                تماشای
                                                                ویدیوهای
                                                                مختلف
                                                                عملکرد قابل قبولی دارد. این گوشی جک ۳.۵ میلی متری خروجی صدا
                                                                هم دارد
                                                                و
                                                                می&zwnj;توانید از هدفون&zwnj;های مختلف روی این محصول استفاده
                                                                کنید.
                                                                با
                                                                استفاده از
                                                                هدفون به رادیو هم دسترسی خواهید داشت.</p>
                                                            <p>&nbsp;</p>
                                                            <figure class="image-center"><img class="aligncenter"
                                                                    src="https://www.technolife.ir/media/editor_uploads/%D8%B3%DB%8C%D8%B3%D8%AA%D9%85-%D8%AA%D8%B4%D8%AE%DB%8C%D8%B5-%DA%86%D9%87%D8%B1%D9%87-%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%B4%DB%8C%D8%A7%D8%A6%D9%88%D9%85%DB%8C-%D9%85%D8%AF%D9%84-Redmi-9A.jpg"
                                                                    alt="سیستم تشخیص چهره گوشی موبایل شیائومی مدل Redmi 9A">
                                                            </figure>
                                                            <p>&nbsp;</p>
                                                            <h2 class="font-26 mb-2">نرم افزار و رابط کاربری ردمی 9A</h2>
                                                            <p>گوشی Redmi 9A با رابط کاربری MIUI 12.5 و اندروید ۱۰ راهی
                                                                بازار شده
                                                                است و تا
                                                                به
                                                                امروز به روزرسانی های نرم افزاری مختلفی هم دریافت کرده است.
                                                                یکی از
                                                                خوبی های
                                                                شیائومی این است که از نظر نرم افزاری برای گوشی های ارزان
                                                                قیمت خودش
                                                                کم کاری
                                                                نمی&zwnj;کند. دقیقا ویزگی هایی نرم افزاری ای روی این گوشی
                                                                قرار گرفته
                                                                اند روی
                                                                گوشی های گران قیمت تر شیائومی هم دیده می&zwnj;شوند. رابط
                                                                کاربری
                                                                Redmi 9A
                                                                امکان
                                                                شخصی سازی زیادی را پیش روی کاربران قرار می&zwnj;دهد و
                                                                تنظیمات بسیار
                                                                زیادی هم
                                                                دارد. استفاده از اندروید ۱۰ باعث شده که این گوشی ویژگی دارک
                                                                مود
                                                                داشته باشد و
                                                                گوگل اسیستنت هم روی آن فعال باشد. رابط کاربری گوشی هم بسیار
                                                                نرم و
                                                                روان اجرا
                                                                می&zwnj;شود. در رابط کاربری گوشی پوشه&zwnj;ای به نام Tools
                                                                را مشاهده
                                                                می&zwnj;کنید. این پوشه شامل ماشین حساب، رادیو FM و ضبط کننده
                                                                صفحه
                                                                نمایش،
                                                                اسکنر و
                                                                اپلیکیشن های کاربردی دیگر می&zwnj;شود. یکسری از اپلیکیشن ها
                                                                به صورت
                                                                پیش فرض
                                                                روی
                                                                این گوشی نصب شده اند و می&zwnj;توانید آن ها را حذف کنید.</p>
                                                            <p>&nbsp;</p>
                                                            <h2 class="font-26 mb-2">سخت افزار و عملکرد Redmi 9A</h2>
                                                            <p>گوشی Redmi 9A با تراشه مدیاتک Helio G25 راهی بازار شده که هشت
                                                                هسته
                                                                دارد. سه
                                                                گیگابایت رم و ۳۲ گیگابایت حافظه داخلی هم برای این محصول در
                                                                نظر گرفته
                                                                شده
                                                                است.&nbsp; البته اگر به فضای بیشتری برای ذخیره کردن اطلاعات
                                                                نیاز
                                                                داشتید،
                                                                می&zwnj;توانید از کارت حافظه استفاده کنید. باید به این موضوع
                                                                اشاره
                                                                کنیم که
                                                                این
                                                                گوشی محصول قدرتمندی نیست و نباید از آن انتظار داشته باشید که
                                                                بتواند
                                                                بازی&zwnj;های جدید را اجرا کند یا از پس پردازش&zwnj;های
                                                                سنگین بر
                                                                بیاید. گوشی
                                                                Redmi 9A برای فعالیت&zwnj;های معمولی ساخته شده است. این گوشی
                                                                برای
                                                                ارسال پیام
                                                                کوتاه، تماس، ارسال ایمیل، وب گردی و حتی تماشای ویدیو مناسب
                                                                خواهد
                                                                بود. در
                                                                زمان
                                                                انجام چنین کارهایی اصلا لگ یا کندی سرعت مشاهده
                                                                نمی&zwnj;کنید. البته
                                                                در زمان
                                                                عوض
                                                                کردن اپلیکیشن&zwnj;ها کمی لگ را مشاهده می&zwnj;کنید. در زمان
                                                                اجرای
                                                                بازی هم
                                                                عملکرد گوشی به شدت کند می&zwnj;شود. این گوشی اصلا برای اجرای
                                                                بازی&zwnj;هایی
                                                                مانند Call of Duty و PUBG مناسب نیست. البته برخی از بازیهای
                                                                سبک را
                                                                می&zwnj;توانید با این گوشی تجربه کنید. داشتن تنها ۲ گیگابایت
                                                                رم باعث
                                                                شده که
                                                                سرعت
                                                                Redmi 9A خیلی زیاد نباشد. البته که قیمت گوشی ارزان است و این
                                                                قیمت
                                                                باعث شده
                                                                که
                                                                سخت افزار قوی تری روی آن قرار نگیرد. این قیمت ارزان باعث شده
                                                                که روی
                                                                Redmi 9A
                                                                خبری هم از حسگر تشخیص اثر انگشت نباشد.</p>
                                                            <p>&nbsp;</p>
                                                            <figure class="image-center"><img class="aligncenter"
                                                                    src="https://www.technolife.ir/media/editor_uploads/%D9%BE%D8%B1%D8%AF%D8%A7%D8%B2%D9%86%D8%AF%D9%87-%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%B4%DB%8C%D8%A7%D8%A6%D9%88%D9%85%DB%8C-%D9%85%D8%AF%D9%84-Redmi-9A-1.jpg"
                                                                    alt="پردازنده گوشی موبایل شیائومی مدل Redmi 9A">
                                                            </figure>
                                                            <p>&nbsp;</p>
                                                            <h2 class="font-26 mb-2">باتری شیائومی 9A</h2>
                                                            <p>شیایومی باتری بسیار قدرتمندی را روی Redmi 9A قرار داده است.
                                                                این گوشی
                                                                باتری
                                                                ۵۰۰۰
                                                                میلی امپر ساعتی دارد و به راحتی یک روز و حتی بیشتر هم دوام
                                                                می&zwnj;آورد. در
                                                                تست
                                                                هایی که انجام دادیم متوجه شدیم که ۷ تا ۸ ساعت ان هم بی وقفه
                                                                صفحه
                                                                نمایش روشن
                                                                می&zwnj;ماند. پس با خیال راحت می&zwnj;توانید یک روز و حتی
                                                                بیشتر هم
                                                                از گوشی
                                                                استفاده کنید. در تنظیمات گوشی حالتی به نام Ultra Power در
                                                                نظر گرفته
                                                                شده که
                                                                باعث
                                                                می&zwnj;شود بیشتر از گوشی ردمی 9A و ظرفیت باتری استفاده
                                                                کنید. این
                                                                حالت
                                                                بسیاری از
                                                                کارکردهای گوشی را محدود می&zwnj;کند و به همین دلیل باتری مدت
                                                                زمان
                                                                بیشتری
                                                                می&zwnj;تواند گوشی را روشن نگه دارد. البته این باتری ۵۰۰۰
                                                                میلی امپر
                                                                ساعتی
                                                                تنها
                                                                با شارژر ۱۰ وات راهی بازار شده است. به همین دلیل شارژ شدن
                                                                کامل باتری
                                                                کمی
                                                                طولانی
                                                                است. به طور مثال برای شارژ کردن کامل باتری از ۰ تا ۱۰۰ درصد
                                                                سه ساعت
                                                                طول
                                                                می&zwnj;کشد.</p>
                                                            <p>&nbsp;</p>
                                                            <figure class="image-center"><img class="aligncenter"
                                                                    src="https://www.technolife.ir/media/editor_uploads/%D8%A8%D8%A7%D8%AA%D8%B1%DB%8C-%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%B4%DB%8C%D8%A7%D8%A6%D9%88%D9%85%DB%8C-%D9%85%D8%AF%D9%84-Redmi-9A.jpg"
                                                                    alt="باتری و اسپیکر گوشی موبایل شیائومی مدل Redmi 9A">
                                                            </figure>
                                                            <p>&nbsp;</p>
                                                            <h2 class="font-26 mb-2">بررسی دوربین شیائومی ردمی 9a</h2>
                                                            <figure class="image-center"><img class="aligncenter"
                                                                    src="https://www.technolife.ir/media/editor_uploads/%D8%AF%D9%88%D8%B1%D8%A8%DB%8C%D9%86-%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%B4%DB%8C%D8%A7%D8%A6%D9%88%D9%85%DB%8C-%D9%85%D8%AF%D9%84-Redmi-9A.jpg"
                                                                    alt="دوربین گوشی موبایل شیائومی مدل Redmi 9A"></figure>
                                                            <p>&nbsp;</p>
                                                            <p>برای گوشی Redmi 9A از یک دوربین ۱۴ مگاپیکسلی با فلش LED
                                                                استفاده شده
                                                                است.
                                                                دوربین
                                                                سلفی هم حسگر ۵ مگاپیکسلی دارد. از آنجایی که با یک گوشی ارزان
                                                                قیمت سر
                                                                و کار
                                                                داریم، دوربین عملکرد شگفت انگیزی ندارد. در نور روز دوربین
                                                                عکس هایی
                                                                ثبت
                                                                می&zwnj;کند که جزییات مناسبی دارند و رنگ ها هم نسبتا دقیق
                                                                ثبت
                                                                می&zwnj;شوند.
                                                                عکس&zwnj;هایی که دوربین اصلی ثبت می&zwnj;کند، دامنه
                                                                داینامیکی چندان
                                                                خوبی
                                                                ندارند
                                                                و در زمانی که حالت HDR روشن می&zwnj;کنید، کمی طول میکشد که
                                                                عکس ها
                                                                پردازش
                                                                شوند.
                                                                اگر نورمناسبی داشته باشید، عملکرد دوربین سلفی بد نیست و حتی
                                                                بهتر از
                                                                چیزی است
                                                                که
                                                                تصور می&zwnj;کردیم.&nbsp; حالت عکاسی پرتره هم برای این گوشی
                                                                در نظر
                                                                گرفته شده
                                                                که
                                                                یک ویژگی خوب برای این گوشی ارزان قیمت به حساب می آید. باید
                                                                بگوییم که
                                                                روی این
                                                                گوشی خبری از حالت عکاسی در شب نیست. با دوربین پشت
                                                                می&zwnj;توانید
                                                                ویدئوهایی
                                                                با
                                                                وضوح Full HD و نرخ ۳۰ فریم بر ثانیه ضبط کنید. دوربین از
                                                                فوکوس نسبتا
                                                                سریعی هم
                                                                برخوردار است.</p>
                                                            <p>&nbsp;</p>
                                                            <h2 class="font-26 mb-2">جمع بندی</h2>
                                                            <p>به عنوان یک گوشی ارزان قیمت واقعا با محصول خوش ساخت و قابل
                                                                قبولی سر و
                                                                کار
                                                                دارید.
                                                                باتری فوق العاده از ویژگی های جذاب این گوشی به حساب
                                                                می&zwnj;آید.
                                                                صفحه نمایش
                                                                هم
                                                                نظر شما را به خود جلب می&zwnj;کند و تنها دوربین پشت این گوشی
                                                                هم نیاز
                                                                شما را
                                                                برطرف خواهد کرد. این گوشی برای استفاده&zwnj;های معمولی بسیار
                                                                مناسب
                                                                است.</p>
                                                            <p>&nbsp;</p>
                                                            <h3 class="font-26 mb-2">سوالات متداول</h3>
                                                            <p><strong>ظرفیت باتری Redmi 9A چقدر است؟</strong> این گوشی یک
                                                                باتری
                                                                ۵۰۰۰
                                                                میلی&zwnj;آمپر ساعتی دارد.</p>
                                                            <p><strong>کیفیت دوربین Redmi 9A چقدر است؟</strong> این گوشی
                                                                تنها یک
                                                                دوربین پشت
                                                                با
                                                                حسگر ۱۳ مگاپیکسلی دارد.</p>
                                                        </div>
                                                        <!-- پایان متن بیشتر -->
                                                    </div>
                                                    <!-- پایان والد بیشتر کمتر -->
                                                    <label for="readMore2" class="read-more-trigger"></label>
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
                                                                    <div class="row ps-md-2">
                                                                        <li
                                                                            class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom1">
                                                                                    قابلیت پخش موسیقی
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item col-md-8 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom2">
                                                                                    دارد
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                    <div class="row ps-md-2">
                                                                        <li
                                                                            class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom1">
                                                                                    قابلیت کنترل صدا و موزیک
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item col-md-8 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom2">
                                                                                    ندارد
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                    <div class="row ps-md-2">
                                                                        <li
                                                                            class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom1">
                                                                                    راهنمایی صوتی
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item col-md-8 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom2">
                                                                                    ندارد
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </div>

                                                                </div>
                                                            </ul>
                                                        </section>
                                                    </div>
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
                                                                    <div class="row ps-md-2">
                                                                        <li
                                                                            class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom1">
                                                                                    قابلیت پخش موسیقی
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item col-md-8 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom2">
                                                                                    دارد
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                    <div class="row ps-md-2">
                                                                        <li
                                                                            class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom1">
                                                                                    قابلیت کنترل صدا و موزیک
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item col-md-8 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom2">
                                                                                    ندارد
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                    <div class="row ps-md-2">
                                                                        <li
                                                                            class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom1">
                                                                                    راهنمایی صوتی
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item col-md-8 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom2">
                                                                                    ندارد
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </div>

                                                                </div>
                                                            </ul>
                                                        </section>
                                                    </div>
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
                                                                    <div class="row ps-md-2">
                                                                        <li
                                                                            class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom1">
                                                                                    قابلیت پخش موسیقی
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item col-md-8 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom2">
                                                                                    دارد
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                    <div class="row ps-md-2">
                                                                        <li
                                                                            class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom1">
                                                                                    قابلیت کنترل صدا و موزیک
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item col-md-8 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom2">
                                                                                    ندارد
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                    <div class="row ps-md-2">
                                                                        <li
                                                                            class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom1">
                                                                                    راهنمایی صوتی
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item col-md-8 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom2">
                                                                                    ندارد
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </div>

                                                                </div>
                                                            </ul>
                                                        </section>
                                                    </div>
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
                                                                    <div class="row ps-md-2">
                                                                        <li
                                                                            class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom1">
                                                                                    راهنمایی صوتی
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item col-md-8 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom2">
                                                                                    دارد
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                    <div class="row ps-md-2">
                                                                        <li
                                                                            class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">

                                                                        </li>
                                                                        <li class="list-inline-item col-md-8 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom2">
                                                                                    ندارد
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                    <div class="row ps-md-2">
                                                                        <li
                                                                            class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">

                                                                        </li>
                                                                        <li class="list-inline-item col-md-8 p-0 m-0">
                                                                            <div class="box_params_list">
                                                                                <p class="block border_right_custom2">
                                                                                    ندارد
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </div>

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
                                                                        <img src="/assets/shop-assets/image/user.png" alt=""
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
                                                                        <img src="/assets/shop-assets/image/user.png" alt=""
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
                                        <img src="/assets/shop-assets/image/brand1-1.png" alt="" class="img-fluid">
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
                                                <input type="text" name="count" class="counter" value="1">
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
@endsection
