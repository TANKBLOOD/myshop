import { useContext, useEffect } from "react";
import { NavLink } from "react-router-dom";
import ProductContext from "../../contexts/ProductContext";

const PopularProducts = () => {
  const { getPopularProducts, popularProducts } = useContext(ProductContext);
  useEffect(() => {
    getPopularProducts();
  }, []);
  return (
    <section class="products">
      <header>
        <div class="container">
          <h2 class="title">محصولات محبوب</h2>
          <div class="text">
            <p>
              مطابقت کامل خود را پیدا کنید{" "}
              {/* <a href="products-grid.html" class="btn btn-main">
                مشاهده همه
              </a> */}
            </p>
          </div>
        </div>
      </header>

      <div class="container">
        <div class="row">
          {popularProducts.map((item) => {
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
                  <NavLink to={`/product/view/${item.slug}`}>
                  <div class="figure-grid">
                    <div class="image">
                      <img
                        src={`http://localhost:8000/product/image/${item.avatar_image}`}
                        alt=""
                      />
                    </div>
                    <div class="text">
                      <h2 class="title h4">
                        <a>{item.title}</a>
                      </h2>
                      {item.discount === null ? (
                        <>
                          <sup>{item.price} تومان</sup>
                        </>
                      ) : (
                        <>
                          <sub>{item.price} تومان</sub>
                          <sup>
                            {item.price - (item.price * item.discount) / 100}{" "}
                            تومان
                          </sup>
                        </>
                      )}
                      <span class="description clearfix">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                        چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                        بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                      </span>
                    </div>
                  </div>
                  </NavLink>
                </article>
              </div>
            );
          })}
        </div>
      </div>
    </section>
  );
};

export default PopularProducts;
