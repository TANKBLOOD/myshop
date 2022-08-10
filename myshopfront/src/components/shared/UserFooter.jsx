import "../../styles/shared/toImportFonts.css";

const UserFooter = () => {
  return (
    <footer>
      <div className="container-fluid">
        <div className="footer-wrap">
          <div className="container">
            <div className="footer-showroom">
              <div className="text-center">
                <a href="/">
                  <img
                    src="assets/images/divano-logo.png"
                    alt=""
                    width="130"
                    height="55"
                  />
                </a>
              </div>
            </div>

            <div className="footer-links">
              <div className="row">
                <div className="col-md-2">
                  <h5>مرور کردن توسط</h5>
                  <ul>
                    <li>
                      <a href="#">نام تجاری</a>
                    </li>
                    <li>
                      <a href="#"> محصول</a>
                    </li>
                    <li>
                      <a href="#">دسته بندی</a>
                    </li>
                    <li>
                      <a href="#">پروژه ها</a>
                    </li>
                    <li>
                      <a href="#">حراجی</a>
                    </li>
                  </ul>
                </div>
                <div className="col-md-2">
                  <h5>لینک های سریع</h5>
                  <ul>
                    <li>
                      <a href="#">وانت در فروشگاه</a>
                    </li>
                    <li>
                      <a href="#">کارت هدیه</a>
                    </li>
                    <li>
                      <a href="#">پس از پرداخت</a>
                    </li>
                    <li>
                      <a href="#">خرید کنید</a>
                    </li>
                    <li>
                      <a href="#">سالات متداول</a>
                    </li>
                  </ul>
                </div>
                <div className="col-md-2">
                  <h5>اطلاعات سفارش</h5>
                  <ul>
                    <li>
                      <a href="#">وضعیت سفارش </a>
                    </li>
                    <li>
                      <a href="#">مبلغ پرداختی</a>
                    </li>
                    <li>
                      <a href="#">حمل دریایی</a>
                    </li>
                    <li>
                      <a href="#">برمی گردد</a>
                    </li>
                    <li>
                      <a href="#">تاریخچه سفارش ها</a>
                    </li>
                  </ul>
                </div>
                <div className=" offset-md-3 col-md-3">
                  <h5>برای دریافت خبرنامه ما ثبت نام کنید</h5>
                  <p>
                    <i>
                      برای ثبت نام در ایمیل های ماهانه ما و دریافت پیشنهادات
                      تبلیغاتی ، آدرس ایمیل خود را اضافه کنید.
                    </i>
                  </p>
                  <div className="form-group form-newsletter">
                    <input
                      className="form-control"
                      type="text"
                      name="email"
                      value=""
                      placeholder="آدرس ایمیل"
                    />
                    <input
                      type="submit"
                      className="btn btn-secondary btn-sm"
                      value="اشتراک در"
                    />
                  </div>
                </div>
              </div>
            </div>

            <div className="footer-social">
              <div className="row">
                <div className="col-sm-6">
                  <a href="#" target="_blank">
                    <i className="fa fa-download"></i> دانلود قالب دایوانا
                  </a>{" "}
                  &nbsp; | &nbsp; <a href="#">نقشه سایت</a> &nbsp; | &nbsp;{" "}
                  <a href="#">سیاست حفظ حریم خصوصی</a>
                </div>
                <div className="col-sm-6 links">
                  <ul>
                    <li>
                      <a href="#">
                        <i className="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i className="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i className="fa fa-google-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i className="fa fa-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i className="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default UserFooter;
