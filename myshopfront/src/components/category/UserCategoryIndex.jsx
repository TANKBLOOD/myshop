import "../../styles/shared/user-css/animate.css";
import "../../styles/shared/user-css/font-awesome.css";
import "../../styles/shared/user-css/ion-range-slider.css";
import "../../styles/shared/user-css/linear-icons.css";
import "../../styles/shared/user-css/magnific-popup.css";
import "../../styles/shared/user-css/owl.carousel.css";
import "../../styles/shared/user-css/theme.css";
import "../../styles/shared/toImportFonts.css";
//images import
import product1 from "../../styles/shared/user-css/assets/images/product-1.jpg";
import product2 from "../../styles/shared/user-css/assets/images/product-2.jpg";
import product3 from "../../styles/shared/user-css/assets/images/product-3.jpg";
import product4 from "../../styles/shared/user-css/assets/images/product-4.jpg";
import product5 from "../../styles/shared/user-css/assets/images/product-5.jpg";
import product6 from "../../styles/shared/user-css/assets/images/product-6.jpg";
//end images import
import UserNavigation from "../shared/UserNavigation";
import AllCategoriesList from "./AllCategoriesList";
import UserFooter from "../shared/UserFooter";
import InPageContactUs from "../shared/InPageContactUs";
const UserCategoryIndex = () => {
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
            <h2 className="title">دسته بندی ها</h2>
          </div>
        </header>

        <div className="container">
          <div className="row">
            <div className="col-6 col-lg-4">
              <article>
                <div className="figure-block">
                  <div className="image">
                    <a href="products-grid.html">
                      <img src={product1} alt="" width="360" />
                    </a>
                  </div>
                  <div className="text">
                    <h2 className="title h4">
                      {" "}
                      <a href="products-grid.html">آشپزخانه</a>
                    </h2>
                  </div>
                </div>
              </article>
            </div>

            <div className="col-6 col-lg-4">
              <article>
                <div className="figure-block">
                  <div className="image">
                    <a href="products-grid.html">
                      <img src={product2} alt="" width="360" />
                    </a>
                  </div>
                  <div className="text">
                    <h2 className="title h4">
                      {" "}
                      <a href="products-grid.html">هال</a>
                    </h2>
                  </div>
                </div>
              </article>
            </div>

            <div className="col-6 col-lg-4">
              <article>
                <div className="figure-block">
                  <div className="image">
                    <a href="products-grid.html">
                      <img src={product3} alt="" width="360" />
                    </a>
                  </div>
                  <div className="text">
                    <h2 className="title h4">
                      {" "}
                      <a href="products-grid.html">پله ها</a>
                    </h2>
                  </div>
                </div>
              </article>
            </div>

            <div className="col-6 col-lg-4">
              <article>
                <div className="figure-block">
                  <div className="image">
                    <a href="products-grid.html">
                      <img src={product4} alt="" width="360" />
                    </a>
                  </div>
                  <div className="text">
                    <h2 className="title h4">
                      {" "}
                      <a href="products-grid.html">برنامه ریزی پروژه</a>
                    </h2>
                  </div>
                </div>
              </article>
            </div>

            <div className="col-6 col-lg-4">
              <article>
                <div className="figure-block">
                  <div className="image">
                    <a href="products-grid.html">
                      <img src={product5} alt="" width="360" />
                    </a>
                  </div>
                  <div className="text">
                    <h2 className="title h4">
                      {" "}
                      <a href="products-grid.html">مبلمان</a>
                    </h2>
                  </div>
                </div>
              </article>
            </div>

            <div className="col-6 col-lg-4">
              <article>
                <div className="figure-block">
                  <div className="image">
                    <a href="products-grid.html">
                      <img src={product6} alt="" width="360" />
                    </a>
                  </div>
                  <div className="text">
                    <h2 className="title h4">
                      {" "}
                      <a href="products-grid.html">اتاق خواب</a>
                    </h2>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <AllCategoriesList />
        </div>
      </section>
      <InPageContactUs />
      <UserFooter />
    </div>
  );
};

export default UserCategoryIndex;
