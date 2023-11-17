@extends('shop.layout.shop-layout')

@section('main-content')
    @include('shop.components.mainPage.shop-main-slider', ['productsWithDiscount'=> $productsWithDiscount])
    @include('shop.components.mainPage.shop-features')
    @include('shop.components.mainPage.shop-services')
    @include('shop.components.mainPage.shop-special-categories', ['specialCats'=> $specialCats])
    @include('shop.components.mainPage.shop-product-slider', ['popularProducts'=> $popularProducts])
    @include('shop.components.mainPage.shop-sale-banners')
    @include('shop.components.mainPage.shop-product-list')
    @include('shop.components.mainPage.shop-blog-latest')
@endsection
