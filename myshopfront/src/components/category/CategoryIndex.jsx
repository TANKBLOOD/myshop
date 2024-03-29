import { useEffect } from "react";
import { useState } from "react";
import { useContext } from "react";
import CategoryContext from "../../contexts/CategoryContext";
import CategoryCreateModal from "./CategoryCreateModal";
import ConfirmDeleteModal from "../shared/ConfirmDeleteModal";
import {
  BsFillTrashFill,
  BsFillPencilFill,
  BsFillEyeFill,
} from "react-icons/bs";
import { MdFolderSpecial, MdOutlineFolderSpecial } from "react-icons/md";
import CategoryEditModal from "./CategoryEditModal";
import AdminSideNav from "../shared/AdminSideNav";
import "../../styles/shared/dist/css/style.min.css";
const CategoryIndex = () => {
  const {
    categoryList,
    getCategories,
    openModalFlag,
    setOpenModalFlag,
    editModalFlag,
    setEditModalFlag,
    setToEditCategroy,
    makeSpecial,
    makeNormal,
  } = useContext(CategoryContext);
  let listCounter = 0;

  const [toDeleteCategory, setToDeleteCategory] = useState(null);
  const [deleteModalFlag, setDeleteModalFlag] = useState(0);

  useEffect(() => {
    getCategories();
  }, []);

  const openNewCategoryModal = () => {
    setOpenModalFlag(1);
  };
  const closeModal = () => {
    setOpenModalFlag(0);
  };
  const openEditModal = (category) => {
    setToEditCategroy(category);
    setEditModalFlag(1);
  };
  const closeEditModal = () => {
    setEditModalFlag(0);
  };

  const confirmDelete = (category) => {
    setToDeleteCategory(category);
    setDeleteModalFlag(1);
  };
  const closeDeleteModal = () => {
    setDeleteModalFlag(0);
  };
  return (
    <>
      <AdminSideNav />

      <div className="main-content">
        {openModalFlag ? (
          <CategoryCreateModal
            openModalFlag={openModalFlag}
            closeModal={closeModal}
          />
        ) : (
          ""
        )}
        {deleteModalFlag ? (
          <ConfirmDeleteModal
            closeDeleteModal={closeDeleteModal}
            toDeleteCategory={toDeleteCategory}
          />
        ) : null}
        {editModalFlag ? (
          <CategoryEditModal closeEditModal={closeEditModal} />
        ) : null}
        <div className="container" dir="rtl">
          <h2>لیست دسته بندی ها</h2>
          <button className="btn btn-primary" onClick={openNewCategoryModal}>
            دسته جدید
          </button>
          <table className="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">ردیف</th>
                <th scope="col">تصویر شاخص</th>
                <th scope="col">عنوان</th>
                <th scope="col">اسلاگ</th>
                <th scope="col">عملیات</th>
              </tr>
            </thead>
            <tbody>
              {categoryList.map((category) => {
                return (
                  <tr key={category.id}>
                    <th scope="row">{++listCounter}</th>
                    <td>
                      <img
                        width="80px"
                        height="80px"
                        style={{
                          borderRadius: "50%",
                          border: "1px solid white",
                        }}
                        src={`http://localhost:8000/myimage/${category.avatar_image}`}
                        alt="this is imgage"
                      />
                    </td>
                    <td>{category.title}</td>
                    <td>{category.slug}</td>
                    <td>
                      {/* <BsFillEyeFill /> */}
                      <BsFillPencilFill
                        style={{
                          cursor: "pointer",
                          margin: "2px",
                        }}
                        onClick={() => {
                          openEditModal(category);
                        }}
                        size="20px"
                      />
                      <BsFillTrashFill
                        style={{
                          cursor: "pointer",
                          margin: "2px",
                        }}
                        onClick={() => {
                          confirmDelete(category);
                        }}
                        size="20px"
                      />
                      {category.isSpecial ? (
                        <MdFolderSpecial
                          style={{
                            cursor: "pointer",
                            margin: "2px",
                          }}
                        size="20px"
                        title="تبدیل به دسته ساده"
                        onClick={()=> {
                            makeNormal(category.id)
                        }}
                        />
                      ) : (
                        <MdOutlineFolderSpecial
                          style={{
                            cursor: "pointer",
                            margin: "2px",
                          }}
                        size="20px"
                        title="تبدیل به دسته ویژه"
                        onClick={()=> {
                            makeSpecial(category.id)
                        }}
                        />
                      )}
                    </td>
                  </tr>
                );
              })}
            </tbody>
          </table>
        </div>
      </div>
    </>
  );
};

export default CategoryIndex;
