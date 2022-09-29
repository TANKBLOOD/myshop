import "../styles/shared/user-css/animate.css";
import "../styles/shared/user-css/font-awesome.css";
import "../styles/shared/user-css/ion-range-slider.css";
import "../styles/shared/user-css/linear-icons.css";
import "../styles/shared/user-css/magnific-popup.css";
import "../styles/shared/user-css/owl.carousel.css";
import "../styles/shared/user-css/theme.css";
import "../styles/shared/toImportFonts.css";
import mainSlider from "../styles/shared/user-css/assets/images/slide-1.jpg";
import box1 from "../styles/shared/user-css/assets/images/box-1.jpg";
import box2 from "../styles/shared/user-css/assets/images/box-2.jpg";
import box3 from "../styles/shared/user-css/assets/images/box-3.jpg";
import box4 from "../styles/shared/user-css/assets/images/box-4.jpg";
import box5 from "../styles/shared/user-css/assets/images/box-5.jpg";

import product1 from "../styles/shared/user-css/assets/images/product-1.jpg";
import product2 from "../styles/shared/user-css/assets/images/product-2.jpg";
import product3 from "../styles/shared/user-css/assets/images/product-3.jpg";
import product4 from "../styles/shared/user-css/assets/images/product-4.jpg";
import product5 from "../styles/shared/user-css/assets/images/product-5.jpg";
import product6 from "../styles/shared/user-css/assets/images/product-6.jpg";
import product7 from "../styles/shared/user-css/assets/images/product-7.jpg";
import product8 from "../styles/shared/user-css/assets/images/product-8.jpg";
import product9 from "../styles/shared/user-css/assets/images/product-9.jpg";
import product10 from "../styles/shared/user-css/assets/images/product-10.jpg";

import UserNavigation from "./shared/UserNavigation";
import InPageContactUs from "./shared/InPageContactUs";
import UserFooter from "./shared/UserFooter";
import { Link, NavLink } from "react-router-dom";
import { useContext } from "react";
import CategoryContext from "../contexts/CategoryContext";
import { useEffect } from "react";

