@extends('shop.layout.shop-layout')

@section('main-content')
    <!-- start content -->

    <div class="content">
        <div class="container-fluid">

            <!-- start side-menu in mobile -->
            <div class="custom-filter d-lg-none d-block">
                <button class="btn btn-filter-float border-0 main-color-two-bg shadow-box px-4 rounded-3 position-fixed"
                    style="z-index: 999;bottom:80px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                    <i class="bi bi-list font-20 fw-bold text-white"></i>
                    <span class="d-block font-14 text-white">منو</span>
                </button>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">منو</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="panel-side">
                            <div class="content-box pb-0">
                                <div class="container-fluid">
                                    <div class="panel-box">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/image/user.png"
                                                class="img-fluid img-profile-panel rounded-circle me-3 shadow-md"
                                                alt="">
                                            <div class="d-grid gap-2">
                                                <h6 class="font-14 main-color-one-color">حساب کاربری من</h6>
                                                <h6 class="font-14">امیر رضایی</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-box">
                                        <nav class="navbar profile-box-nav">
                                            <ul class="navbar-nav flex-column">
                                                <li class="nav-item active"><a href="" class="nav-link">
                                                        <i class="bi bi-house-door"></i>پروفایل</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-cart-check"></i>سفارش های من <span
                                                            class="badge rounded-pill badge-spn">5</span></a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-pin-map"></i>آدرس های من</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-bell"></i>پیام ها و اطلاعیه ها</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-chat-dots"></i>نظرات من</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-question-circle"></i>درخواست پشتیبانی</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-heart"></i>محصولات مورد علاقه</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-gift"></i>کد های تخفیف من</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-arrow-right-square"></i>خروج از حساب کاربری</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end side-menu in mobile -->

            <div class="dashboard-panel">
                <div class="row gy-3">
                    <div class="col-lg-3 d-lg-block d-none">
                        <div class="panel-side">
                            <div class="content-box pb-0">
                                <div class="container-fluid">
                                    <div class="panel-box">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/image/user.png"
                                                class="img-fluid img-profile-panel rounded-circle me-3 shadow-md"
                                                alt="">
                                            <div class="d-grid gap-2">
                                                <h6 class="font-14 main-color-one-color">حساب کاربری من</h6>
                                                <h6 class="font-14">امیر رضایی</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-box">
                                        <nav class="navbar profile-box-nav">
                                            <ul class="navbar-nav flex-column">
                                                <li class="nav-item active"><a href="" class="nav-link">
                                                        <i class="bi bi-house-door"></i>پروفایل</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-cart-check"></i>سفارش های من <span
                                                            class="badge rounded-pill badge-spn">5</span></a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-pin-map"></i>آدرس های من</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-bell"></i>پیام ها و اطلاعیه ها</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-chat-dots"></i>نظرات من</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-question-circle"></i>درخواست پشتیبانی</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-heart"></i>محصولات مورد علاقه</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-gift"></i>کد های تخفیف من</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">
                                                        <i class="bi bi-arrow-right-square"></i>خروج از حساب کاربری</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="content-box">
                            <div class="container-fluid">
                                <form action="">
                                    <div class="form-group title-panel">
                                        <h6 class="font-16">
                                            ویرایش اطلاعات کاربری
                                        </h6>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control float-input"
                                                        id="floatingInputFname" placeholder="نام خود را وارد کنید">
                                                    <label for="floatingInputFname">نام خود را وارد کنید</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control float-input"
                                                        id="floatingInputLname"
                                                        placeholder="نام خانوادگی خود را وارد کنید">
                                                    <label for="floatingInputLname">نام خانوادگی خود را وارد
                                                        کنید</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control float-input" id="floatingInputStreet"
                                            placeholder="خیابان">
                                        <label for="floatingInputStreet">خیابان</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control float-input" id="floatingInputMobile"
                                            placeholder="تلفن همراه">
                                        <label for="floatingInputMobile">تلفن همراه</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control float-input" id="floatingInputEmail"
                                            placeholder="ایمیل">
                                        <label for="floatingInputEmail">ایمیل</label>
                                    </div>
                                    <div class="mb-2">
                                        <button type="submit"
                                            class="btn border-0 main-color-one-bg waves-effect waves-light py-2 px-5"><i
                                                class="bi bi-pencil-square text-white me-1"></i> ویرایش</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end content -->
@endsection
