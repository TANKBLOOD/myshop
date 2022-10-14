import axios from "axios";
import { useEffect } from "react";
import { useState } from "react";
import AdminSideNav from "../../../shared/AdminSideNav";
import MainSliderCreateModal from "./MainSliderCreateModal";
import {
  BsFillTrashFill,
  BsFillPencilFill,
  BsFillEyeFill,
} from "react-icons/bs";
import MainSliderEditModal from "./MainSliderEditModal";

const MainSliderManagement = () => {
  const [slidersList, setSlidersList] = useState([]);
  const [flags, setFlags] = useState({
    createSliderModal: false,
    editSliderModal: false,
  });
  const [toEditSlider, setToEditSlider]= useState({});
  const getMainSlider = () => {
    const url = "http://127.0.0.1:8000/api/mainSlider/index";
    axios
      .get(url)
      .then((res) => {
        setSlidersList(res.data.sliders);
      })
      .catch((err) => {
        console.log("err");
      });
  };
  useEffect(() => {
    getMainSlider();
  }, []);
  const showCreateSliderModal = () => {
    setFlags((prev) => {
      return {
        ...prev,
        createSliderModal: true,
      };
    });
  };
  const closeSliderModal = () => {
    setFlags((prev) => {
      return {
        ...prev,
        createSliderModal: false,
      };
    });
  };
  const openEditModal = (item) => {
    setFlags((prev) => {
      return {
        ...prev,
        editSliderModal: true,
      };
    });
    setToEditSlider(item);
  };
  const closeEditModal = () => {
    setFlags((prev) => {
      return {
        ...prev,
        editSliderModal: false,
      };
    });
  };
  const confirmDelete = () => {};
  return (
    <>
      <AdminSideNav />
      <div className="main-content">
        <div className="container" dir="rtl">
          <h2>لیست اسلایدر ها</h2>
          <button className="btn btn-primary" onClick={showCreateSliderModal}>
            دسته جدید
          </button>
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
            <tbody>
              {slidersList.map((item, index) => {
                return (
                  <tr>
                    <td>{index + 1}</td>
                    <td>
                      <img
                        width="80px"
                        height="80px"
                        style={{
                          borderRadius: "50%",
                          border: "1px solid white",
                        }}
                        src={`http://localhost:8000/mainSlider/image/${item.image}`}
                        alt="this is imgage"
                      />
                    </td>
                    <td>{item.title}</td>
                    <td>{item.redirect_url}</td>
                    <td>
                      <BsFillPencilFill
                        style={{
                          cursor: "pointer",
                          margin: "2px",
                        }}
                        onClick={() => {
                          openEditModal(item);
                        }}
                        size="20px"
                      />
                      <BsFillTrashFill
                        style={{
                          cursor: "pointer",
                          margin: "2px",
                        }}
                        onClick={() => {
                          confirmDelete(item);
                        }}
                        size="20px"
                      />
                    </td>
                  </tr>
                );
              })}
            </tbody>
          </table>
        </div>
      </div>
      {flags.createSliderModal ? (
        <MainSliderCreateModal closeModal={closeSliderModal} />
      ) : null}
      {flags.editSliderModal ? (
        <MainSliderEditModal closeModal={closeEditModal} item={toEditSlider} />
      ) : null}
    </>
  );
};

export default MainSliderManagement;
