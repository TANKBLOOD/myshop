import { useEffect } from "react";
import { useState } from "react";
import { useContext } from "react";
import CategoryContext from "../../contexts/CategoryContext";
import CategoryCreateModal from "./CategoryCreateModal";

const CategoryIndex = () => {
    const {categoryList, getCategories}= useContext(CategoryContext);
    const [openModalFlag, setOpenModalFlag]= useState(1)
    let listCounter= 0;
    useEffect(()=> {
        getCategories();
    }, [])

    const openNewCategoryModal= ()=> {
        setOpenModalFlag(1);
    }
    return ( 
        <>
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
                            </tr>
                            )
                        })}
                    </tbody>
                </table>
                
            </div>
            <CategoryCreateModal openModalFlag={openModalFlag} />
        </>
       
     );
}
 
export default CategoryIndex;