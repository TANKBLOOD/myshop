import { useContext, useEffect } from "react";
import { NavLink } from "react-router-dom";
import ProductContext from "../../contexts/ProductContext";
import '../../styles/shared/addon.css';
const PopularProducts = () => {
  const { getPopularProducts, popularProducts, applyPopularProducts } = useContext(ProductContext);
  useEffect(() => {
    getPopularProducts();
    applyPopularProducts();
  }, []);
  return (
    <section className="products">
      <header>
        <div className="container">
          <h2 className="title">محصولات محبوب</h2>
          <div className="text">
            <p>
              مطابقت کامل خود را پیدا کنید{" "}
              {/* <a href="products-grid.html" className="btn btn-main">
                مشاهده همه
              </a> */}
            </p>
          </div>
        </div>
      </header>

      <div className="container">
        <div className="row">
          {popularProducts.map((item) => {
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
                  <NavLink to={`/product/view/${item.slug}`}>
                  <div className="figure-grid">
                    <div className="image article-img">
                      <img
                        src={`http://localhost:8000/product/image/${item.avatar_image}`}
                        alt=""
                      />
                    </div>
                    <div className="text">
                      <h2 className="title h4">
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
                      <span className="description clearfix">
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
