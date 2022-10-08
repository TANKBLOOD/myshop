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
import { Link, NavLink, useParams } from "react-router-dom";
import InPageContactUs from "../shared/InPageContactUs";
import CategoryContext from "../../contexts/CategoryContext";

const CategoryProductsGrid = () => {
  const { getCategoryProducts, categoryProductsList } =
    useContext(ProductContext);
  const { categorySlug } = useParams();
  const {
    toViewCategory,
    getCategory,
    specialCategories,
    getSpecialCategories,
  } = useContext(CategoryContext);
  useEffect(() => {
    getCategoryProducts(categorySlug);
    getCategory(categorySlug);
    getSpecialCategories();
  }, []);
  return (
    <div
      className="wrapper"
      style={{
        direction: "rtl",
      }}
    >
      <UserNavigation />
      <section className="products pt-0">
        <header>
          <div className="container">
            <ol className="breadcrumb">
              <li className="breadcrumb-item">
                <a href="#">خانه</a>
              </li>
              <li className="breadcrumb-item">
                <a href="#">کتابخانه</a>
              </li>
              <li className="breadcrumb-item active" aria-current="page">
                داده ها
              </li>
            </ol>
            <h2 className="title">
              {" "}
              دسته بندی محصولات {toViewCategory?.title}
            </h2>
            <div className="text">
              <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
            </div>
          </div>
        </header>

        <section className="owl-icons-wrapper d-none">
          <header className="d-none">
            <h2> نمادهای محصول</h2>
          </header>

          <div className="container">
            <div className="owl-icons owl-carousel owl-theme">
              <a href="#">
                <figure>
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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
                  <div className="image">
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

        <div className="container">
          <div className="row">
            <div className="col-12">
              <div className="filters filters-fixed">
                <div className="filter-scroll">
                  <div className="filter-header">
                    <span className="h4">محصولات فیلتر</span>
                    <br />
                    گزینه های خود را انتخاب کنید
                  </div>
                  <hr />

                  <div className="filter-box active">
                    <div className="title">رنگها</div>
                    <div className="filter-content">
                      <div className="product-colors clearfix">
                        <span className="color-btn color-btn-yellow"></span>
                        <span className="color-btn color-btn-pink"></span>
                        <span className="color-btn color-btn-orange"></span>
                        <span className="color-btn color-btn-red"></span>
                        <span className="color-btn color-btn-blue checked"></span>
                        <span className="color-btn color-btn-green"></span>
                        <span className="color-btn color-btn-gray"></span>
                        <span className="color-btn color-btn-biege"></span>
                        <span className="color-btn color-btn-black"></span>
                        <span className="color-btn color-btn-white"></span>
                      </div>
                    </div>
                  </div>

                  <div className="filter-box active">
                    <div className="title">قیمت</div>
                    <div className="filter-content">
                      <div className="price-filter">
                        <input
                          type="text"
                          id="range-price-slider"
                          value=""
                          name="range"
                        />
                      </div>
                    </div>
                  </div>

                  <div className="filter-box active">
                    <div className="title">تایپ کنید</div>
                    <div className="filter-content">
                      <span className="checkbox">
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
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId1"
                        />
                        <label for="typeId1">
                          مبل <i>(20)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId2"
                        />
                        <label for="typeId2">
                          صندلی راحتی <i>(12)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId3"
                        />
                        <label for="typeId3">
                          صندلی ها <i>(80)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId4"
                        />
                        <label for="typeId4">
                          میز نهارخوری <i>(140)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId5"
                        />
                        <label for="typeId5">
                          ذخیره سازی رسانه <i>(20)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId6"
                        />
                        <label for="typeId6">
                          جداول <i>(10)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId7"
                        />
                        <label for="typeId7">
                          قفسه کتاب <i>(450)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId8"
                        />
                        <label for="typeId8">
                          جایگاه های شب<i>(750)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId9"
                        />
                        <label for="typeId9">
                          اتاق کودکان<i>(960)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId10"
                        />
                        <label for="typeId10">
                          آشپزخانه <i>(44)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId11"
                        />
                        <label for="typeId11">
                          حمام <i>(5)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId12"
                        />
                        <label for="typeId12">
                          جا رختی <i>(80)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId13"
                        />
                        <label for="typeId13">
                          جا کفشی <i>(23)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId14"
                        />
                        <label for="typeId14">
                          دفتر <i>(24)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          name="radiogroup-type"
                          id="typeId15"
                        />
                        <label for="typeId15">
                          ست های میله ای <i>(92)</i>
                        </label>
                      </span>
                      <span className="checkbox">
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

                  <div className="filter-box active">
                    <div className="title">مواد</div>
                    <div className="filter-content">
                      <span className="checkbox">
                        <input type="checkbox" id="matId1" />
                        <label for="matId1">
                          مخلوط <i>(1200)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input type="checkbox" id="matId2" />
                        <label for="matId2">
                          چرم <i>(12)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input type="checkbox" id="matId3" />
                        <label for="matId3">
                          چوب <i>(80)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input type="checkbox" id="matId4" />
                        <label for="matId4">
                          پوسته <i>(80)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input type="checkbox" id="matId5" />
                        <label for="matId5">
                          فلز <i>(80)</i>
                        </label>
                      </span>
                    </div>
                  </div>

                  <div className="filter-box">
                    <div className="title">تخفیف</div>
                    <div className="filter-content">
                      <span className="checkbox">
                        <input
                          type="radio"
                          id="discountId1"
                          name="discountPrice"
                          checked="checked"
                        />
                        <label for="discountId1">قیمت تخفیف خورده</label>
                      </span>
                      <span className="checkbox">
                        <input
                          type="radio"
                          id="discountId2"
                          name="discountPrice"
                        />
                        <label for="discountId2">قیمت عادی</label>
                      </span>
                    </div>
                  </div>

                  <div className="filter-box">
                    <div className="title">دسترسی</div>
                    <div className="filter-content">
                      <span className="checkbox">
                        <input
                          type="checkbox"
                          id="availableId1"
                          checked="checked"
                        />
                        <label for="availableId1">
                          در انبار<i>(152)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input type="checkbox" id="availableId2" />
                        <label for="availableId2">
                          1 هفته <i>(100)</i>
                        </label>
                      </span>
                      <span className="checkbox">
                        <input type="checkbox" id="availableId3" />
                        <label for="availableId3">
                          2 هفته <i>(80)</i>
                        </label>
                      </span>
                    </div>
                  </div>
                </div>

                <div className="toggle-filters-close btn btn-circle">
                  <i className="icon icon-cross"></i>
                </div>
              </div>
            </div>

            <div className="col-12">
              <div className="sort-bar clearfix">
                <div className="sort-results pull-left">
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

                <div className="sort-options pull-right">
                  <span className="d-none d-sm-inline-block">
                    مرتب سازی بر اساس
                  </span>

                  <select>
                    <option value="1">نام</option>
                    <option value="2">موارد محبوب</option>
                    <option value="3">قیمت: کمترین</option>
                    <option value="4">قیمت: بالاترین</option>
                  </select>

                  <span className="grid-list">
                    <a href="products-grid.html">
                      <i className="fa fa-th-large"></i>
                    </a>
                    <a href="products-list.html">
                      <i className="fa fa-align-justify"></i>
                    </a>
                    <a
                      href="javascript:void(0);"
                      className="toggle-filters-mobile"
                    >
                      <i className="fa fa-sliders"></i>
                      <span
                        className="spinner-grow spinner-grow-sm text-warning"
                        role="status"
                        aria-hidden="true"
                      ></span>
                    </a>
                  </span>
                </div>
              </div>

              <div className="row">
                {/* place the products map here */}
                {categoryProductsList.map((product) => {
                  return (
                    <div className="col-6 col-lg-4">
                      <article>
                        <div className="info">
                          <span className="add-favorite">
                            <a
                              href="javascript:void(0);"
                              data-title="افزودن به علاقه مندی ها"
                              data-title-added="افزودن به  لیست علاقه مندی "
                            >
                              <i className="icon icon-heart"></i>
                            </a>
                          </span>
                          <span>
                            <a
                              href="#productid1"
                              className="mfp-open"
                              data-title="نمایش سریع "
                            >
                              <i className="icon icon-eye"></i>
                            </a>
                          </span>
                        </div>
                        <div className="btn btn-add">
                          <i className="icon icon-cart"></i>
                        </div>
                        <div className="figure-grid">
                          <NavLink to={`/product/view/${product.slug}`}>
                            <span className="badge badge-warning">-20%</span>
                            <div className="image">
                              <a>
                                <img
                                  src={`http://localhost:8000/product/image/${product.avatar_image}`}
                                  alt=""
                                />
                              </a>
                            </div>
                            <div className="text">
                              <h2 className="title h4">
                                <a>{product.title}</a>
                              </h2>
                              {product.discount === null ? (
                                <>
                                  <sup>{product.price} تومان</sup>
                                </>
                              ) : (
                                <>
                                  <sub>{product.price} تومان</sub>
                                  <sup>
                                    {product.price -
                                      (product.price * product.discount) /
                                        100}{" "}
                                    تومان
                                  </sup>
                                </>
                              )}

                              <span className="description clearfix">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                صنعت چاپ و با استفاده از طراحان گرافیک است
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                مورد نیاز
                              </span>
                            </div>
                          </NavLink>
                        </div>
                      </article>
                    </div>
                  );
                })}
              </div>

              <div className="pagination-wrapper">
                <ul className="pagination justify-content-center">
                  <li className="page-item">
                    <a className="page-link" href="#">
                      &laquo;
                    </a>
                  </li>
                  <li className="page-item">
                    <a className="page-link" href="#">
                      1
                    </a>
                  </li>
                  <li className="page-item">
                    <a className="page-link active" href="#">
                      2
                    </a>
                  </li>
                  <li className="page-item">
                    <a className="page-link" href="#">
                      3
                    </a>
                  </li>
                  <li className="page-item">
                    <a className="page-link" href="#">
                      &raquo;
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section className="blog blog-block">
        <header>
          <div className="container">
            <h2 className="title">دسته های ویژه</h2>
            <div className="text">
              <p>ما فقط چیزها را به حداقل می رسانیم</p>
            </div>
          </div>
        </header>

        <div className="container">
          <div className="row text-center">
            {specialCategories.map((item) => {
              return (
                <div class="col-md-4">
                  <article data-3d>
                    <Link to={`/category/${item.slug}/products`}>
                      <div class="image">
                        <img
                          src={`http://localhost:8000/myimage/${item.avatar_image}`}
                          alt=""
                        />
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
      </section>
      <InPageContactUs />
      <UserFooter />
    </div>
  );
};

export default CategoryProductsGrid;
