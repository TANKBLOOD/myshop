import axios from "axios";
import { useContext } from "react";
import { useEffect } from "react";
import { useState } from "react";
import { NavLink } from "react-router-dom";
import ProductContext from "../../contexts/ProductContext";
import InPageContactUs from "../shared/InPageContactUs";
import UserFooter from "../shared/UserFooter";
import UserNavigation from "../shared/UserNavigation";

const ProductSearch = () => {
  const [searchTerm, setSearchTerm] = useState("");
  const [lastSearched, setLastSearched]= useState('');
  const { search, productList } = useContext(ProductContext);

  const handleSearch = (e) => {
    const value = e.target.value;
    setSearchTerm(value);
  };
  const doSearch = (e) => {
    if (e.key === "Enter") {
      if (searchTerm !== "") {
        search(searchTerm);
        setLastSearched(searchTerm);
      }
    }
  };
  useEffect(()=> {
    if(localStorage.getItem('searchTerm') !== null)  {
        const tempSearchTerm= JSON.parse(localStorage.getItem('searchTerm'));
        setSearchTerm(tempSearchTerm);
        setLastSearched(tempSearchTerm);
        search(tempSearchTerm);
    }
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
            <h2 class="title">نتیجه جستوجوی " {lastSearched} "</h2>
            <div class="text">
              <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
            </div>
            <div
              className="mt-5"
              style={{
                width: "80%",
                margin: "auto",
              }}
            >
              <input
                type="text"
                style={{
                  width: "100%",
                  height: "40px",
                  fontSize: "25px",
                  outline: "none",
                  border: "1px solid gray",
                  borderRadius: "20px",
                  padding: "15px",
                }}
                onChange={handleSearch}
                onKeyDown={doSearch}
                value={searchTerm}
              />
            </div>
          </div>
        </header>

        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="filters">
                <div class="filter-scroll-list">
                  <div class="filter-header d-block d-sm-none">
                    <span class="h4">محصولات فیلتر</span>
                    <br />
                    گزینه های خود را انتخاب کنید
                    <hr />
                  </div>

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

            <div class="col-lg-9">
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
                    <a
                      href="javascript:void(0);"
                      class="toggle-filters-mobile d-inline-block d-md-none"
                    >
                      <span
                        class="spinner-grow spinner-grow-sm text-warning"
                        role="status"
                        aria-hidden="true"
                      ></span>
                      <i class="fa fa-sliders"></i>
                    </a>
                  </span>
                </div>
              </div>

              <div class="row">
                {productList.map((item) => {
                  return (
                    <div class="col-12">
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
                        <div class="figure-list">
                          <NavLink to={`/product/view/${item.slug}`}>
                            <span class="badge badge-warning">-20%</span>
                            <div class="image">
                              <a>
                                <img
                                  src={`http://localhost:8000/product/image/${item.avatar_image}`}
                                  alt=""
                                />
                              </a>
                            </div>
                            <div class="text">
                              <h2 class="title h4">
                                <a href="product.html">{item.title}</a>
                              </h2>
                              {item.discount === null ? (
                                <>
                                  <sup>{item.price} تومان</sup>
                                </>
                              ) : (
                                <>
                                  <sub>{item.price} تومان</sub>
                                  <sup>
                                    {item.price -
                                      (item.price * item.discount) / 100}{" "}
                                    تومان
                                  </sup>
                                </>
                              )}
                              <span class="description clearfix">
                                {item.summary}
                              </span>
                            </div>
                          </NavLink>
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
      <InPageContactUs />
      <UserFooter />
    </div>
  );
};

export default ProductSearch;
