import "../../styles/shared/user-navigation.css";
const UserNavigation = () => {
  return (
      <nav>
        <div className="container" style={{
            direction: "rtl",
        }}>
          <a href="index.html" className="logo">
            <img
              src="assets/images/divano-logo.png"
              alt=""
              width="130"
              height="55"
            />
          </a>

          <div className="navigation navigation-top clearfix">
            <ul>
              <li className="left-side">
                <a href="index.html" className="logo-icon">
                  <img
                    src="assets/images/divano-logo.png"
                    alt="Alternate Text"
                    width="150"
                    height="34"
                  />
                </a>
              </li>
              <li className="left-side">
                <a href="email-template.html">الگوی ایمیل</a>
              </li>
              <li className="left-side">
                <a href="shortcodes.html">کد کوتاه</a>
              </li>
              <li>
                <a href="javascript:void(0);" className="open-login">
                  <i className="icon icon-user"></i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" className="open-search">
                  <i className="icon icon-magnifier"></i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" className="open-cart">
                  <i className="icon icon-cart"></i> <span>4</span>
                </a>
              </li>
            </ul>
          </div>

          <div className="navigation navigation-main">
            <a href="#" className="open-login">
              <i className="icon icon-user"></i>
            </a>
            <a href="#" className="open-search">
              <i className="icon icon-magnifier"></i>
            </a>
            <a href="#" className="open-cart">
              <i className="icon icon-cart"></i> <span>4</span>
            </a>
            <a href="#" className="open-menu">
              <i className="icon icon-menu"></i>
            </a>

            <div className="floating-menu">
              <div className="close-menu-wrapper">
                <span className="close-menu">
                  <i className="icon icon-cross"></i>
                </span>
              </div>
              <ul>
                <li>
                  <a href="#">
                    خانه{" "}
                    <span className="open-dropdown">
                      <i className="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <div className="navbar-dropdown navbar-dropdown-single">
                    <div className="navbar-box">
                      <div className="box-full">
                        <div className="box clearfix">
                          <ul>
                            <li className="label">صفحات اصلی</li>
                            <li>
                              <a href="index.html">عادی - خانه</a>
                            </li>
                            <li>
                              <a href="index-2.html">خانه - دسته آیکن ها</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="#">
                    صفحات
                    <span className="open-dropdown">
                      <i className="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <div className="navbar-dropdown navbar-dropdown-single">
                    <div className="navbar-box">
                      <div className="box-full">
                        <div className="box clearfix">
                          <ul>
                            <li className="label">افزودنیها</li>
                            <li>
                              <a href="about.html">درباره ما</a>
                            </li>
                            <li>
                              <a href="contact.html">مخاطب</a>
                            </li>
                            <li>
                              <a href="404.html">404 یافت نشد</a>
                            </li>
                            <li>
                              <a href="login.html">ورود و ثبت نام</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="#">
                    وبلاگ
                    <span className="open-dropdown">
                      <i className="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <div className="navbar-dropdown navbar-dropdown-single">
                    <div className="navbar-box">
                      <div className="box-full">
                        <div className="box clearfix">
                          <ul>
                            <li className="label">دسته های وبلاگ</li>
                            <li>
                              <a href="blog-grid.html">وبلاگ - شبکه</a>
                            </li>
                            <li>
                              <a href="blog-list.html">وبلاگ - لیست</a>
                            </li>
                            <li>
                              <a href="blog-fullpage.html">وبلاگ - صفحه کامل</a>
                            </li>
                            <li className="label">مقالات وبلاگ</li>
                            <li>
                              <a href="article.html">مقاله - مجرد</a>
                            </li>
                            <li>
                              <a href="article-2.html">مقاله - منوی سمت راست</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="#">
                    خرید کنید{" "}
                    <span className="open-dropdown">
                      <i className="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <div className="navbar-dropdown navbar-dropdown-single">
                    <div className="navbar-box">
                      <div className="box-full">
                        <div className="box clearfix">
                          <ul>
                            <li className="label">محصولات</li>
                            <li>
                              <a href="category.html">دسته بندی محصولات</a>
                            </li>
                            <li>
                              <a href="products-grid.html">شبکه محصولات</a>
                            </li>
                            <li>
                              <a href="products-list.html">لیست محصولات</a>
                            </li>
                            <li>
                              <a href="products-topbar.html">
                                نوار بالای محصولات
                              </a>
                            </li>
                            <li>
                              <a href="product.html">بررسی اجمالی محصولات</a>
                            </li>
                            <li>
                              <a href="product.html">
                                بررسی اجمالی محصولات ساده است
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="#">
                    تسویه حساب{" "}
                    <span className="open-dropdown">
                      <i className="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <div className="navbar-dropdown navbar-dropdown-single">
                    <div className="navbar-box">
                      <div className="box-full">
                        <div className="box clearfix">
                          <ul>
                            <li className="label">تسویه حساب</li>
                            <li>
                              <a href="checkout-1.html">
                                پرداخت - اقلام سبد خرید
                              </a>
                            </li>
                            <li>
                              <a href="checkout-2.html">پرداخت - تحویل</a>
                            </li>
                            <li>
                              <a href="checkout-3.html">پرداخت - پرداخت</a>
                            </li>
                            <li>
                              <a href="checkout-4.html">پرداخت - رسید</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="index.html">
                    جعبه دار{" "}
                    <span className="open-dropdown">
                      <i className="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <div className="navbar-dropdown">
                    <div className="navbar-box">
                      <div className="box-lg">
                        <div className="box clearfix">
                          <div className="row">
                            <div className="col-lg-4">
                              <ul>
                                <li className="label">هال</li>
                                <li>
                                  <a href="#">مبل ها</a>
                                </li>
                                <li>
                                  <a href="#">جایگاه عشق</a>
                                </li>
                                <li>
                                  <a href="#">مقطعی</a>
                                </li>
                                <li>
                                  <a href="#">صندلی و صندلی</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div className="col-lg-4">
                              <ul>
                                <li className="label">بسته ها</li>
                                <li>
                                  <a href="#">تکیه گاه</a>
                                </li>
                                <li>
                                  <a href="#">عثمانی ها</a>
                                </li>
                                <li>
                                  <a href="#">کابینت</a>
                                </li>
                                <li>
                                  <a href="#">سرگرمی</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div className="col-lg-4">
                              <ul>
                                <li className="label">ناهار خوری</li>
                                <li>
                                  <a href="#">ناهار خوری بسته ها</a>
                                </li>
                                <li>
                                  <a href="#">میز نهارخوری</a>
                                </li>
                                <li>
                                  <a href="#">صندلی غذاخوری</a>
                                </li>
                                <li>
                                  <a href="#">نیمکت های ناهار خوری</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div className="col-lg-4">
                              <ul>
                                <li className="label">تلویزیون و فیلم</li>
                                <li>
                                  <a href="#">تلویزیون ها</a>
                                </li>
                                <li>
                                  <a href="#">پخش کننده های DVD و Blu-ray</a>
                                </li>
                                <li>
                                  <a href="#">خانه صوتی و تئاتر</a>
                                </li>
                                <li>
                                  <a href="#">لوازم جانبی تلویزیون</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div className="col-lg-4">
                              <ul>
                                <li className="label">اتاق خواب</li>
                                <li>
                                  <a href="#">پادشاهان تختخواب</a>
                                </li>
                                <li>
                                  <a href="#">تختخوابهای ملکه</a>
                                </li>
                                <li>
                                  <a href="#">تخت های ذخیره سازی</a>
                                </li>
                                <li>
                                  <a href="#">تختخواب و تخت خواب</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div className="col-lg-4">
                              <ul>
                                <li className="label">انبارها</li>
                                <li>
                                  <a href="#">کمدها و صندوقچه ها</a>
                                </li>
                                <li>
                                  <a href="#">میزهای شبانه</a>
                                </li>
                                <li>
                                  <a href="#">آینه</a>
                                </li>
                                <li>
                                  <a href="#">زره پوش</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div className="box-sm">
                        <div className="image">
                          <img
                            src="assets/images/m-1.jpg"
                            alt="Alternate Text"
                          />
                        </div>
                        <div className="box">
                          <div className="h4">کیفیت برتر</div>
                          <div className="clearfix">
                            <p>
                              خانه هایی که از نظر سبک ، مفهوم و راه حل های
                              معماری متفاوت هستند ، توسط کارخانه مبلمان ارائه
                              شده اند. این فضاها از یک سبک زندگی بین المللی
                              حکایت دارد که بیانگر مدرنیته ، تحقیقات و روحیه ای
                              خلاق است.
                            </p>
                            <a
                              className="btn btn-clean btn-big"
                              href="products-grid.html"
                            >
                              هم اکنون خرید کنید
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <a href="#">
                    مگامنو{" "}
                    <span className="open-dropdown">
                      <i className="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <div className="navbar-dropdown">
                    <div className="navbar-box">
                      <div className="box-full">
                        <div className="box clearfix">
                          <div className="row">
                            <div className="col-lg-3">
                              <ul>
                                <li className="label">بسته ها</li>
                                <li>
                                  <a href="#">تکیه گاه</a>
                                </li>
                                <li>
                                  <a href="#">عثمانی ها</a>
                                </li>
                                <li>
                                  <a href="#">کابینت</a>
                                </li>
                                <li>
                                  <a href="#">سرگرمی</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div className="col-lg-3">
                              <ul>
                                <li className="label">ناهار خوری</li>
                                <li>
                                  <a href="#">ناهار خوری بسته ها</a>
                                </li>
                                <li>
                                  <a href="#">میز نهارخوری</a>
                                </li>
                                <li>
                                  <a href="#">صندلی غذاخوری</a>
                                </li>
                                <li>
                                  <a href="#">نیمکت های ناهار خوری</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div className="col-lg-3">
                              <ul>
                                <li className="label">تلویزیون و فیلم</li>
                                <li>
                                  <a href="#">تلویزیون ها</a>
                                </li>
                                <li>
                                  <a href="#">پخش کننده های DVD و Blu-ray</a>
                                </li>
                                <li>
                                  <a href="#">خانه صوتی و تئاتر</a>
                                </li>
                                <li>
                                  <a href="#">لوازم جانبی تلویزیون</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div className="col-lg-3">
                              <ul>
                                <li className="label">اتاق خواب</li>
                                <li>
                                  <a href="#">پادشاهان تختخواب</a>
                                </li>
                                <li>
                                  <a href="#">تختخوابهای ملکه</a>
                                </li>
                                <li>
                                  <a href="#">تخت های ذخیره سازی</a>
                                </li>
                                <li>
                                  <a href="#">تختخواب و تخت خواب</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div className="col-lg-3">
                              <ul>
                                <li className="label">انبارها</li>
                                <li>
                                  <a href="#">کمدها و صندوقچه ها</a>
                                </li>
                                <li>
                                  <a href="#">میزهای شبانه</a>
                                </li>
                                <li>
                                  <a href="#">آینه</a>
                                </li>
                                <li>
                                  <a href="#">زره پوش</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div className="col-lg-3">
                              <ul>
                                <li className="label">دفتر</li>
                                <li>
                                  <a href="#">میز و هاچ</a>
                                </li>
                                <li>
                                  <a href="#">صندلی های اداری</a>
                                </li>
                                <li>
                                  <a href="#">پر کردن کابینت</a>
                                </li>
                                <li>
                                  <a href="#">قفسه های کتاب</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div className="col-lg-3">
                              <ul>
                                <li className="label">مراقبت از کف</li>
                                <li>
                                  <a href="#">خلأهای عمودی</a>
                                </li>
                                <li>
                                  <a href="#">جاروبرقی ها را بچسبانید</a>
                                </li>
                                <li>
                                  <a href="#">خلأهای رباتیک</a>
                                </li>
                                <li>
                                  <a href="#">خلأهای دستی</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div className="col-lg-3">
                              <ul>
                                <li className="label">بچه ها</li>
                                <li>
                                  <a href="#">تختخواب کامل</a>
                                </li>
                                <li>
                                  <a href="#">تخت های دوقلو</a>
                                </li>
                                <li>
                                  <a href="#">صندوق و کمد</a>
                                </li>
                                <li>
                                  <a href="#">مبلمان کودک</a>
                                </li>
                                <li className="more">
                                  <a href="#">
                                    <i className="icon icon-chevron-left"></i> بیشتر
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li className="nav-settings">
                  <a href="javascript:void(0);">
                    <span className="nav-settings-value"> تومان آمریکا</span>{" "}
                    <span className="open-dropdown">
                      <i className="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <div className="navbar-dropdown navbar-dropdown-single">
                    <div className="navbar-box">
                      <div className="box-full">
                        <div className="box clearfix">
                          <ul className="nav-settings-list">
                            <li>
                              <a href="javascript:void(0);"> تومان آمریکا</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);">یورو</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);">پوند استرلینگ</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li className="nav-settings">
                  <a href="javascript:void(0);">
                    <span className="nav-settings-value">فارسی</span>{" "}
                    <span className="open-dropdown">
                      <i className="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <div className="navbar-dropdown navbar-dropdown-single">
                    <div className="navbar-box">
                      <div className="box-full">
                        <div className="box clearfix">
                          <ul className="nav-settings-list">
                            <li>
                              <a href="javascript:void(0);">فارسی</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);">GER</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);">لعربية</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);">עִבְרִית</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div className="search-wrapper">
            <input className="form-control" placeholder="جستجو کردن..." />
            <button className="btn btn-outline-dark btn-sm">اکنون جستجو کن</button>
          </div>

          <div className="login-wrapper">
            <div className="h5">ورود</div>
            <form>
              <div className="form-group">
                <input
                  type="email"
                  className="form-control"
                  id="exampleInputEmail1"
                  placeholder="پست الکترونیک"
                />
              </div>
              <div className="form-group">
                <input
                  type="password"
                  className="form-control"
                  id="exampleInputPassword1"
                  placeholder="کلمه عبور"
                />
              </div>
              <div className="form-group">
                <a
                  href="#forgotpassword"
                  className="open-popup btn btn-main btn-sm"
                >
                  رمز عبور خود را فراموش کرده اید؟
                </a>
                <a href="#createaccount" className="open-popup btn btn-main btn-sm">
                  حساب ندارید؟
                </a>
              </div>
              <button type="submit" className="btn btn-block btn-outline-primary">
                ارسال
              </button>
            </form>
          </div>

          <div className="cart-wrapper">
            <div className="checkout">
              <div className="clearfix">
                <div className="row">
                  <div className="cart-block cart-block-item clearfix">
                    <div className="image">
                      <a href="product.html">
                        <img src="assets/images/item-1.jpg" alt="" />
                      </a>
                    </div>
                    <div className="title">
                      <div>
                        <a href="product.html"> مورد محصول</a>
                      </div>
                      <small> محصول دسته بندی</small>
                    </div>
                    <div className="quantity">
                      <input
                        type="number"
                        value="2"
                        className="form-control form-quantity"
                      />
                    </div>
                    <div className="price">
                      <span className="final"> تومان 1.998</span>
                      <span className="discount"> تومان 2.666</span>
                    </div>
                    <span className="icon icon-cross icon-delete"></span>
                  </div>

                  <div className="cart-block cart-block-item clearfix">
                    <div className="image">
                      <a href="product.html">
                        <img src="assets/images/item-2.jpg" alt="" />
                      </a>
                    </div>
                    <div className="title">
                      <div>
                        <a href="product.html"> مورد محصول</a>
                      </div>
                      <small> محصول دسته بندی</small>
                    </div>
                    <div className="quantity">
                      <input
                        type="number"
                        value="2"
                        className="form-control form-quantity"
                      />
                    </div>
                    <div className="price">
                      <span className="final"> تومان 1.998</span>
                      <span className="discount"> تومان 2.666</span>
                    </div>
                    <span className="icon icon-cross icon-delete"></span>
                  </div>

                  <div className="cart-block cart-block-item clearfix">
                    <div className="image">
                      <a href="product.html">
                        <img src="assets/images/item-3.jpg" alt="" />
                      </a>
                    </div>
                    <div className="title">
                      <div>
                        <a href="product.html"> مورد محصول</a>
                      </div>
                      <small> محصول دسته بندی</small>
                    </div>
                    <div className="quantity">
                      <input
                        type="number"
                        value="2"
                        className="form-control form-quantity"
                      />
                    </div>
                    <div className="price">
                      <span className="final"> تومان 1.998</span>
                      <span className="discount"> تومان 2.666</span>
                    </div>
                    <span className="icon icon-cross icon-delete"></span>
                  </div>
                </div>

                <hr />

                <div className="clearfix">
                  <div className="cart-block cart-block-footer clearfix">
                    <div>
                      <strong>تخفیف 15٪</strong>
                    </div>
                    <div>
                      <span> 1500000 تومان</span>
                    </div>
                  </div>

                  <div className="cart-block cart-block-footer clearfix">
                    <div>
                      <strong>حمل دریایی</strong>
                    </div>
                    <div>
                      <span> 30000 تومان</span>
                    </div>
                  </div>

                  <div className="cart-block cart-block-footer clearfix">
                    <div>
                      <strong>مالیات بر ارزش افزوده</strong>
                    </div>
                    <div>
                      <span> 500000 تومان</span>
                    </div>
                  </div>
                </div>

                <hr />

                <div className="clearfix">
                  <div className="cart-block cart-block-footer clearfix">
                    <div>
                      <strong>جمع</strong>
                    </div>
                    <div>
                      <div className="h4 title"> 125890000 تومان</div>
                    </div>
                  </div>
                </div>

                <div className="cart-block-buttons clearfix">
                  <div className="row">
                    <div className="col-sm-6">
                      <a href="products-grid.html" className="btn btn-outline-info">
                        به خرید ادامه دهید
                      </a>
                    </div>
                    <div className="col-sm-6 text-right">
                      <a href="checkout-1.html" className="btn btn-outline-warning">
                        <span className="icon icon-cart"></span> تسویه حساب
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
  );
};

export default UserNavigation;
