<!-- start new product -->

<div class="products-row py-20">
    <div class="container-fluid">
        <div
            class="header-content mb-4 bg-white shadow-box rounded-3 p-3 d-flex align-items-center justify-content-between flex-wrap">
            <div class="title d-flex align-items-center">
                <img src="/assets/shop-assets/image/square.png" alt="" class="img-fluid">
                <h5 class="font-16 ms-3"><span class="main-color-one-color d-inline-block ms-1">پرفروشترین
                        محصولات</span> فروشگاه</h5>
            </div>
            <div class="link">
                <a href="" class="border-animate fromCenter pb-1 fw-bold">
                    مشاهده همه
                    <i class="bi bi-chevron-double-left main-color-one-color"></i>
                </a>
            </div>
        </div>
        <div class="parent">
            <div class="row g-3">
                @foreach ($topSellProducts as $index => $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="/product/image/{{ $item->avatar_image }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">{{$index + 1}}</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">{{ $item->title }}</h6>
                                            </div>
                                        </a>
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

<!-- end new product -->