const UserMainPage = () => {
  const { specialCategories, getSpecialCategories } =
    useContext(CategoryContext);

  useEffect(() => {
    getSpecialCategories();
  }, []);
  return (
    <div className="wrapper">
      <UserNavigation />
      <section className="header-content">
        <h2 className="d-none">عنصر کشویی</h2>

        <div className="container-fluid">
          <div
            className="owl-slider owl-carousel owl-theme"
            data-autoplay="true"
          >
            {/* style="background-image:url(assets/images/slide-1.jpg) */}
            <div
              className="item d-flex align-items-center"
              style={{
                backgroundImage: `url(${mainSlider})`,
              }}
            >
              <div className="container">
                <div className="caption">
                  <div className="animated" data-start="fadeInUp">
                    <div className="promo pt-3">
                      <div className="title title-sm p-0">مبل راحتی</div>
                    </div>
                  </div>
                  <div className="animated" data-start="fadeInUp">
                    ورود جدید را از جدیدترین موارد کسب کنید
                    <br />
                    الگوی تجارت الکترونیکی چند منظوره آماده است
                  </div>
                  <div className="animated" data-start="fadeInUp">
                    <div className="pt-3">
                      <a
                        href="#"
                        target="_blank"
                        className="btn btn-outline-warning"
                      >
                        هم اکنون خریداری کنید
                      </a>
                      <a
                        href="#"
                        target="_blank"
                        className="btn btn-outline-light"
                      >
                        {" "}
                        اولین تخفیف را دریافت کنید
                      </a>
                    </div>
                  </div>
                  <div className="animated" data-start="fadeInUp">
                    <div className="promo pt-5">
                      <div className="h6 p-0 m-0">قیمت ویژه دریافت کنید</div>
                      <div className="price">
                        <span>199000 تومان</span>
                        <span>3499,99</span>
                      </div>
                      <small className="d-none d-sm-block">
                        ** قیمت محصولات با تخفیف تا پایان سهام موجود است{" "}
                      </small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="blog blog-block">
        <header>
          <div class="container">
            <h2 class="title">دسته های ویژه</h2>
            <div class="text">
              <p>
                ما فقط چیزها را به حداقل می رسانیم.{" "}
                <a class="btn btn-main">
                  <NavLink to="/categories">مشاهده بیشتر</NavLink>
                </a>
              </p>
            </div>
          </div>
        </header>

        <div class="container">
          <div class="scroll-wrapper">
            <div class="row scroll text-center">
              {specialCategories.map((item) => {
                return (
                  <div class="col-md-4">
                    <article data-3d>
                      <Link to={`/category/${item.slug}/products`}>
                        <div class="image">
                          <img src={`http://localhost:8000/myimage/${item.avatar_image}`} alt="" />
                        </div>
                        <div class="entry entry-block">
                          <div class="label">{item.title}</div>
                          <div class="title">
                            <h2 class="h4">{item.meta_title}</h2>
                          </div>
                          <div class="description d-none d-sm-block">
                            <p>{item.content}</p>
                          </div>
                        </div>
                        <div class="show-more">
                          <span class="btn btn-clean">هم اکنون خرید کنید</span>
                        </div>
                      </Link>
                    </article>
                  </div>
                );
              })}
            </div>
          </div>
        </div>
      </section>
      <section class="products">
        <header>
          <div class="container">
            <h2 class="title">محصولات محبوب</h2>
            <div class="text">
              <p>
                مطابقت کامل خود را پیدا کنید{" "}
                <a href="products-grid.html" class="btn btn-main">
                  مشاهده همه
                </a>
              </p>
            </div>
          </div>
        </header>

        <div class="container">
          <div class="row">
            <div class="col-6 col-lg-4">
              <article>
                <div class="info">
                  <span class="add-favorite">
                    <a
                      href="javascript:void(0);"
                      data-title="افزودن به علاقه مندی ها"
                      data-title-added="افزودن به  لیست علاقه مندی "
                    >
                      <i class="icon icon-heart"></i>
                    </a>
                  </span>
                  <span>
                    <a
                      href="#productid1"
                      class="mfp-open"
                      data-title="نمایش سریع "
                    >
                      <i class="icon icon-eye"></i>
                    </a>
                  </span>
                </div>
                <div class="btn btn-add">
                  <i class="icon icon-cart"></i>
                </div>
                <div class="figure-grid">
                  <div class="image">
                    <a href="product.html">
                      <img src={product1} alt="" />
                    </a>
                  </div>
                  <div class="text">
                    <h2 class="title h4">
                      <a href="product.html">انا</a>
                    </h2>
                    <sub>159 تومان</sub>
                    <sup>139 تومان</sup>
                    <span class="description clearfix">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                      و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                      روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    </span>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-6 col-lg-4">
              <article>
                <div class="info">
                  <span class="add-favorite">
                    <a
                      href="javascript:void(0);"
                      data-title="افزودن به علاقه مندی ها"
                      data-title-added="افزودن به  لیست علاقه مندی "
                    >
                      <i class="icon icon-heart"></i>
                    </a>
                  </span>
                  <span>
                    <a
                      href="#productid1"
                      class="mfp-open"
                      data-title="نمایش سریع "
                    >
                      <i class="icon icon-eye"></i>
                    </a>
                  </span>
                </div>
                <div class="btn btn-add">
                  <i class="icon icon-cart"></i>
                </div>
                <div class="figure-grid">
                  <span class="badge badge-warning">-20%</span>
                  <div class="image">
                    <a href="product.html">
                      <img src={product2} alt="" />
                    </a>
                  </div>
                  <div class="text">
                    <h2 class="title h4">
                      <a href="product.html">لوسی</a>
                    </h2>

                    <sub>159 تومان</sub>
                    <sup>139 تومان</sup>
                    <span class="description clearfix">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                      و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                      روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    </span>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-6 col-lg-4">
              <article>
                <div class="info">
                  <span class="add-favorite">
                    <a
                      href="javascript:void(0);"
                      data-title="افزودن به علاقه مندی ها"
                      data-title-added="افزودن به  لیست علاقه مندی "
                    >
                      <i class="icon icon-heart"></i>
                    </a>
                  </span>
                  <span>
                    <a
                      href="#productid1"
                      class="mfp-open"
                      data-title="نمایش سریع "
                    >
                      <i class="icon icon-eye"></i>
                    </a>
                  </span>
                </div>
                <div class="btn btn-add">
                  <i class="icon icon-cart"></i>
                </div>
                <div class="figure-grid">
                  <span class="badge badge-info">ورود جدید</span>
                  <div class="image">
                    <a href="product.html">
                      <img src={product3} alt="" />
                    </a>
                  </div>
                  <div class="text">
                    <h2 class="title h4">
                      <a href="product.html">الا</a>
                    </h2>
                    <sub>159 تومان</sub>
                    <sup>139 تومان</sup>
                    <span class="description clearfix">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                      و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                      روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    </span>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-6 col-lg-4">
              <article>
                <div class="info">
                  <span class="add-favorite added">
                    <a
                      href="javascript:void(0);"
                      data-title="افزودن به علاقه مندی ها"
                      data-title-added="افزودن به  لیست علاقه مندی "
                    >
                      <i class="icon icon-heart"></i>
                    </a>
                  </span>
                  <span>
                    <a
                      href="#productid1"
                      class="mfp-open"
                      data-title="نمایش سریع "
                    >
                      <i class="icon icon-eye"></i>
                    </a>
                  </span>
                </div>
                <div class="btn btn-add">
                  <i class="icon icon-cart"></i>
                </div>
                <div class="figure-grid">
                  <div class="image">
                    <a href="product.html">
                      <img src={product4} alt="" />
                    </a>
                  </div>
                  <div class="text">
                    <h2 class="title h4">
                      <a href="product.html">رحمت</a>
                    </h2>

                    <sub>159 تومان</sub>
                    <sup>139 تومان</sup>
                    <span class="description clearfix">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                      و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                      روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    </span>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-6 col-lg-4">
              <article>
                <div class="info">
                  <span class="add-favorite">
                    <a
                      href="javascript:void(0);"
                      data-title="افزودن به علاقه مندی ها"
                      data-title-added="افزودن به  لیست علاقه مندی "
                    >
                      <i class="icon icon-heart"></i>
                    </a>
                  </span>
                  <span>
                    <a
                      href="#productid1"
                      class="mfp-open"
                      data-title="نمایش سریع "
                    >
                      <i class="icon icon-eye"></i>
                    </a>
                  </span>
                </div>
                <div class="btn btn-add">
                  <i class="icon icon-cart"></i>
                </div>
                <div class="figure-grid">
                  <div class="image">
                    <a href="product.html">
                      <img src={product5} alt="" />
                    </a>
                  </div>
                  <div class="text">
                    <h2 class="title h4">
                      <a href="product.html">نورا</a>
                    </h2>

                    <sub>159 تومان</sub>
                    <sup>139 تومان</sup>
                    <span class="description clearfix">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                      و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                      روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    </span>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-6 col-lg-4">
              <article>
                <div class="info">
                  <span class="add-favorite">
                    <a
                      href="javascript:void(0);"
                      data-title="افزودن به علاقه مندی ها"
                      data-title-added="افزودن به  لیست علاقه مندی "
                    >
                      <i class="icon icon-heart"></i>
                    </a>
                  </span>
                  <span>
                    <a
                      href="#productid1"
                      class="mfp-open"
                      data-title="نمایش سریع "
                    >
                      <i class="icon icon-eye"></i>
                    </a>
                  </span>
                </div>
                <div class="btn btn-add">
                  <i class="icon icon-cart"></i>
                </div>
                <div class="figure-grid">
                  <div class="image">
                    <a href="product.html">
                      <img src={product6} alt="" />
                    </a>
                  </div>
                  <div class="text">
                    <h2 class="title h4">
                      <a href="product.html">سوفیا</a>
                    </h2>

                    <sub>159 تومان</sub>
                    <sup>139 تومان</sup>
                    <span class="description clearfix">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                      و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                      روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    </span>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <section class="cards">
        <header>
          <div class="container">
            <h2 class="title">الهام بخش داخلی</h2>
            <div class="text">
              <p>یک فضای جذاب برای خود و خانواده ایجاد کنید</p>
            </div>
          </div>
        </header>

        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <figure>
                <figcaption
                  style={{
                    backgroundImage: `url(${box1})`,
                  }}
                >
                  <img src="assets/images/box-1.jpg" alt="" />
                </figcaption>
                <a href="#interiorId1" class="btn btn-clean">
                  برای زندگی آسان باز کنید
                </a>
              </figure>
            </div>

            <div class="col-lg-4">
              <figure>
                {/* style="background-image:url(assets/images/box-2.jpg)" */}
                <figcaption
                  style={{
                    backgroundImage: `url(${box2})`,
                  }}
                >
                  <img src="assets/images/box-2.jpg" alt="" />
                </figcaption>
                <a href="#interiorId1" class="btn btn-clean">
                  ظاهر سنتی
                </a>
              </figure>
            </div>

            <div class="col-lg-4">
              <figure>
                {/* style="background-image:url(assets/images/box-3.jpg)" */}
                <figcaption
                  style={{
                    backgroundImage: `url(${box3})`,
                  }}
                >
                  <img src="assets/images/box-3.jpg" alt="" />
                </figcaption>
                <a href="#interiorId1" class="btn btn-clean">
                  براق و پایدار
                </a>
              </figure>
            </div>

            <div class="col-lg-4">
              <figure>
                {/* style="background-image:url(assets/images/box-4.jpg)" */}
                <figcaption
                  style={{
                    backgroundImage: `url(${box4})`,
                  }}
                >
                  <img src="assets/images/box-4.jpg" alt="" />
                </figcaption>
                <a href="#interiorId1" class="btn btn-clean">
                  زندگی فشرده
                </a>
              </figure>
            </div>

            <div class="col-lg-4">
              <figure>
                {/* style="background-image:url(assets/images/box-5.jpg)" */}
                <figcaption
                  style={{
                    backgroundImage: `url(${box5})`,
                  }}
                >
                  <img src="assets/images/box-5.jpg" alt="" />
                </figcaption>
                <a href="#interiorId1" class="btn btn-clean">
                  طراحی کلاسیک
                </a>
              </figure>
            </div>
          </div>
        </div>
      </section>
      <InPageContactUs />

      {/* <!-- ========================  Instagram ======================== --> */}

      <section class="instagram">
        <header>
          <h2 class="h6 title">
            <i class="fa fa-instagram fa-3x"></i>
            <br /># مبلمان دیوانو
          </h2>
        </header>

        <div class="container">
          <div class="gallery clearfix">
            <a class="item" href="#">
              <img src={product1} alt="Alternate Text" />
            </a>
            <a class="item" href="#">
              <img src={product2} alt="Alternate Text" />
            </a>
            <a class="item" href="#">
              <img src={product3} alt="Alternate Text" />
            </a>
            <a class="item" href="#">
              <img src={product4} alt="Alternate Text" />
            </a>
            <a class="item" href="#">
              <img src={product5} alt="Alternate Text" />
            </a>
            <a class="item" href="#">
              <img src={product6} alt="Alternate Text" />
            </a>
          </div>
        </div>
      </section>

      {/* <!-- ========================  فواید ======================== --> */}

      <section class="benefits">
        <header class="d-none">
          <div class="container">
            <h2 class="h2 title">فواید</h2>
          </div>
        </header>

        <div class="container">
          <div class="row">
            <div class="col-6 col-lg-3" data-tilt>
              <figure>
                <div class="icon">
                  <i class="icon icon-gift"></i>
                </div>
                <figcaption>
                  <span>
                    <strong>هدیه خود را دریافت کنید</strong> <br />
                    <small>آیا شما یک مشتری جدید هستید؟</small>
                  </span>
                </figcaption>
              </figure>
            </div>

            <div class="col-6 col-lg-3" data-tilt>
              <figure>
                <div class="icon">
                  <i class="icon icon-rocket"></i>
                </div>
                <figcaption>
                  <span>
                    <strong>تحویل سریع</strong> <br />
                    <small>ما در حال حمل دریایی در سراسر جهان هستیم</small>
                  </span>
                </figcaption>
              </figure>
            </div>

            <div class="col-6 col-lg-3" data-tilt>
              <figure>
                <div class="icon">
                  <i class="icon icon-history"></i>
                </div>
                <figcaption>
                  <span>
                    <strong>تضمین بازگشت پول</strong> <br />
                    <small>ضمانت برگشت 30 روزه پول</small>
                  </span>
                </figcaption>
              </figure>
            </div>

            <div class="col-6 col-lg-3" data-tilt>
              <figure>
                <div class="icon">
                  <i class="icon icon-diamond"></i>
                </div>
                <figcaption>
                  <span>
                    <strong>تخفیف ویژه</strong> <br />
                    <small>عضو ویژه شوید</small>
                  </span>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </section>
      <UserFooter />
    </div>
  );
};

export default UserMainPage;
