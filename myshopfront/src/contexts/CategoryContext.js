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
    return <CategoryContext.Provider value={{
        categoryList: categoryList,
        getCategories: getCategories,
    }}>
        {children}
    </CategoryContext.Provider>
}

export default CategoryContext;