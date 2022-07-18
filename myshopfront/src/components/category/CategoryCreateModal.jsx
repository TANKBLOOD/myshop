import { useContext, useState } from "react";
import "../../styles/category/category-modal.css";
import CategoryContext from "../../contexts/CategoryContext";

const CategoryCreateModal = ({ closeModal }) => {
  const {createCategory, categoryList}= useContext(CategoryContext);

  const [formInfo, setFormInfo]= useState({
    catTitle: "",
    catMetaDescription: "",
    catDescription: "",
    catParent: 0,
    catAvatarImage: "",
  });

  const resetCreateForm= () => {
    setFormInfo({
      catTitle: "",
      catMetaDescription: "",
      catDescription: "",
      catParent: 0,
      catAvatarImage: "",
    });
  };
  
  const handleInputChange= (e) => {
    const name= e.target.name;
    const value= e.target.value;

    setFormInfo((pervInfo)=> {
      return {
        ...pervInfo,
        [name]:value,
      }
    })

    console.log(formInfo)
  }

  const handleImageChange= (e)=> {
    setFormInfo((pervInfo)=> {
      return {
        ...pervInfo,
        "catAvatarImage": e.target.files[0],
      }
    })
  }
  
  const params= {
    catTitle: formInfo.catTitle,
    catMetaDescription: formInfo.catMetaDescription,
    catDescription: formInfo.catDescription,
    catParent: formInfo.catParent,
    catAvatarImage: formInfo.catAvatarImage,
  }

  const handleSubmitForm= (e) => {
    e.preventDefault();
    createCategory(params);
    resetCreateForm();
    closeModal();
  }

  return (
    <div id="myModal" className="custom-modal" dir="rtl">
      <div className="custom-modal-content">
        <div className="custom-modal-header">
          <span className="close" onClick={closeModal}>
            &times;
          </span>
          <h2>ثبت دسته جدید</h2>
        </div>
        <div className="custom-modal-body">
          <form onSubmit={handleSubmitForm}>
            <div className="form-group">
                <label htmlFor="catTitle">عنوان</label>
                <input type="text" name="catTitle" id="catTitle" className="form-control" value={formInfo.catTitle} onChange={handleInputChange}/>
            </div>
            <div className="form-group">
                <label htmlFor="catMetaDescription">توضیحات شاخص</label>
                <input type="text" name="catMetaDescription" id="catMetaDescription" className="form-control" value={formInfo.catMetaDescription} onChange={handleInputChange}/>
            </div>
            <div className="form-group">
                <label htmlFor="catDescription">توضیحات کامل دسته</label>
                <textarea name="catDescription" id="catDescription" className="form-control" style={{
                    resize: 'none',
                }} value={formInfo.catDescription} onChange={handleInputChange}></textarea>
            </div>
            <div className="form-group">
                <label htmlFor="catParent">سردسته</label>
                <select name="catParent" id="catParent" className="form-control" defaultValue={formInfo.catParent} onChange={handleInputChange}>

                    <option value="0">بدون سردسته</option>
                    {categoryList.map((category)=> {
                      return (
                        <option key={category.id} value={category.id}>{category.title}</option>
                      )
                    })}
                </select>
            </div>
            <div className="form-group">
                <label htmlFor="catAvatarImage">تصویر شاخص دسته</label>
                <input type="file" name="catAvatarImage" id="catAvatarImage" className="form-control" onChange={handleImageChange}/>
            </div>
          <button className="btn btn-primary  mt-3">ایجاد</button>
          </form>
        </div>
        <div className="custom-modal-footer">
          {/* <h3>Modal Footer</h3> */}
        </div>
      </div>
    </div>
  );
};

export default CategoryCreateModal;
