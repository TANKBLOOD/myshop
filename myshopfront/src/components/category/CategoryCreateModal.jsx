import "../../styles/category/category-modal.css";

const CategoryCreateModal = ({ closeModal }) => {
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
          <form>
            <div className="form-group">
                <label htmlFor="catTitle">عنوان</label>
                <input type="text" name="catTitle" id="catTitle" className="form-control" />
            </div>
            <div className="form-group">
                <label htmlFor="catMetaDescription">توضیحات شاخص</label>
                <input type="text" name="catMetaDescription" id="catMetaDescription" className="form-control" />
            </div>
            <div className="form-group">
                <label htmlFor="catDescription">توضیحات کامل دسته</label>
                <textarea name="catDescription" id="catDescription" className="form-control" style={{
                    resize: 'none',
                }}></textarea>
            </div>
            <div className="form-group">
                <label htmlFor="catParent">سردسته</label>
                <select name="catParent" id="catParent" className="form-control" defaultValue={"0"}>
                    <option value="0">بدون سردسته</option>
                </select>
            </div>
            <div className="form-group">
                <label htmlFor="catAvatarImage">تصویر شاخص دسته</label>
                <input type="file" name="catAvatarImage" id="catAvatarImage" className="form-control"/>
            </div>
          </form>
        </div>
        <div className="custom-modal-footer">
          {/* <h3>Modal Footer</h3> */}
          <button className="btn btn-primary">ایجاد</button>
        </div>
      </div>
    </div>
  );
};

export default CategoryCreateModal;
