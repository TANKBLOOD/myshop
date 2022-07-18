import "../../styles/shared/confirm-delete.css";
import CategoryContext from "../../contexts/CategoryContext";
import { useContext, useState } from "react";

const CategoryEditModal = ({ closeEditModal }) => {
  const { editCategory, toEditCategory, categoryList } = useContext(CategoryContext);

  const [formInfo, setFormInfo] = useState({
    id: toEditCategory.id,
    catTitle: toEditCategory.title,
    catMetaDescription: toEditCategory.meta_title,
    catDescription: toEditCategory.content,
    catParent: toEditCategory.parent_id,
    catAvatarImage: "",
  });

  const resetCreateForm = () => {
    setFormInfo({
      catTitle: "",
      catMetaDescription: "",
      catDescription: "",
      catParent: 0,
      catAvatarImage: "",
    });
  };

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
        catAvatarImage: e.target.files[0],
      };
    });
  };

  const params = {
    id: formInfo.id,
    catTitle: formInfo.catTitle,
    catMetaDescription: formInfo.catMetaDescription,
    catDescription: formInfo.catDescription,
    catParent: formInfo.catParent,
    catAvatarImage: formInfo.catAvatarImage,
  };

  const handleSubmitForm = (e) => {
    e.preventDefault();
    editCategory(params);
    resetCreateForm();
    closeEditModal();
  };

  return (
    <div id="myModal" className="custom-modal" dir="rtl">
      <div className="custom-modal-content">
        <div className="custom-modal-header">
          <span className="close" onClick={closeEditModal}>
            &times;
          </span>
          <h2>ویرایش دسته</h2>
        </div>
        <div className="custom-modal-body">
          <form onSubmit={handleSubmitForm}>
            <div className="form-group">
              <label htmlFor="catTitle">عنوان</label>
              <input
                type="text"
                name="catTitle"
                id="catTitle"
                className="form-control"
                value={formInfo.catTitle}
                onChange={handleInputChange}
              />
            </div>
            <div className="form-group">
              <label htmlFor="catMetaDescription">توضیحات شاخص</label>
              <input
                type="text"
                name="catMetaDescription"
                id="catMetaDescription"
                className="form-control"
                value={formInfo.catMetaDescription}
                onChange={handleInputChange}
              />
            </div>
            <div className="form-group">
              <label htmlFor="catDescription">توضیحات کامل دسته</label>
              <textarea
                name="catDescription"
                id="catDescription"
                className="form-control"
                style={{
                  resize: "none",
                }}
                value={formInfo.catDescription}
                onChange={handleInputChange}
              ></textarea>
            </div>
            <div className="form-group">
              <label htmlFor="catParent">سردسته</label>
              <select
                name="catParent"
                id="catParent"
                className="form-control"
                defaultValue={formInfo.catParent}
                onChange={handleInputChange}
              >
                <option value="0">بدون سردسته</option>
                {categoryList.map((category)=> {
                      if(category.id !== toEditCategory.id) {
                        return (
                          <option key={category.id} value={category.id}>{category.title}</option>
                        )
                      }
                })}
              </select>
            </div>
            <div className="form-group">
              <label htmlFor="catAvatarImage">تصویر شاخص دسته</label>
              <input
                type="file"
                name="catAvatarImage"
                id="catAvatarImage"
                className="form-control"
                onChange={handleImageChange}
              />
            </div>
            <button className="btn btn-primary  mt-3">ویرایش</button>
          </form>
        </div>
        <div className="custom-modal-footer">{/* <h3>Modal Footer</h3> */}</div>
      </div>
    </div>
  );
};

export default CategoryEditModal;
