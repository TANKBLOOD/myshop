<!-- start main slider -->

<div class="main-slider py-20">
    <div class="container-fluid">
        <div class="row gy-3">
            <div class="col-lg-3 order-lg-1 order-2">
                <div class="swiper" id="suggetMoment">
                    <div class="swiper-wrapper position-relative">
                        @foreach ($productsWithDiscount as $products)
                            <div class="swiper-slide">
                                <div class="product-box">
                                    <div class="product-timer">
                                        <div class="timer-label">
                                            <span>{{$products->discount}} تخفیف</span>
                                        </div>
                                        <div class="timer">
                                            <div class='countdown' data-date="2025-01-01" data-time="18:30">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <img src="/product/image/{{$products->avatar_image}}" loading="lazy"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="product-title">
                                        <div class="title">
                                            <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                            <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                                Smartwatch</span>
                                        </div>
                                        <div class="rating">
                                            <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                            <div class="icon"><i class="bi bi-star-fill"></i></div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <div class="price">
                                            <p class="new-price">3,175,000 تومان</p>
                                            <p class="old-price">6,500,000 تومان</p>
                                        </div>
                                        <div class="link">
                                            <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                                <i class="bi bi-basket text-white"></i>
                                                <span class="text-white">خرید محصول</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-progress-bar">
                        <span class="slide_progress-bar"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-lg-2 order-1">
                <div class="slider shadow-box">
                    <div class="swiper" id="homeSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="/assets/shop-assets/image/slide2-2.jpg" loading="lazy" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="/assets/shop-assets/image/slide3-1.jpg" loading="lazy" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="/assets/shop-assets/image/slide4.jpg" loading="lazy" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-button-next d-lg-flex d-none"></div>
                        <div class="swiper-button-prev d-lg-flex d-none"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end main slider -->
