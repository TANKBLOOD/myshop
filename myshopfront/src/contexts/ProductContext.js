import { createContext } from "react";

const ProductContext= createContext();

export const ProductProvider= ({children}) => {
    const createProduct= (params) => {
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

    return <ProductContext.Provider value={{
        createProduct: createProduct,
    }} >
        {children}
    </ProductContext.Provider>
}

export default ProductContext;