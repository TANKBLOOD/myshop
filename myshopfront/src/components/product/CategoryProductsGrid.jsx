import "../../styles/shared/user-css/animate.css";
import "../../styles/shared/user-css/font-awesome.css";
import "../../styles/shared/user-css/ion-range-slider.css";
import "../../styles/shared/user-css/linear-icons.css";
import "../../styles/shared/user-css/magnific-popup.css";
import "../../styles/shared/user-css/owl.carousel.css";
import "../../styles/shared/user-css/theme.css";
import "../../styles/shared/toImportFonts.css";
import UserNavigation from "../shared/UserNavigation";

import item1 from "../../styles/shared/user-css/assets/images/item-1.jpg";
import item2 from "../../styles/shared/user-css/assets/images/item-2.jpg";
import item3 from "../../styles/shared/user-css/assets/images/item-3.jpg";
import UserFooter from "../shared/UserFooter";
import { useEffect } from "react";
import { useContext } from "react";
import ProductContext from "../../contexts/ProductContext";
import { useParams } from "react-router-dom";
import InPageContactUs from "../shared/InPageContactUs";

const CategoryProductsGrid = () => {
  const { getCategoryProducts, categoryProductsList } =
    useContext(ProductContext);
  const { categorySlug } = useParams();
  useEffect(() => {
    getCategoryProducts(categorySlug);
  }, []);
  return (
    <div
      className="wrapper"
      style={{
        direction: "rtl",
      }}
    >
      <UserNavigation />
      <section class="products pt-0">
        <header>
          <div class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">خانه</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">کتابخانه</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                داده ها
              </li>
            </ol>
            <h2 class="title"> دسته بندی محصولات شبکه</h2>
            <div class="text">
              <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
            </div>
          </div>
        </header>

        <section class="owl-icons-wrapper d-none">
          <header class="d-none">
            <h2> نمادهای محصول</h2>
          </header>

          <div class="container">
            <div class="owl-icons owl-carousel owl-theme">
              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-sofa.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>مبل</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-armchair.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>صندلی راحتی</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-chair.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>صندلی ها</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-dining.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>میز نهارخوری</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-mediacabinet.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>ذخیره سازی رسانه</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-table.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>جداول</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-bookcase.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>قفسه کتاب</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-bedroom.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>اتاق خواب</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-nightstand.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>تختخواب</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-kidsroom.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>اتاق کودکان</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-kitchen.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>آشپزخانه</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-bathroom.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>حمام</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-wardrobe.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>جا رختی</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-shocabinet.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>جا کفشی</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-office.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>دفتر</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-barset.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>ست های میله ای</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-light.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>لامپ</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-carpet.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>فرش</figcaption>
                </figure>
              </a>

              <a href="#">
                <figure>
                  <div class="image">
                    <img
                      src="assets/icons/icon-accessories.svg"
                      alt="Alternate Text"
                    />
                  </div>
                  <figcaption>تجهیزات جانبی</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </section>

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="filters filters-fixed">
                <div class="filter-scroll">
                  <div class="filter-header">
                    <span class="h4">محصولات فیلتر</span>
                    <br />
                    گزینه های خود را انتخاب کنید
                  </div>
                  <hr />

                  <div class="filter-box active">
                    <div class="title">رنگها</div>
                    <div class="filter-content">
                      <div class="product-colors clearfix">
                        <span class="color-btn color-btn-yellow"></span>
                        <span class="color-btn color-btn-pink"></span>
                        <span class="color-btn color-btn-orange"></span>
                        <span class="color-btn color-btn-red"></span>
                        <span class="color-btn color-btn-blue checked"></span>
                        <span class="color-btn color-btn-green"></span>
                        <span class="color-btn color-btn-gray"></span>
                        <span class="color-btn color-btn-biege"></span>
                        <span class="color-btn color-btn-black"></span>
                        <span class="color-btn color-btn-white"></span>
                      </div>
                    </div>
                  </div>

                  <div class="filter-box active">
                    <div class="title">قیمت</div>
                    <div class="filter-content">
                      <div class="price-filter">
                        <input
                          type="text"
                          id="range-price-slider"
                          value=""
                          name="range"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="filter-box active">
                    <div class="title">تایپ کنید</div>
                    <div class="filter-content">
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeIdAll"
                          checked="checked"
                        />
                        <label for="typeIdAll">
                          همه <i>(1200)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId1"
                        />
                        <label for="typeId1">
                          مبل <i>(20)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId2"
                        />
                        <label for="typeId2">
                          صندلی راحتی <i>(12)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId3"
                        />
                        <label for="typeId3">
                          صندلی ها <i>(80)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId4"
                        />
                        <label for="typeId4">
                          میز نهارخوری <i>(140)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId5"
                        />
                        <label for="typeId5">
                          ذخیره سازی رسانه <i>(20)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId6"
                        />
                        <label for="typeId6">
                          جداول <i>(10)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId7"
                        />
                        <label for="typeId7">
                          قفسه کتاب <i>(450)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId8"
                        />
                        <label for="typeId8">
                          جایگاه های شب<i>(750)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId9"
                        />
                        <label for="typeId9">
                          اتاق کودکان<i>(960)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId10"
                        />
                        <label for="typeId10">
                          آشپزخانه <i>(44)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId11"
                        />
                        <label for="typeId11">
                          حمام <i>(5)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId12"
                        />
                        <label for="typeId12">
                          جا رختی <i>(80)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId13"
                        />
                        <label for="typeId13">
                          جا کفشی <i>(23)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId14"
                        />
                        <label for="typeId14">
                          دفتر <i>(24)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId15"
                        />
                        <label for="typeId15">
                          ست های میله ای <i>(92)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId16"
                        />
                        <label for="typeId16">
                          لامپ <i>(1120)</i>
                        </label>
                      </span>
                    </div>
                  </div>

                  <div class="filter-box active">
                    <div class="title">مواد</div>
                    <div class="filter-content">
                      <span class="checkbox">
                        <input type="checkbox" id="matId1" />
                        <label for="matId1">
                          مخلوط <i>(1200)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input type="checkbox" id="matId2" />
                        <label for="matId2">
                          چرم <i>(12)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input type="checkbox" id="matId3" />
                        <label for="matId3">
                          چوب <i>(80)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input type="checkbox" id="matId4" />
                        <label for="matId4">
                          پوسته <i>(80)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input type="checkbox" id="matId5" />
                        <label for="matId5">
                          فلز <i>(80)</i>
                        </label>
                      </span>
                    </div>
                  </div>

                  <div class="filter-box">
                    <div class="title">تخفیف</div>
                    <div class="filter-content">
                      <span class="checkbox">
                        <input
                          type="radio"
                          id="discountId1"
                          name="discountPrice"
                          checked="checked"
                        />
                        <label for="discountId1">قیمت تخفیف خورده</label>
                      </span>
                      <span class="checkbox">
                        <input
                          type="radio"
                          id="discountId2"
                          name="discountPrice"
                        />
                        <label for="discountId2">قیمت عادی</label>
                      </span>
                    </div>
                  </div>

                  <div class="filter-box">
                    <div class="title">دسترسی</div>
                    <div class="filter-content">
                      <span class="checkbox">
                        <input
                          type="checkbox"
                          id="availableId1"
                          checked="checked"
                        />
                        <label for="availableId1">
                          در انبار<i>(152)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input type="checkbox" id="availableId2" />
                        <label for="availableId2">
                          1 هفته <i>(100)</i>
                        </label>
                      </span>
                      <span class="checkbox">
                        <input type="checkbox" id="availableId3" />
                        <label for="availableId3">
                          2 هفته <i>(80)</i>
                        </label>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="toggle-filters-close btn btn-circle">
                  <i class="icon icon-cross"></i>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="sort-bar clearfix">
                <div class="sort-results pull-left">
                  <select>
                    <option value="1">10</option>
                    <option value="2">50</option>
                    <option value="3">100</option>
                    <option value="4">همه</option>
                  </select>

                  <span>
                    نمایش همه<strong>50</strong> از <strong>348</strong> موارد
                  </span>
                </div>

                <div class="sort-options pull-right">
                  <span class="d-none d-sm-inline-block">
                    مرتب سازی بر اساس
                  </span>

                  <select>
                    <option value="1">نام</option>
                    <option value="2">موارد محبوب</option>
                    <option value="3">قیمت: کمترین</option>
                    <option value="4">قیمت: بالاترین</option>
                  </select>

                  <span class="grid-list">
                    <a href="products-grid.html">
                      <i class="fa fa-th-large"></i>
                    </a>
                    <a href="products-list.html">
                      <i class="fa fa-align-justify"></i>
                    </a>
                    <a href="javascript:void(0);" class="toggle-filters-mobile">
                      <i class="fa fa-sliders"></i>
                      <span
                        class="spinner-grow spinner-grow-sm text-warning"
                        role="status"
                        aria-hidden="true"
                      ></span>
                    </a>
                  </span>
                </div>
              </div>

              <div class="row">
                {/* place the products map here */}
                {categoryProductsList.map((product) => {
                  return (
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
                              <img
                                src={`http://localhost:8000/product/image/${product.avatar_image}`}
                                alt=""
                              />
                            </a>
                          </div>
                          <div class="text">
                            <h2 class="title h4">
                              <a href="product.html">آنا</a>
                            </h2>
                            <sub>219 تومان</sub>
                            <sup>219 تومان</sup>
                            <span class="description clearfix">
                              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                              صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها
                              و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                              لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                            </span>
                          </div>
                        </div>
                      </article>
                    </div>
                  );
                })}
              </div>

              <div class="pagination-wrapper">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link" href="#">
                      &laquo;
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      1
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link active" href="#">
                      2
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      3
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      &raquo;
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="products">
        <header>
          <div class="container">
            <h2 class="title">آخرین بازدید</h2>
            <div class="text">
              <p>آخرین مجموعه های ما را بررسی کنید</p>
            </div>
          </div>
        </header>

        <div class="container">
          <div class="scroll-wrapper">
            <div class="row scroll">
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
                        <img src={item1} alt="" />
                      </a>
                    </div>
                    <div class="text">
                      <h2 class="title h4">
                        <a href="product.html">آنا</a>
                      </h2>
                      <sub>159 تومان</sub>
                      <sup>139 تومان</sup>
                      <span class="description clearfix">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                        چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                        بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
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
                        <img src={item2} alt="" />
                      </a>
                    </div>
                    <div class="text">
                      <h2 class="title h4">
                        <a href="product.html">لوسی</a>
                      </h2>
                      <sub>219 تومان</sub>
                      <sup>219 تومان</sup>
                      <span class="description clearfix">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                        چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                        بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
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
                        <img src={item3} alt="" />
                      </a>
                    </div>
                    <div class="text">
                      <h2 class="title h4">
                        <a href="product.html">الا</a>
                      </h2>
                      <sub>219 تومان</sub>
                      <sup>219 تومان</sup>
                      <span class="description clearfix">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                        چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                        بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                      </span>
                    </div>
                  </div>
                </article>
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
              <p>ما فقط چیزها را به حداقل می رسانیم</p>
            </div>
          </div>
        </header>

        <div class="container">
          <div class="row text-center">
            <div class="col-md-4">
              <article data-3d>
                <a href="products-grid.html">
                  <div class="image">
                    <img src={item1} alt="" />
                  </div>
                  <div class="entry entry-block">
                    <div class="label">مجموعه 2020</div>
                    <div class="title">
                      <h2 class="h4">اتاق خواب</h2>
                    </div>
                    <div class="description d-none d-sm-block">
                      <p>برترین ها چهار خواسته شماست</p>
                    </div>
                  </div>
                  <div class="show-more">
                    <span class="btn btn-clean">هم اکنون خرید کنید</span>
                  </div>
                </a>
              </article>
            </div>

            <div class="col-6 col-md-4">
              <article data-3d>
                <a href="products-grid.html">
                  <div class="image">
                    <img src={item2} alt="" />
                  </div>
                  <div class="entry entry-block">
                    <div class="label">طرح نوین</div>
                    <div class="title">
                      <h2 class="h4">آشپزخانه</h2>
                    </div>
                    <div class="description d-none d-sm-block">
                      <p>دستگاه های محبوب را کاوش کنید</p>
                    </div>
                  </div>
                  <div class="show-more">
                    <span class="btn btn-clean">هم اکنون خرید کنید</span>
                  </div>
                </a>
              </article>
            </div>

            <div class="col-6 col-md-4">
              <article data-3d>
                <a href="products-grid.html">
                  <div class="image">
                    <img src={item3} alt="" />
                  </div>
                  <div class="entry entry-block">
                    <div class="label">تخفیف جدید</div>
                    <div class="title">
                      <h2 class="h4">هال</h2>
                    </div>
                    <div class="description d-none d-sm-block">
                      <p>برای حمل سریع دریایی موجود است</p>
                    </div>
                  </div>
                  <div class="show-more">
                    <span class="btn btn-clean">هم اکنون خرید کنید</span>
                  </div>
                </a>
              </article>
            </div>
          </div>
        </div>
      </section>
      <InPageContactUs />
      <UserFooter />
    </div>
  );
};

export default CategoryProductsGrid;
