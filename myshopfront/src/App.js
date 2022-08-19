import logo from "./logo.svg";
import { Routes, Route } from "react-router-dom";
import CategoryIndex from "./components/category/CategoryIndex";
import { CategoryProvider } from "./contexts/CategoryContext";
import { useEffect } from "react";
import AdminDashboard from "./components/routes/AdminDashboard";
import "./styles/shared/adminsidebar.css";
import CreateProduct from "./components/product/CreateProduct";
import { ProductProvider } from "./contexts/ProductContext";
import ProductIndex from "./components/product/ProductIndex";
import AdminViewProduct from "./components/product/AdminViewProduct";
import EditProduct from "./components/product/EditProduct";
import UserCategoryIndex from "./components/category/UserCategoryIndex";
import CategoryProductsGrid from "./components/product/CategoryProductsGrid";
import UserProductView from "./components/product/UserProductView";
import "./styles/shared/user-css/bootstrap.css";
import UserMainPage from "./components/UserMainPage";

import { useLocation } from "react-router-dom";

function App() {
  // useEffect(() => {
  //   // 👇 add class to body element

  //   return () => {
  //     // 👇️ optionally remove styles when component unmounts

  //   };
  // }, []);

  const { pathname } = useLocation();

  useEffect(() => {
    window.scrollTo(0, 0);
  }, [pathname]);

  return (
    <>
      <CategoryProvider>
        <ProductProvider>
          <Routes>
            <Route
              path="category/:categorySlug/products"
              element={<CategoryProductsGrid />}
            ></Route>
            <Route path="admin/categories" element={<CategoryIndex />}></Route>
            <Route path="adminDashboard" element={<AdminDashboard />}></Route>
            <Route path="createProduct" element={<CreateProduct />}></Route>
            <Route path="products" element={<ProductIndex />}></Route>
            <Route
              path="adminViewProduct/:productSlug"
              element={<AdminViewProduct />}
            ></Route>
            <Route
              path="editProduct/:productSlug"
              element={<EditProduct />}
            ></Route>
            <Route path="categories" element={<UserCategoryIndex />}></Route>
            <Route
              path="product/view/:productSlug"
              element={<UserProductView />}
            ></Route>
            <Route path="/" element={<UserMainPage />}></Route>
          </Routes>
        </ProductProvider>
      </CategoryProvider>
    </>
  );
}

export default App;
