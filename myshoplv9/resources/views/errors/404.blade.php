@extends('shop.layout.shop-layout', ['excludePortableCart' => true])

@section('main-content')
<!-- start content -->

<div class="content">
    <div class="container-fluid">
        <div class="content-box">
            <div class="container-fluid">
                <div class="page-404">
                    <h2 class="h1 mb-1 text-center">صفحه‌ای که دنبال آن بودید پیدا نشد!</h2>
                    <img src="/assets/shop-assets/image/404-Error.svg" class="img-fluid" height="150" alt="">
                </div>
                <div class="text-center">
                    <a href="index.html" class="btn border-0 py-3 px-5 fs-6 btn-lg main-color-three-bg rounded-pill">صفحه اصلی</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end content -->



@endsection