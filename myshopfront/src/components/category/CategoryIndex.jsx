import { useEffect } from "react";
import { useState } from "react";
import { useContext } from "react";
import CategoryContext from "../../contexts/CategoryContext";
import CategoryCreateModal from "./CategoryCreateModal";
import ConfirmDeleteModal from "../shared/ConfirmDeleteModal";
import { BsFillTrashFill, BsFillPencilFill, BsFillEyeFill } from 'react-icons/bs'
import CategoryEditModal from "./CategoryEditModal";

const CategoryIndex = () => {
    const {
        categoryList, getCategories, openModalFlag,
        setOpenModalFlag, editModalFlag, setEditModalFlag,
        setToEditCategroy
    }= useContext(CategoryContext);
    let listCounter= 0;

    const [toDeleteCategory, setToDeleteCategory]= useState(null);
    const [deleteModalFlag, setDeleteModalFlag]= useState(0);

    useEffect(()=> {
        getCategories();
    }, [])

    const openNewCategoryModal= ()=> {
        setOpenModalFlag(1);
    }
    const closeModal= ()=> {
        setOpenModalFlag(0);
    }
    const openEditModal= (category)=> {
        setToEditCategroy(category);
        setEditModalFlag(1);
    }
    const closeEditModal= ()=> {
        setEditModalFlag(0);
    }

    const confirmDelete= (category)=> {
        setToDeleteCategory(category);
        setDeleteModalFlag(1);
    }
    const closeDeleteModal= ()=> {
        setDeleteModalFlag(0);
    }
    return ( 
        <>
        <div>
            {openModalFlag ? <CategoryCreateModal openModalFlag={openModalFlag} closeModal={closeModal} /> : ""}
            {deleteModalFlag ? <ConfirmDeleteModal closeDeleteModal={closeDeleteModal} toDeleteCategory={toDeleteCategory} /> : null}
            {editModalFlag ? <CategoryEditModal closeEditModal={closeEditModal} /> : null}
            <div className="container" dir="rtl">
                <h2>لیست دسته بندی ها</h2>
                <button className="btn btn-primary" onClick={openNewCategoryModal}>دسته جدید</button>
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
                        {categoryList.map((category)=> {
                            return (
                            <tr key={category.id}>
                                <th scope="row">{++listCounter}</th>
                                <td>imgae</td>
                                <td>{category.title}</td>
                                <td>{category.slug}</td>
                                <td>
                                    <BsFillEyeFill />
                                    <BsFillPencilFill style={{
                                        'cursor': 'pointer'
                                    }} onClick={()=>{
                                        openEditModal(category);
                                    }}/>
                                    <BsFillTrashFill style={{
                                        'cursor': 'pointer'
                                    }} onClick= {()=> {
                                        confirmDelete(category);
                                    }}/>
                                </td>
                            </tr>
                            )
                        })}
                    </tbody>
                </table>
            </div>
        </div>
        </>
     );
}
 
export default CategoryIndex;