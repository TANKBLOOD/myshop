import { useContext } from "react";
import CategoryContext from "../../contexts/CategoryContext";
import "../../styles/shared/confirm-delete.css";

const ConfirmDeleteModal = ({closeDeleteModal, toDeleteCategory}) => {
    const {deleteCategory}= useContext(CategoryContext);

    const handleSubmitForm= (e) => {
        e.preventDefault();
        deleteCategory(toDeleteCategory.id);
        closeDeleteModal();
    }
    
  return (
    <div id="myModal" className="custom-modal" dir="rtl">
      <div className="custom-modal-content">
        <div className="custom-modal-header">
          <span className="close" onClick={closeDeleteModal}>
            &times;
          </span>
          <h2>حذف دسته</h2>
        </div>
        <div className="custom-modal-body">
          <div>
            <h3>آیا از حذف دسته اطمینان دارید؟</h3>
            <div>
              نام دسته: <span>{toDeleteCategory.title}</span>
              <br />
              توضیحات دسته:
              <p>{toDeleteCategory.content}</p>
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

export default ConfirmDeleteModal;
