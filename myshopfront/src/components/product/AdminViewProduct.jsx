import { useContext, useEffect } from "react";
import {useParams } from "react-router-dom";
import ProductContext from "../../contexts/ProductContext";

const AdminViewProduct = () => {
  const { productSlug } = useParams();
  const {viewingProduct, getProduct} = useContext(ProductContext);

    useEffect(()=> {
        getProduct(productSlug);
    }, []);
    
  return <></>;
};

export default AdminViewProduct;
