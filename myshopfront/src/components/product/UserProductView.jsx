import "../../styles/shared/user-css/animate.css";
import "../../styles/shared/user-css/font-awesome.css";
import "../../styles/shared/user-css/ion-range-slider.css";
import "../../styles/shared/user-css/linear-icons.css";
import "../../styles/shared/user-css/magnific-popup.css";
import "../../styles/shared/user-css/owl.carousel.css";
import "../../styles/shared/user-css/theme.css";
import "../../styles/shared/toImportFonts.css";
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
import { useState } from "react";

const UserProductView = () => {
  const { productSlug } = useParams();
  const { isProductLoading, viewingProduct, getProduct } =
    useContext(ProductContext);

  const [showingImageGallery, setShowingImageGallery] = useState(null);
  useEffect(() => {
    getProduct(productSlug);
  }, []);
  const handleImageGallery = (imageName) => {
    const url = `http://localhost:8000/product/image/${imageName}`;
    setShowingImageGallery(url);
  };
  // console.log(viewingProduct.product_specifications)
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

                      <div>
                        <span>
                          <small>
                              {viewingProduct.summary}
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
                  <div className="owl-product-gallery owl-carousel owl-theme open-popup-gallery">
                    <a>
                      <img
                        src={
                          showingImageGallery === null
                            ? `http://localhost:8000/product/image/${viewingProduct.avatar_image}`
                            : showingImageGallery
                        }
                        alt=""
                        style={{
                          objectFit: "contain",
                          maxWidth: "100%",
                          height: "auto",
                        }}
                      />
                    </a>
                    {/* <a href="assets/images/product-9.jpg">
                    <img src={product9} alt="" />
                  </a> */}
                  </div>
                  <div className="d-flex flex-lg-row flex-wrap justify-content-between">
                    <div
                      className="p-2"
                      style={{
                        maxWidth: "150px",
                        border: "1px solid grey",
                      }}
                      onClick={()=> {
                        handleImageGallery(viewingProduct.avatar_image);
                      }}
                    >
                      <img
                        src={`http://localhost:8000/product/image/${viewingProduct.avatar_image}`}
                        alt=""
                        style={{
                          objectFit: "contain",
                          maxWidth: "100%",
                          height: "100px",
                        }}
                      />
                    </div>
                    {viewingProduct.images.map((image) => {
                      return (
                        <div
                          className="p-2"
                          style={{
                            maxWidth: "150px",
                            border: "1px solid grey",
                          }}
                          onClick={()=> {
                            handleImageGallery(image);
                          }}
                        >
                          <img
                            src={`http://localhost:8000/product/image/${image}`}
                            alt=""
                            style={{
                              objectFit: "contain",
                              maxWidth: "100%",
                              height: "100px",
                            }}
                          />
                        </div>
                      );
                    })}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      ) : null}
      <section className="product-details container">
        <Tabs>
          <TabList>
            <Tab>مشخصات کالا</Tab>
            <Tab>توضیحات کالا</Tab>
            {/* <Tab>نظرات</Tab> */}
          </TabList>
          <TabPanel>
            {!isProductLoading ? (
              <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="box-title m-t-40">General Info</h3>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td width="390">برند</td>
                        <td>
                          {"brand" in viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications.brand
                            : ""}
                        </td>
                      </tr>
                      <tr>
                        <td>تعداد</td>
                        <td>
                          {"count" in viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications.count
                            : ""}
                        </td>
                      </tr>
                      <tr>
                        <td>جنس بدنه</td>
                        <td>
                          {"bodyMaterial" in
                          viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications.bodyMaterial
                            : ""}
                        </td>
                      </tr>
                      <tr>
                        <td>جنس پارچه</td>
                        <td>
                          {"fabricMaterial" in
                          viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications
                                .fabricMaterial
                            : ""}
                        </td>
                      </tr>
                      <tr>
                        <td>جنس نشیمن</td>
                        <td>
                          {"seatMaterial" in
                          viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications.seatMaterial
                            : ""}
                        </td>
                      </tr>
                      <tr>
                        <td>جنس پایه</td>
                        <td>
                          {"legMaterial" in
                          viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications.legMaterial
                            : ""}
                        </td>
                      </tr>
                      <tr>
                        <td>نوع دوخت</td>
                        <td>
                          {"sewingType" in viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications.sewingType
                            : ""}
                        </td>
                      </tr>
                      <tr>
                        <td>مکانیزم</td>
                        <td>
                          {" "}
                          {"mechanism" in viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications.mechanism
                            : ""}{" "}
                        </td>
                      </tr>
                      <tr>
                        <td>تراکم اسفنج</td>
                        <td>
                          {"spongeDensity" in
                          viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications
                                .spongeDensity
                            : ""}
                        </td>
                      </tr>
                      <tr>
                        <td>تعداد کوسن</td>
                        <td>
                          {"cushionCount" in
                          viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications.cushionCount
                            : ""}
                        </td>
                      </tr>
                      <tr>
                        <td>وزن قابل تحمل</td>
                        <td>
                          {"tolerableWeight" in
                          viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications
                                .tolerableWeight
                            : ""}
                        </td>
                      </tr>
                      <tr>
                        <td>ضمانت</td>
                        <td>
                          {"warranty" in viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications.warranty
                            : ""}
                        </td>
                      </tr>
                      <tr>
                        <td>خدمات پس از فروش</td>
                        <td>
                          {"afterSalesService" in
                          viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications
                                .afterSalesService
                            : ""}
                        </td>
                      </tr>
                      <tr>
                        <td>شرایط فروش اقساطی</td>
                        <td>
                          {"leasing" in viewingProduct?.productSpecifications
                            ? viewingProduct?.productSpecifications.leasing
                            : ""}
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            ) : null}
          </TabPanel>
          <TabPanel>
            {!isProductLoading ? (
              <div>
                <p>{viewingProduct.summary}</p>
              </div>
            ) : null}
          </TabPanel>
          {/* <TabPanel>
            <h2>Any content 3</h2>
          </TabPanel> */}
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
