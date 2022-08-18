// import "../../styles/shared/user-css/animate.css";
// import "../../styles/shared/user-css/font-awesome.css";
// import "../../styles/shared/user-css/ion-range-slider.css";
// import "../../styles/shared/user-css/linear-icons.css";
// import "../../styles/shared/user-css/magnific-popup.css";
// import "../../styles/shared/user-css/owl.carousel.css";
// import "../../styles/shared/user-css/theme.css";
// import "../../styles/shared/toImportFonts.css";
// import "../../styles/shared/user-css/bootstrap.css";
import { useParams } from "react-router-dom";

import UserNavigation from "../shared/UserNavigation";
import product10 from "../../styles/shared/user-css/assets/images/product-10.jpg";
import product9 from "../../styles/shared/user-css/assets/images/product-9.jpg";
import UserFooter from "../shared/UserFooter";
import { useContext } from "react";
import ProductContext from "../../contexts/ProductContext";
import { useEffect } from "react";
import { Tab, Tabs, TabList, TabPanel } from "react-tabs";
import "react-tabs/style/react-tabs.css";

const UserProductView = () => {
  const { productSlug } = useParams();
  const { isProductLoading, viewingProduct, getProduct } =
    useContext(ProductContext);
  useEffect(() => {
    getProduct(productSlug);
  }, []);
  return (
    <div
      className="wrapper"
      style={{
        direction: "rtl",
      }}
    >
      <UserNavigation />
      {!isProductLoading ? (
        <section className="product pt-0">
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
              <h2 className="title">{viewingProduct.title}</h2>
              <div className="text">
                <p>{viewingProduct.meta_title}</p>
              </div>
            </div>
          </header>

          <div className="main">
            <div className="container">
              <div className="row product-flex">
                <div className="col-lg-4 product-flex-info">
                  <div className="clearfix">
                    <div className="clearfix">
                      <div className="price">
                        {viewingProduct.discount == null ? (
                          <span className="h3">{viewingProduct.price}</span>
                        ) : (
                          <span className="h3">
                            {viewingProduct.price -
                              (viewingProduct.price * viewingProduct.discount) /
                                100}{" "}
                            تومان
                            <small> {viewingProduct.price} تومان</small>
                          </span>
                        )}
                      </div>

                      <hr />

                      <div className="info-box">
                        <span>
                          <strong>کارساز</strong>
                        </span>
                        <span>نام تجاری </span>
                      </div>

                      <div className="info-box">
                        <span>
                          <strong>مواد</strong>
                        </span>
                        <span>چوب ، چرم ، اکریلیک</span>
                      </div>

                      <hr />

                      <div className="info-box">
                        <span>
                          <strong>رنگ های موجود</strong>
                        </span>
                        <div className="product-colors clearfix">
                          <span className="color-btn color-btn-red"></span>
                          <span className="color-btn color-btn-blue checked"></span>
                          <span className="color-btn color-btn-green"></span>
                          <span className="color-btn color-btn-gray"></span>
                          <span className="color-btn color-btn-biege"></span>
                        </div>
                      </div>

                      <hr />

                      <div className="info-box">
                        <span>تعداد</span>
                        <span>
                          <span className="row">
                            <span className="col-6">
                              <input
                                type="number"
                                value="1"
                                className="form-control"
                              />
                            </span>
                            <br />
                          </span>
                        </span>
                      </div>
                      <div className="col-6 p-0 mt-2">
                        <a href="#" className="btn btn-danger">
                          هم اکنون خریداری کنید
                        </a>
                      </div>
                      <hr />

                      <div className="info-box">
                        <span>
                          <small>
                            تمام سفارش های شما پس از بررسی توسط کارشناسان قیمت و
                            زمان دهی خواهند شد و پس از آماده شدن محصول توسط تیم
                            تحویل به شما ارائه خواهد شود.
                          </small>
                        </span>
                      </div>

                      <hr />

                      <div className="info-box info-box-addto added">
                        <span>
                          <i className="add">
                            <i className="fa fa-heart-o"></i> اضافه کردن به
                            علاقه مندی ها
                          </i>
                          <i className="added">
                            <i className="fa fa-heart"></i> از علاقه مندی ها حذف
                            شود
                          </i>
                        </span>
                      </div>

                      <div className="info-box info-box-addto">
                        <span>
                          <i className="add">
                            <i className="fa fa-eye-slash"></i> افزودن به لیست
                            تماشا
                          </i>
                          <i className="added">
                            <i className="fa fa-eye"></i>حذف از لیست تماشا
                          </i>
                        </span>
                      </div>

                      <div className="info-box info-box-addto">
                        <span>
                          <i className="add">
                            <i className="fa fa-star-o"></i> به کلکسیون اضافه کن
                          </i>
                          <i className="added">
                            <i className="fa fa-star"></i> حذف از مجموعه
                          </i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div className="col-md-8 product-flex-gallery">
                  <div className="">
                    <a href="assets/images/product-10.jpg">
                      <img src={product10} alt="" />
                    </a>
                    {/* <a href="assets/images/product-9.jpg">
                    <img src={product9} alt="" />
                  </a> */}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      ) : null}
      <section className="product-details">
        <Tabs>
          <TabList>
            <Tab>مشخصات کالا</Tab>
            <Tab>توضیحات کالا</Tab>
            <Tab>نظرات</Tab>
          </TabList>
          <TabPanel>
            <h2>Any content 1</h2>
          </TabPanel>
          <TabPanel>
            <h2>Any content 2</h2>
          </TabPanel>
          <TabPanel>
            <h2>Any content 3</h2>
          </TabPanel>
        </Tabs>
      </section>
      <section class="products">
        <header>
          <div class="container">
            <h2 class="title">محصولات محبوب</h2>
            <div class="text">
              <p>
                آخرین مجموعه های ما را بررسی کنید. <br /> رویا یت را تحقق ببخش!
              </p>
            </div>
          </div>
        </header>

        <div class="container">
          <div class="row">
            <div class="col-6 col-lg-3">
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
                      <img src={product10} alt="" />
                    </a>
                  </div>
                  <div class="text">
                    <h2 class="title h4">
                      <a href="product.html">آنا</a>
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

            <div class="col-6 col-lg-3">
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
                      <img src={product9} alt="" />
                    </a>
                  </div>
                  <div class="text">
                    <h2 class="title h4">
                      <a href="product.html">لوسی</a>
                    </h2>
                    <sub>219 تومان</sub>
                    <sup>219 تومان</sup>
                    <span class="description clearfix">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                      و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                      روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    </span>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-6 col-lg-3">
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
                      <img src={product10} alt="" />
                    </a>
                  </div>
                  <div class="text">
                    <h2 class="title h4">
                      <a href="product.html">الا</a>
                    </h2>
                    <sub>219 تومان</sub>
                    <sup>219 تومان</sup>
                    <span class="description clearfix">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                      و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                      روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    </span>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-6 col-lg-3">
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
                      <img src={product9} alt="" />
                    </a>
                  </div>
                  <div class="text">
                    <h2 class="title h4">
                      <a href="product.html">رحمت</a>
                    </h2>
                    <sub>219 تومان</sub>
                    <sup>219 تومان</sup>
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

          <div class="wrapper-more">
            <a href="products-grid.html" class="btn btn-main btn-sm">
              مشاهده همه محصولات
            </a>
          </div>
        </div>
      </section>
      <UserFooter />
    </div>
  );
};

export default UserProductView;
