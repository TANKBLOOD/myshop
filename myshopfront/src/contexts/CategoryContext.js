import { createContext, useState } from "react";
import axios from 'axios'
const CategoryContext= createContext();

export const CategoryProvider= ({children})=> {
    const [categoryList, setCategoryList]= useState([]);

    const [openModalFlag, setOpenModalFlag]= useState(0);
    const getCategories= ()=> {
        axios.get(`http://127.0.0.1:8000/api/category/index`)
            .then(response => {
                setCategoryList(response.data.categories);
                console.log(response.data.categories);
            })
    }

    //create section
    const createCategory= (params) => {
        axios.post('http://127.0.0.1:8000/api/category/create', params)
        .then(response => {
            console.log(response);
            setCategoryList((pervList)=> {
                return [
                    ...pervList,
                    response.data.newCat
                ]
            })
        })
    }

    //edit section
    const [editModalFlag, setEditModalFlag]= useState(0);
    const [toEditCategory, setToEditCategroy]= useState(null);
    const editCategory= (params)=> {
        axios.post('http://127.0.0.1:8000/api/category/edit', params)
        .then(response => {
            console.log(response);
            setCategoryList((pervList)=> {
                return pervList.map((category)=> {
                        if(category.id === params.id) {
                            return response.data.updatedCat;
                        }else {
                            return category;
                        }
                    })
            })
        })
    }

    //delete section
    const deleteCategory= (id) => {
        axios.post('http://127.0.0.1:8000/api/category/delete', {
            catId: id,
        })
        .then(response => {
            setCategoryList((pervList)=> {
                return pervList.filter((category)=> {
                    return category.id !== id;
                })
            })
        })
    }
    return <CategoryContext.Provider value={{
        categoryList: categoryList,
        getCategories: getCategories,
        createCategory: createCategory,
        openModalFlag: openModalFlag,
        setOpenModalFlag: setOpenModalFlag,
        deleteCategory: deleteCategory,
        editModalFlag: editModalFlag,
        setEditModalFlag: setEditModalFlag,
        editCategory: editCategory,
        toEditCategory: toEditCategory,
        setToEditCategroy: setToEditCategroy,
    }}>
        {children}
    </CategoryContext.Provider>
}

export default CategoryContext;