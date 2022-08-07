import { useContext } from "react";
import { useEffect } from "react";
import ProductContext from "../../contexts/ProductContext";
import AdminSideNav from "../shared/AdminSideNav";
import chairImage from "../../styles/shared/assets/images/gallery/chair4.jpg";
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
        <div class="container-fluid">
          <div class="row page-titles">
            <div class="col-md-5 align-self-center">
              <h4 class="text-themecolor">Products</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
              <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Products</li>
                </ol>
                <button
                  type="button"
                  class="btn btn-info d-none d-lg-block m-l-15"
                >
                  <i class="fa fa-plus-circle"></i> Create New
                </button>
              </div>
            </div>
          </div>
          <div class="row">
            {productList.map((product) => {
              return (
                <div class="col-lg-3 col-md-6" key={product.id}>
                  <div class="card">
                    <div class="card-body">
                      <div class="product-img">
                        <img
                          //   src={`http://localhost:8000/product/image/${product.avatar_image}`}
                          style={{
                            maxHeight: '300px',
                            height: '200px'
                          }}
                          src={`http://localhost:8000/product/image/${product.avatar_image}`}
                        />
                        <div class="pro-img-overlay">
                          <a href="javascript:void(0)" class="bg-info">
                            <i class="ti-marker-alt"></i>
                          </a>
                          <a href="javascript:void(0)" class="bg-danger">
                            <i class="ti-trash"></i>
                          </a>
                        </div>
                      </div>
                      <NavLink to={`/editProduct/${product.slug}`}>
                        <div class="product-text">
                          <span class="pro-price bg-primary">{`${product.price} ریال`}</span>
                          <h5 class="card-title m-b-0">{product.title}</h5>
                          <small class="text-muted db">
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
