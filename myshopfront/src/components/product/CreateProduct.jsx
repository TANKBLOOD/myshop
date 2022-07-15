import "../../styles/shared/dist/css/pages/ecommerce.css";
import AdminSideNav from "../shared/AdminSideNav";
import chairImage from "../../styles/shared/assets/images/gallery/chair.jpg";
const CreateProduct = () => {
  return (
    <>
    <AdminSideNav />
      <div class="main-content" dir="rtl" style={{
        margin: ''
      }}>
        <div class="container-fluid">
          <div class="row page-titles">
            <div class="col-md-5 align-self-center">
              <h4 class="text-themecolor">Products edit</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
              <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Products edit</li>
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
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <form action="#">
                    <div class="form-body">
                      <h5 class="card-title">About Product</h5>
                      <hr />
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label">Product Name</label>
                            <input
                              type="text"
                              id="firstName"
                              class="form-control"
                              placeholder="Rounded Chair"
                            />{" "}
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label">Sub text</label>
                            <input
                              type="text"
                              id="lastName"
                              class="form-control"
                              placeholder="globe type chair for rest"
                            />{" "}
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label">Category</label>
                            <select
                              class="form-control"
                              data-placeholder="Choose a Category"
                              tabindex="1"
                            >
                              <option value="Category 1">Category 1</option>
                              <option value="Category 2">Category 2</option>
                              <option value="Category 3">Category 5</option>
                              <option value="Category 4">Category 4</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Status</label>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                              <input
                                type="radio"
                                id="customRadioInline1"
                                name="customRadioInline1"
                                class="custom-control-input"
                              />
                              <label
                                class="custom-control-label"
                                for="customRadioInline1"
                              >
                                Publish
                              </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input
                                type="radio"
                                id="customRadioInline2"
                                name="customRadioInline1"
                                class="custom-control-input"
                              />
                              <label
                                class="custom-control-label"
                                for="customRadioInline2"
                              >
                                Draft
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Price</label>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span
                                  class="input-group-text"
                                  id="basic-addon1"
                                >
                                  <i class="ti-money"></i>
                                </span>
                              </div>
                              <input
                                type="text"
                                class="form-control"
                                placeholder="price"
                                aria-label="price"
                                aria-describedby="basic-addon1"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Discount</label>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span
                                  class="input-group-text"
                                  id="basic-addon2"
                                >
                                  <i class="ti-cut"></i>
                                </span>
                              </div>
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Discount"
                                aria-label="Discount"
                                aria-describedby="basic-addon2"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <h5 class="card-title m-t-40">Product Description</h5>
                      <div class="row">
                        <div class="col-md-12 ">
                          <div class="form-group">
                            <textarea class="form-control" rows="4">
                              Lorem Ipsum available, but the majority have
                              suffered alteration in some form, by injected
                              humour, or randomised words which don't look even
                              slightly believable. but the majority have
                              suffered alteration in some form, by injected
                              humour
                            </textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Meta Title</label>
                            <input type="text" class="form-control" />{" "}
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Meta Keyword</label>
                            <input type="text" class="form-control" />{" "}
                          </div>
                        </div>
                        <div class="col-md-3">
                          <h5 class="card-title m-t-20">Upload Image</h5>
                          <div class="product-img">
                            {" "}
                            <img src={chairImage} />
                            <div class="pro-img-overlay">
                              <a href="javascript:void(0)" class="bg-info">
                                <i class="ti-marker-alt"></i>
                              </a>{" "}
                              <a href="javascript:void(0)" class="bg-danger">
                                <i class="ti-trash"></i>
                              </a>
                            </div>
                            <br />
                            <div class="fileupload btn btn-info waves-effect waves-light">
                              <span>
                                <i class="ion-upload m-r-5"></i>Upload Anonther
                                Image
                              </span>
                              <input type="file" class="upload" />{" "}
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <h5 class="card-title m-t-40">GENERAL INFO</h5>
                          <div class="table-responsive">
                            <table class="table table-bordered td-padding">
                              <tbody>
                                <tr>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Brand"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Stellar"
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Delivery Condition"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Knock Down"
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Seat Lock Included"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Yes"
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Type"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Office Chair"
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Style"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Contemporary &amp; Modern"
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Wheels Included"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Yes"
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Upholstery Included"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Yes"
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
                    <div class="form-actions m-t-40">
                      <button type="submit" class="btn btn-success">
                        {" "}
                        <i class="fa fa-check"></i> Save
                      </button>
                      <button type="button" class="btn btn-dark">
                        Cancel
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="right-sidebar">
            <div class="slimscrollright">
              <div class="rpanel-title">
                {" "}
                Service Panel{" "}
                <span>
                  <i class="ti-close right-side-toggle"></i>
                </span>{" "}
              </div>
              <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                  <li>
                    <b>With Light sidebar</b>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-default"
                      class="default-theme working"
                    >
                      1
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-green"
                      class="green-theme"
                    >
                      2
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-red"
                      class="red-theme"
                    >
                      3
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-blue"
                      class="blue-theme"
                    >
                      4
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-purple"
                      class="purple-theme"
                    >
                      5
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-megna"
                      class="megna-theme"
                    >
                      6
                    </a>
                  </li>
                  <li class="d-block m-t-30">
                    <b>With Dark sidebar</b>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-default-dark"
                      class="default-dark-theme "
                    >
                      7
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-green-dark"
                      class="green-dark-theme"
                    >
                      8
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-red-dark"
                      class="red-dark-theme"
                    >
                      9
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-blue-dark"
                      class="blue-dark-theme"
                    >
                      10
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-purple-dark"
                      class="purple-dark-theme"
                    >
                      11
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      data-skin="skin-megna-dark"
                      class="megna-dark-theme "
                    >
                      12
                    </a>
                  </li>
                </ul>
                <ul class="m-t-20 chatonline">
                  <li>
                    <b>Chat option</b>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/1.jpg"
                        alt="user-img"
                        class="img-circle"
                      />{" "}
                      <span>
                        Varun Dhavan <small class="text-success">online</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/2.jpg"
                        alt="user-img"
                        class="img-circle"
                      />{" "}
                      <span>
                        Genelia Deshmukh{" "}
                        <small class="text-warning">Away</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/3.jpg"
                        alt="user-img"
                        class="img-circle"
                      />{" "}
                      <span>
                        Ritesh Deshmukh <small class="text-danger">Busy</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/4.jpg"
                        alt="user-img"
                        class="img-circle"
                      />{" "}
                      <span>
                        Arijit Sinh <small class="text-muted">Offline</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/5.jpg"
                        alt="user-img"
                        class="img-circle"
                      />{" "}
                      <span>
                        Govinda Star <small class="text-success">online</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/6.jpg"
                        alt="user-img"
                        class="img-circle"
                      />{" "}
                      <span>
                        John Abraham<small class="text-success">online</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/7.jpg"
                        alt="user-img"
                        class="img-circle"
                      />{" "}
                      <span>
                        Hritik Roshan<small class="text-success">online</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <img
                        src="../assets/images/users/8.jpg"
                        alt="user-img"
                        class="img-circle"
                      />{" "}
                      <span>
                        Pwandeep rajan{" "}
                        <small class="text-success">online</small>
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
    