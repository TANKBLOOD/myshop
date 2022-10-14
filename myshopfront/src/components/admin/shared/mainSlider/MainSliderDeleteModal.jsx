import axios from "axios";

const MainSliderDeleteModal = ({ closeDeleteModal, slider }) => {
  //seprate this component and name it in otherr way
  const deleteSlider = () => {
    const url= 'http://127.0.0.1:8000/api/mainSlider/delete';
    axios.post(url, {
        id: slider.id,
    }).then((res) => {
      if (res.data.deleted) {
        closeDeleteModal();
      }
    });
  };

  const handleSubmitForm = (e) => {
    e.preventDefault();
    deleteSlider();
    closeDeleteModal();
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
          <span className="close" onClick={closeDeleteModal}>
            &times;
          </span>
          <h2>حذف اسلاید</h2>
        </div>
        <div className="custom-modal-body">
          <div>
            <h3>آیا از حذف اسلاید اطمینان دارید؟</h3>
            <div>
              نام اسلاید: <span>{slider.title}</span>
              <br />
              لینک اسلاید:
              <p>{slider.redirect_url}</p>
            </div>
          </div>
          <form onSubmit={handleSubmitForm}>
            <button className="btn btn-danger">حذف</button>
          </form>
        </div>
        <div className="custom-modal-footer">{/* <h3>Modal Footer</h3> */}</div>
      </div>
    </div>
  );
};

export default MainSliderDeleteModal;
