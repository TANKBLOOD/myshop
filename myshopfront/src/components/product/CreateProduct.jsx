import "../../styles/shared/dist/css/pages/ecommerce.css";
import AdminSideNav from "../shared/AdminSideNav";
import chairImage from "../../styles/shared/assets/images/gallery/chair.jpg";
import { useContext, useState } from "react";
import CategoryContext from "../../contexts/CategoryContext";
import { useEffect } from "react";

const CreateProduct = () => {
  const { categoryList, getCategories } = useContext(CategoryContext);
  const [productInfo, setProductInfo] = useState({
    title: "",
    meta_title: "",
    category_id: 0,
    price: "",
    discount: "",
    summary: "",
    quantity: "",
    publish: "draft",
    productSpecifications: {},
    forceOutOfStack: false,
  });
  useEffect(() => {
    getCategories();
  }, []);
  const handleInputChange = (e) => {
    const name = e.target.name;
    const value = e.target.value;

    setProductInfo((prevInfo) => {
      return {
        ...prevInfo,
        [name]: value,
      };
    });
    console.log(productInfo)
  };
  const handleCheckboxChange = (e) => {
    const name = e.target.name;
    const value = e.target.checked;

    setProductInfo((prevInfo) => {
      return {
        ...prevInfo,
        [name]: value,
      };
    });


    console.log(productInfo)
  };

  const handleProductSpecificationInputChange = (e) => {
    const name = e.target.name;
    const value = e.target.value;

    if (value !== "") {
      setProductInfo((prevInfo) => {
        return {
          ...prevInfo,
          productSpecifications: {
            ...prevInfo.productSpecifications,
            [name]: value,
          },
        };
      });
    } else {
      setProductInfo((prevInfo) => {
        const copy = { ...prevInfo };

        delete copy["productSpecifications"][name];

        return copy;
      });
    }

    console.log(productInfo.productSpecifications);
  };
  return (
    <>
      <AdminSideNav />
      <div
        className="main-content"
        dir="rtl"
        style={{
          margin: "",
        }}
      >
        <div className="container-fluid">
          <div className="row page-titles">
            <div className="col-md-5 align-self-center">
              <h4 className="text-themecolor">ایجاد محصول</h4>
            </div>
            <div className="col-md-7 align-self-center text-right">
              <div className="d-flex justify-content-end align-items-center">
                <ol className="breadcrumb">
                  <li className="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                  </li>
                  <li className="breadcrumb-item active">Products edit</li>
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
            <div className="col-lg-12">
              <div className="card">
                <div className="card-body">
                  <form action="#">
                    <div className="form-body">
                      <h5 className="card-title">اطلاعات محصول</h5>
                      <hr />
                      <div className="row">
                        <div className="col-md-6">
                          <div className="form-group">
                            <label className="control-label">نام محصول</label>
                            <input
                              type="text"
                              id="title"
                              name="title"
                              className="form-control"
                              placeholder="مثال: مبل تک نفره رویال"
                              onChange={handleInputChange}
                              value={productInfo.title}
                            />
                          </div>
                        </div>
                        <div className="col-md-6">
                          <div className="form-group">
                            <label className="control-label">
                              عنوان تکمیلی
                            </label>
                            <input
                              type="text"
                              id="lastName"
                              name="meta_title"
                              className="form-control"
                              placeholder="مثال: مبل 8 نفری راحت با فرم ابر و باد"
                              onChange={handleInputChange}
                              value={productInfo.meta_title}
                            />
                          </div>
                        </div>
                      </div>
                      <div className="row">
                        <div className="col-md-6">
                          <div className="form-group">
                            <label className="control-label">دسته</label>
                            <select
                              className="form-control"
                              data-placeholder="Choose a Category"
                              tabIndex="1"
                              name="category_id"
                              onChange={handleInputChange}
                              value={productInfo.category_id}
                            >
                              <option value="0" disabled>
                                انتخاب دسته
                              </option>
                              {categoryList.map((category) => {
                                return (
                                  <option value={category.id} key={category.id}>
                                    {category.title}
                                  </option>
                                );
                              })}
                            </select>
                          </div>
                        </div>
                        <div className="col-md-6">
                          <div className="form-group">
                            <label>وضعیت انتشار در سایت</label>
                            <br />
                            <div className="custom-control custom-radio custom-control-inline">
                              <input
                                type="radio"
                                id="customRadioInline1"
                                name="publish"
                                className="custom-control-input"
                                value= "publish"
                                onChange={handleInputChange}
                              />
                              <label
                                className="custom-control-label"
                                htmlFor="customRadioInline1"
                              >
                                انتشار
                              </label>
                            </div>
                            <div className="custom-control custom-radio custom-control-inline">
                              <input
                                type="radio"
                                id="customRadioInline2"
                                name="publish"
                                className="custom-control-input"
                                value="draft"
                                onChange={handleInputChange}
                              />
                              <label
                                className="custom-control-label"
                                htmlFor="customRadioInline2"
                              >
                                معلق
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div className="row">
                        <div className="col-md-6">
                          <div className="form-group">
                            <label>قیمت</label>
                            <div className="input-group mb-3">
                              <input
                                type="text"
                                className="form-control"
                                placeholder="مثال: 10000000"
                                aria-label="price"
                                aria-describedby="basic-addon1"
                                name="price"
                                onChange={handleInputChange}
                                value={productInfo.price}
                              />
                              <div className="input-group-prepend">
                                <span
                                  className="input-group-text"
                                  id="basic-addon1"
                                >
                                  <i className="ti-money"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div className="col-md-6">
                          <div className="form-group">
                            <label>تخفیف</label>
                            <div className="input-group mb-3">
                              <input
                                type="text"
                                className="form-control"
                                placeholder="حداکثر 99"
                                aria-label="Discount"
                                aria-describedby="basic-addon2"
                                name="discount"
                                onChange={handleInputChange}
                                value={productInfo.discount}
                              />
                              <div className="input-group-prepend">
                                <span
                                  className="input-group-text"
                                  id="basic-addon2"
                                >
                                  <i className="ti-cut"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h5 className="card-title m-t-40">توضیحات کلی محصول</h5>
                      <div className="row">
                        <div className="col-md-12 ">
                          <div className="form-group">
                            <textarea
                              className="form-control"
                              rows="4"
                              name="summary"
                              onChange={handleInputChange}
                              value={productInfo.summary}
                            ></textarea>
                          </div>
                        </div>
                      </div>
                      <div className="row">
                        <div className="col-md-6">
                          <div className="form-group">
                            <label>تعداد موجودی</label>
                            <input
                              type="text"
                              className="form-control"
                              name="quantity"
                              onChange={handleInputChange}
                              value={productInfo.quantity}
                            />
                          </div>
                        </div>
                        <div className="col-md-6">
                          <div className="form-group">
                            <label>اعلام عدم موجودی</label>
                            <input
                              type="checkbox"
                              className="form-check-input mr-3"
                              style={{
                                display: "block",
                              }}
                              name="forceOutOfStack"
                              onChange={handleCheckboxChange}
                              value={productInfo.forceOutOfStack}
                            />
                          </div>
                        </div>
                        <div className="col-md-3 flex">
                          <h5 className="card-title m-t-20">تصویر شاخص</h5>
                          <div className="product-img d-flex flex-row">
                            <div className="m-5">
                              <img src={chairImage} />
                              <div className="pro-img-overlay">
                                <a
                                  href="javascript:void(0)"
                                  className="bg-info"
                                >
                                  <i className="ti-marker-alt"></i>
                                </a>{" "}
                                <a
                                  href="javascript:void(0)"
                                  className="bg-danger"
                                >
                                  <i className="ti-trash"></i>
                                </a>
                              </div>
                              <br />
                              <div className="fileupload btn btn-info waves-effect waves-light">
                                <span>
                                  <i className="ion-upload m-r-5"></i>Upload
                                  Anonther Image
                                </span>
                                <input type="file" className="upload" />
                              </div>
                            </div>
                            <div className="m-5">
                              <img src={chairImage} />
                              <div className="pro-img-overlay">
                                <a
                                  href="javascript:void(0)"
                                  className="bg-info"
                                >
                                  <i className="ti-marker-alt"></i>
                                </a>{" "}
                                <a
                                  href="javascript:void(0)"
                                  className="bg-danger"
                                >
                                  <i className="ti-trash"></i>
                                </a>
                              </div>
                              <br />
                              <div className="fileupload btn btn-info waves-effect waves-light">
                                <span>
                                  <i className="ion-upload m-r-5"></i>Upload
                                  Anonther Image
                                </span>
                                <input type="file" className="upload" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div className="row">
                        <div className="col-md-12">
                          <h5 className="card-title m-t-40">مشخصات محصول</h5>
                          <div className="table-responsive">
                            <table className="table table-bordered td-padding">
                              <tbody>
                                <tr>
                                  <td>
                                    <label className="mr-2">برند</label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="برند"
                                      name="brand"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                  <td>
                                    <label className="mr-2">تعداد</label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="تعداد"
                                      name="count"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label className="mr-2">جنس بدنه</label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="جنس بدنه"
                                      name="bodyMaterial"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                  <td>
                                    <label className="mr-2">جنس پارچه</label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="جنس پارچه"
                                      name="fabricMaterial"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label className="mr-2">جنس نشیمن</label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="جنس نشیمن"
                                      name="seatMaterial"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                  <td>
                                    <label className="mr-2">جنس پایه</label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="جنس پایه"
                                      name="legMaterial"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label className="mr-2">نوع دوخت</label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="نوع دوخت"
                                      name="sewingType"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                  <td>
                                    <label className="mr-2">مکانیزم</label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="مکانیزم"
                                      name="mechanism"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label className="mr-2">تراکم اسفنج</label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="تراکم اسفنج"
                                      name="spongeDensity"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                  <td>
                                    <label className="mr-2">تعداد کوسن</label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="تعداد کوسن"
                                      name="cushionCount"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label className="mr-2">
                                      وزن قابل تحمل
                                    </label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="وزن قابل تحمل"
                                      name="tolerableWeight"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                  <td>
                                    <label className="mr-2">
                                      ضمانت
                                    </label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="ضمانت"
                                      name="warranty"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                  <label className="mr-2">
                                      خدمات پس از فروش
                                    </label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="خدمات پس از فروش"
                                      name="afterSalesService"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                  <td>
                                  <label className="mr-2">
                                      شرایط فروش اقساطی
                                    </label>
                                    <input
                                      type="text"
                                      className="form-control"
                                      placeholder="شرایط فروش اقساطی"
                                      name="leasing"
                                      onChange={
                                        handleProductSpecificationInputChange
                                      }
                                    />
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <hr />{" "}
                    </div>
                    <div className="form-actions m-t-40">
                      <button type="submit" className="btn btn-success">
                        {" "}
                        <i className="fa fa-check"></i> Save
                      </button>
                      <button type="button" className="btn btn-dark">
                        Cancel
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div className="right-sidebar">
            <div className="slimscrollright">
              <div className="rpanel-title">
                {" "}
                Service Panel{" "}
                <span>
                  <i className="ti-close right-side-toggle"></i>
                </span>{" "}
              </div>
              <div className="r-panel-body">
                <ul id="themecolors" className="m-t-20">
                  <li>
                    <b>With Light sidebar</b>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-default"
                      className="default-theme working"
                    >
                      1
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-green"
                      className="green-theme"
                    >
                      2
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-red"
                      className="red-theme"
                    >
                      3
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-blue"
                      className="blue-theme"
                    >
                      4
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-purple"
                      className="purple-theme"
                    >
                      5
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-megna"
                      className="megna-theme"
                    >
                      6
                    </a>
                  </li>
                  <li className="d-block m-t-30">
                    <b>With Dark sidebar</b>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-default-dark"
                      className="default-dark-theme "
                    >
                      7
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-green-dark"
                      className="green-dark-theme"
                    >
                      8
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-red-dark"
                      className="red-dark-theme"
                    >
                      9
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-blue-dark"
                      className="blue-dark-theme"
                    >
                      10
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-purple-dark"
                      className="purple-dark-theme"
                    >
                      11
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-megna-dark"
                      className="megna-dark-theme "
                    >
                      12
                    </a>
                  </li>
                </ul>
                <ul className="m-t-20 chatonline">
                  <li>
                    <b>Chat option</b>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/1.jpg"
                        alt="user-img"
                        className="img-circle"
                      />{" "}
                      <span>
                        Varun Dhavan{" "}
                        <small className="text-success">online</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/2.jpg"
                        alt="user-img"
                        className="img-circle"
                      />{" "}
                      <span>
                        Genelia Deshmukh{" "}
                        <small className="text-warning">Away</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/3.jpg"
                        alt="user-img"
                        className="img-circle"
                      />{" "}
                      <span>
                        Ritesh Deshmukh{" "}
                        <small className="text-danger">Busy</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/4.jpg"
                        alt="user-img"
                        className="img-circle"
                      />{" "}
                      <span>
                        Arijit Sinh{" "}
                        <small className="text-muted">Offline</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/5.jpg"
                        alt="user-img"
                        className="img-circle"
                      />{" "}
                      <span>
                        Govinda Star{" "}
                        <small className="text-success">online</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/6.jpg"
                        alt="user-img"
                        className="img-circle"
                      />{" "}
                      <span>
                        John Abraham
                        <small className="text-success">online</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/7.jpg"
                        alt="user-img"
                        className="img-circle"
                      />{" "}
                      <span>
                        Hritik Roshan
                        <small className="text-success">online</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/8.jpg"
                        alt="user-img"
                        className="img-circle"
                      />{" "}
                      <span>
                        Pwandeep rajan{" "}
                        <small className="text-success">online</small>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default CreateProduct;
