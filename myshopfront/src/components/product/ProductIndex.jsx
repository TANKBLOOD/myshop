import { useContext } from "react";
import { useEffect } from "react";
import ProductContext from "../../contexts/ProductContext";
import AdminSideNav from "../shared/AdminSideNav";
import chairImage from "../../styles/shared/assets/images/gallery/chair4.jpg";
import "../../styles/shared/dist/css/style.min.css";
import "../../styles/shared/dist/css/pages/ecommerce.css";
import { NavLink } from "react-router-dom";

const ProductIndex = () => {
  const { getProducts, productList } = useContext(ProductContext);
  useEffect(() => {
    getProducts();
  }, []);
  return (
    <>
      <AdminSideNav />
      <div
        className="main-content"
        dir="rtl"
        style={{
          margin: "",
          backgroundColor: "#edf1f5",
        }}
      >
        <div className="container-fluid">
          <div className="row page-titles">
            <div className="col-md-5 align-self-center">
              <h4 className="text-themecolor">Products</h4>
            </div>
            <div className="col-md-7 align-self-center text-right">
              <div className="d-flex justify-content-end align-items-center">
                <ol className="breadcrumb">
                  <li className="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                  </li>
                  <li className="breadcrumb-item active">Products</li>
                </ol>
                <button
                  type="button"
                  className="btn btn-info d-none d-lg-block m-l-15"
                >
                  <i className="fa fa-plus-circle"></i> Create New
                </button>
              </div>
            </div>
          </div>
          <div className="row">
            {productList.map((product) => {
              return (
                <div className="col-lg-3 col-md-6" key={product.id}>
                  <div className="card">
                    <div className="card-body">
                      <div className="product-img">
                        <img
                          //   src={`http://localhost:8000/product/image/${product.avatar_image}`}
                          style={{
                            maxHeight: '300px',
                            height: '200px'
                          }}
                          src={`http://localhost:8000/product/image/${product.avatar_image}`}
                        />
                        <div className="pro-img-overlay">
                          <a href="javascript:void(0)" className="bg-info">
                            <i className="ti-marker-alt"></i>
                          </a>
                          <a href="javascript:void(0)" className="bg-danger">
                            <i className="ti-trash"></i>
                          </a>
                        </div>
                      </div>
                      <NavLink to={`/editProduct/${product.slug}`}>
                        <div className="product-text">
                          <span className="pro-price bg-primary">{`${product.price} ریال`}</span>
                          <h5 className="card-title m-b-0">{product.title}</h5>
                          <small className="text-muted db">
                            {product.meta_title}
                          </small>
                        </div>
                      </NavLink>
                    </div>
                  </div>
                </div>
              );
            })}
          </div>
        </div>
      </div>
    </>
  );
};

export default ProductIndex;
