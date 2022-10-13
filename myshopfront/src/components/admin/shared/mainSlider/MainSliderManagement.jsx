import axios from "axios";
import { useState } from "react";
import AdminSideNav from "../../../shared/AdminSideNav";
import MainSliderCreateModal from "./MainSliderCreateModal";

const MainSliderManagement = () => {
  const [slidersList, setSlidersList] = useState([]);
  const [flags, setFlags] = useState({
    createSliderModal: false,
    editSliderModal: false,
  });
  const getMainSlider = () => {
    const url = "http://127.0.0.1:8000/api/mainSlider";
    axios
      .get(url)
      .then((res) => {
        console.log(res.data);
      })
      .catch((err) => {
        console.log("err");
      });
  };
  const showCreateSliderModal = () => {
    setFlags((prev) => {
      return {
        ...prev,
        createSliderModal: true,
      };
    });
  };
  const closeSliderModal= ()=> {
    setFlags((prev) => {
      return {
        ...prev,
        createSliderModal: false,
      };
    });
  }
  return (
    <>
      <AdminSideNav />
      <div className="main-content">
        <div className="container" dir="rtl">
          <h2>لیست اسلایدر ها</h2>
          <button className="btn btn-primary" onClick={showCreateSliderModal}>دسته جدید</button>
          <table className="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">ردیف</th>
                <th scope="col">تصویر</th>
                <th scope="col">عنوان</th>
                <th scope="col">لینک</th>
                <th scope="col">عملیات</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
      {flags.createSliderModal ? (
        <MainSliderCreateModal closeModal={closeSliderModal} />
      ) : null}
    </>
  );
};

export default MainSliderManagement;
