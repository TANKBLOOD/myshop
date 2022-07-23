import { useState } from "react";
import { createContext } from "react";
import axios from "axios";

const ProductContext = createContext();

export const ProductProvider = ({ children }) => {
  const [productList, setProductList] = useState([]);
  const getProducts = () => {
    axios.get(`http://127.0.0.1:8000/api/product/index`).then((response) => {
      setProductList(response.data.products);
      console.log(response.data.products);
    });
  };
  const createProduct = (params, imagesList) => {
    const formData = new FormData();
    Object.entries(params).forEach(([key, val]) => {
      // if(typeof val === 'object' && !Array.isArray(val)) {
      //     const jsonObject= JSON.stringify(val);
      //     formData.append(key, jsonObject);
      // }else {
      //     formData.append(key, val);
      // }
      formData.append(key, val);
    });
    formData.append(
      "productSpecifications",
      JSON.stringify(params.productSpecifications)
    );
    imagesList.forEach((image_file) => {
      formData.append("images[]", image_file);
    });
    axios
      .post("http://127.0.0.1:8000/api/product/create", formData)
      .then((response) => {
        console.log(response);
        setProductList((pervList) => {
          return [...pervList, response.data.newProduct];
        });
      });
  };

  return (
    <ProductContext.Provider
      value={{
        getProducts: getProducts,
        createProduct: createProduct,
        productList: productList,
      }}
    >
      {children}
    </ProductContext.Provider>
  );
};

export default ProductContext;
