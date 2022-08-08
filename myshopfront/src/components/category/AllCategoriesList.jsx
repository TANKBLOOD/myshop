import armchair from "../../styles/shared/user-css/assets/icons/icon-armchair.svg";
import sofa from "../../styles/shared/user-css/assets/icons/icon-sofa.svg";
import chair from "../../styles/shared/user-css/assets/icons/icon-chair.svg";
import dining from "../../styles/shared/user-css/assets/icons/icon-dining.svg";
import mediacabinet from "../../styles/shared/user-css/assets/icons/icon-mediacabinet.svg";
import table from "../../styles/shared/user-css/assets/icons/icon-table.svg";
import bookcase from "../../styles/shared/user-css/assets/icons/icon-bookcase.svg";
import bedroom from "../../styles/shared/user-css/assets/icons/icon-bedroom.svg";
import nightstand from "../../styles/shared/user-css/assets/icons/icon-nightstand.svg";
import kidsroom from "../../styles/shared/user-css/assets/icons/icon-kidsroom.svg";
import kitchen from "../../styles/shared/user-css/assets/icons/icon-kitchen.svg";
import wardrobe from "../../styles/shared/user-css/assets/icons/icon-wardrobe.svg";
import shocabinet from "../../styles/shared/user-css/assets/icons/icon-shocabinet.svg";
import office from "../../styles/shared/user-css/assets/icons/icon-office.svg";
import barset from "../../styles/shared/user-css/assets/icons/icon-barset.svg";
import light from "../../styles/shared/user-css/assets/icons/icon-light.svg";
import carpet from "../../styles/shared/user-css/assets/icons/icon-carpet.svg";
import accessories from "../../styles/shared/user-css/assets/icons/icon-accessories.svg";
import { useContext, useEffect } from "react";
import CategoryContext from "../../contexts/CategoryContext";

const AllCategoriesList = () => {
  const { categoryList, getCategories } = useContext(CategoryContext);
  useEffect(() => {
    getCategories();
  }, []);
  return (
    <section className="icons-category">
      <header>
        <div className="container">
          <h2 className="title">همه دسته بندی ها</h2>
        </div>
      </header>

      <div className="container">
        <div className="row">
          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={sofa} alt="Alternate Text" />
                </div>
                <figcaption>مبل</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={armchair} alt="Alternate Text" />
                </div>
                <figcaption>صندلی راحتی</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={chair} alt="Alternate Text" />
                </div>
                <figcaption>صندلی ها</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={dining} alt="Alternate Text" />
                </div>
                <figcaption>میز نهارخوری</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={mediacabinet} alt="Alternate Text" />
                </div>
                <figcaption>ذخیره سازی رسانه</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={table} alt="Alternate Text" />
                </div>
                <figcaption>جداول</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={bookcase} alt="Alternate Text" />
                </div>
                <figcaption>قفسه کتاب</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={bedroom} alt="Alternate Text" />
                </div>
                <figcaption>اتاق خواب</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={nightstand} alt="Alternate Text" />
                </div>
                <figcaption>تختخواب</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={kidsroom} alt="Alternate Text" />
                </div>
                <figcaption>اتاق کودکان</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={kitchen} alt="Alternate Text" />
                </div>
                <figcaption>آشپزخانه</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={wardrobe} alt="Alternate Text" />
                </div>
                <figcaption>جا رختی</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={shocabinet} alt="Alternate Text" />
                </div>
                <figcaption>جا کفشی</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={office} alt="Alternate Text" />
                </div>
                <figcaption>دفتر</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={barset} alt="Alternate Text" />
                </div>
                <figcaption>ست های میله ای</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={light} alt="Alternate Text" />
                </div>
                <figcaption>لامپ</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={carpet} alt="Alternate Text" />
                </div>
                <figcaption>فرش</figcaption>
              </figure>
            </a>
          </div>

          <div className="col-6 col-md-2">
            <a href="#">
              <figure>
                <div className="image">
                  <img src={accessories} alt="Alternate Text" />
                </div>
                <figcaption>تجهیزات جانبی</figcaption>
              </figure>
            </a>
          </div>
          {categoryList.map((category) => {
            return (
              <div className="col-6 col-md-2" key={category.id}>
                <a href="#">
                  <figure>
                    <div className="image">
                      <img src={`http://localhost:8000/myimage/${category.avatar_image}`} alt="Alternate Text" />
                    </div>
                    <figcaption>{category.title}</figcaption>
                  </figure>
                </a>
              </div>
            );
          })}
        </div>
      </div>
    </section>
  );
};

export default AllCategoriesList;
