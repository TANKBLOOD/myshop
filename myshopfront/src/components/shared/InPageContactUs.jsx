import gallery from "../../styles/shared/user-css/assets/images/gallery-1.jpg";

const InPageContactUs = () => {
    return (
        <section className="banner">
        <div className="container-fluid">
          <div
            className="banner-image"
            style={{
              backgroundImage:
                `url(${gallery})`,
            }}
          >
            <header>
              <div className="container">
                <h2 className="h2 title">در تماس باش!</h2>
                <div className="text">
                  <p>
                    اولین کسی باشید که در مورد تمام ویژگی های داخلی جدید مطلع
                    شوید
                  </p>
                </div>
              </div>
            </header>

            <div className="container">
              <div className="row align-items-center">
                <div className="col-md-4">
                  <input
                    type="email"
                    className="form-control"
                    name="name"
                    value=""
                    placeholder="ایمیل خود را وارد کنید"
                  />
                </div>
                <div className="col-md-4">
                  <a href="#" className="btn btn-clean">
                    اکنون مشترک شوید
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    );
}
 
export default InPageContactUs;