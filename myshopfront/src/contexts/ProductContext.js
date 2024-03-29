import { useState } from "react";
import { createContext } from "react";
import axios from "axios";

const ProductContext = createContext();

export const ProductProvider = ({ children }) => {
  const [productList, setProductList] = useState([]);
  const [viewingProduct, setViewingProduct] = useState(null);
  const [editingProduct, setEditingProduct] = useState(null);
  const [isProductLoading, setIsProductLoading] = useState(true);

  const [categoryProductsList, setCategoryProductsList] = useState([]);

  const getProducts = () => {
    axios.get(`http://127.0.0.1:8000/api/product/index`).then((response) => {
      setProductList(response.data.products);
      applyPopularProducts();
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
  const getProduct = (slug) => {
    const url = `http://127.0.0.1:8000/api/product/view/${slug}`;
    setIsProductLoading(true);
    axios.get(url).then((res) => {
      const productInfo = res.data.product;
      setViewingProduct({
        title: productInfo.title,
        meta_title: productInfo.meta_title,
        slug: productInfo.slug,
        category_id: productInfo.category_id,
        price: productInfo.price,
        discount: productInfo.discount,
        summary: productInfo.summary,
        quantity: productInfo.quantity,
        publish: productInfo.publish,
        productSpecifications: JSON.parse(productInfo.product_specifications),
        forceOutOfStack: productInfo.out_of_stack,
        avatar_image: productInfo.avatar_image,
        images: productInfo.images,
        id: productInfo.id,
      });
      setEditingProduct({
        title: productInfo.title,
        meta_title: productInfo.meta_title,
        slug: productInfo.slug,
        category_id: productInfo.category_id,
        price: productInfo.price,
        discount: productInfo.discount,
        summary: productInfo.summary,
        quantity: productInfo.quantity,
        publish: productInfo.publish,
        productSpecifications: JSON.parse(productInfo.product_specifications),
        forceOutOfStack: productInfo.out_of_stack,
        avatar_image: productInfo.avatar_image,
        images: productInfo.images,
        id: productInfo.id,
      });
      setIsProductLoading(false);
    });
  };
  const editProduct = (params, imagesList) => {
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
      .post("http://127.0.0.1:8000/api/product/update", formData)
      .then((response) => {
        console.log(response);
        // setProductList((pervList) => {
        //   return [...pervList, response.data.newProduct];
        // });
      });
  };

  const getCategoryProducts = (slug) => {
    const url = `http://127.0.0.1:8000/api/category/${slug}/products`;
    // setIsProductLoading(true);
    axios.get(url).then((res) => {
      const categoryProducts = res.data.categoryProducts;
      setCategoryProductsList(categoryProducts);
    });
  };

  const [popularProducts, setPopularProducts] = useState([]);
  const getPopularProducts = () => {
    const url = `http://127.0.0.1:8000/api/products/popular`;
    axios
      .get(url)
      .then((res) => {
        const products = res.data.products;
        setPopularProducts(products);
        console.log(products);
      })
      .catch((err) => {
        console.log(err);
      });
  };
  const makePopular = (productId) => {
    const url = `http://127.0.0.1:8000/api/products/makePopular`;
    axios
      .post(url, {
        data: {
          id: productId,
        },
      })
      .then((res) => {
        setProductList((prev) => {
          return prev.map((item) => {
            if (item.id == productId) {
              return {
                ...item,
                isPopular: true,
              };
            } else {
              return item;
            }
          });
        });
      });
  };
  const removePopular = (productId) => {
    const url = `http://127.0.0.1:8000/api/products/removePopular`;
    axios
      .post(url, {
        data: {
          id: productId,
        },
      })
      .then((res) => {
        setProductList((prev) => {
          return prev.map((item) => {
            if (item.id === productId) {
              return {
                ...item,
                isPopular: false,
              };
            } else {
              return item;
            }
          });
        });
      });
  };
  const applyPopularProducts = () => {
    const url = `http://127.0.0.1:8000/api/products/popular`;
    axios
      .get(url)
      .then((res) => {
        const products = res.data.products;
        const productIds = products.map((item) => {
          return item.product_id;
        });
        console.log(productIds);
        setProductList((prev) => {
          return prev.map((item) => {
            return {
              ...item,
              isPopular: productIds.includes(item.id) ? true : false,
            };
          });
        });
      })
      .catch((err) => {
        console.log(err);
      });
  };
  const search= (term)=> {
    if(term === '') {
      return;
    }
    const url = `http://127.0.0.1:8000/api/product/search/${term}`;
    axios.get(url).then((res)=> {
      if(res.data.products) {
        setProductList(res.data.products);
      }
    })
  }
  return (
    <ProductContext.Provider
      value={{
        getProducts: getProducts,
        createProduct: createProduct,
        productList: productList,
        viewingProduct: viewingProduct,
        getProduct: getProduct,
        editingProduct: editingProduct,
        setEditingProduct: setEditingProduct,
        editProduct: editProduct,
        isProductLoading: isProductLoading,
        getCategoryProducts: getCategoryProducts,
        categoryProductsList: categoryProductsList,
        popularProducts: popularProducts,
        getPopularProducts: getPopularProducts,
        applyPopularProducts: applyPopularProducts,
        makePopular: makePopular,
        removePopular: removePopular,
        search: search,
      }}
    >
      {children}
    </ProductContext.Provider>
  );
};

export default ProductContext;
