<!-- start product slider -->

<div class="product-slider site-slider py-20">
    <div class="container-fluid">
        <div
            class="header-content mb-4 bg-white shadow-box rounded-3 p-3 d-flex align-items-center justify-content-between flex-wrap">
            <div class="title d-flex align-items-center">
                <img src="/assets/shop-assets/image/square.png" alt="" class="img-fluid">
                <h5 class="font-16 ms-3"><span class="main-color-one-color d-inline-block ms-1">محبوب ترین
                        محصولات</span> فروشگاه</h5>
            </div>
            <div class="link">
                <a href="" class="border-animate fromCenter pb-1 fw-bold">
                    مشاهده همه
                    <i class="bi bi-chevron-double-left main-color-one-color"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="parent">
        <div class="container-fluid">
            <div class="swiper" id="product-slider">
                <div class="swiper-wrapper">
                    @foreach ($popularProducts as $product)
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>{{ $product->discount }}% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="مقایسه"><i
                                                class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="افزودن به علاقه مندی ها"><i
                                                class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="مشاهده سریع"><i
                                                class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="/product/image/{{ $product->avatar_image }}" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="/assets/shop-assets/image/product/wach2.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">{{ $product->title }}</p>
                                        <span class="text-muted text-overflow-1">{{ $product->meta_title }}</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        @if ($product->discount && $product->discount != 0)
                                            <p class="new-price">{{ $product->discountedPrice() }} تومان</p>
                                            <p class="old-price">{{ $product->price}} تومان</p>
                                        @else
                                            <p class="new-price">{{ $product->price }} تومان</p>
                                            <p class="old-price mt-4"></p>
                                        @endif
                                    </div>
                                    <div class="link">
                                        <a href="/product/show/{{$product->slug}}" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

</div>

<!-- end product slider -->
