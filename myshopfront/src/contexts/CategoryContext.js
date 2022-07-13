import { createContext, useState } from "react";
import axios from 'axios'
const CategoryContext= createContext();

export const CategoryProvider= ({children})=> {
    const [categoryList, setCategoryList]= useState([]);
    const getCategories= ()=> {
        axios.get(`http://127.0.0.1:8000/api/category/index`)
            .then(response => {
                setCategoryList(response.data.categories);
                console.log(response.data.categories);
            })
    }
    const createCategory= (params) => {
        axios.post('http://127.0.0.1:8000/api/category/create', params)
        .then(response => {
            console.log(response);
        })
    }
    return <CategoryContext.Provider value={{
        categoryList: categoryList,
        getCategories: getCategories,
        createCategory: createCategory,
    }}>
        {children}
    </CategoryContext.Provider>
}

export default CategoryContext;