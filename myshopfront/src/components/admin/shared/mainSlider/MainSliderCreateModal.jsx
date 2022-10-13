import axios from "axios";
import { useState } from "react";

const MainSliderCreateModal = ({ closeModal }) => {
  const [formInfo, setFormInfo] = useState({
    title: "",
    redirect_url: "",
    interval: "",
    image: "",
  });
  const [categoryList, setCategoryList] = useState([]);
  const handleInputChange = (e) => {
    const name = e.target.name;
    const value = e.target.value;

    setFormInfo((pervInfo) => {
      return {
        ...pervInfo,
        [name]: value,
      };
    });
  };
  const handleImageChange = (e) => {
    setFormInfo((pervInfo) => {
      return {
        ...pervInfo,
        image: e.target.files[0],
      };
    });
  };
  const createSlider = () => {
    const sliderData = new FormData();
    Object.entries(formInfo).forEach(([key, val]) => {
      sliderData.append(key, val);
    });
    const url = "http://127.0.0.1:8000/api/mainSlider/create";
    axios.post(url, sliderData);
  };
  return (
    <div
      id="myModal"
      className="custom-modal"
      dir="rtl"
      style={{
        textAlign: "right",
      }}
    >
      <div className="custom-modal-content">
        <div className="custom-modal-header">
          <span className="close" onClick={closeModal}>
            &times;
          </span>
          <h2>ثبت اسلایدر جدید</h2>
        </div>
        <div className="custom-modal-body">
          <form
            onSubmit={(e) => {
              e.preventDefault();
              createSlider();
            }}
          >
            <div className="form-group">
              <label htmlFor="title">عنوان</label>
              <input
                type="text"
                name="title"
                id="title"
                className="form-control"
                value={formInfo.title}
                onChange={handleInputChange}
              />
            </div>
            <div className="form-group">
              <label htmlFor="catMetaDescription">لینک</label>
              <input
                type="text"
                name="redirect_url"
                id="redirect_url"
                className="form-control"
                value={formInfo.redirect_url}
                onChange={handleInputChange}
              />
            </div>
            <div className="form-group">
              <label htmlFor="catDescription">زمان توقف(به تانیه)</label>
              <input
                name="interval"
                id="interval"
                className="form-control"
                style={{
                  resize: "none",
                }}
                value={formInfo.interval}
                onChange={handleInputChange}
              />
            </div>
            <div className="form-group">
              <label htmlFor="catAvatarImage">تصویر اسلایدر</label>
              <input
                type="file"
                name="image"
                id="image"
                className="form-control"
                onChange={handleImageChange}
              />
            </div>
            <button className="btn btn-primary  mt-3">ایجاد</button>
          </form>
        </div>
        <div className="custom-modal-footer">{/* <h3>Modal Footer</h3> */}</div>
      </div>
    </div>
  );
};

export default MainSliderCreateModal;
