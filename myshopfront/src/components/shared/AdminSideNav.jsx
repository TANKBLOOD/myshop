import { NavLink } from "react-router-dom";

const AdminSideNav = () => {
  return (
    <>
      <div className="sidebar">
        <NavLink to="/categories">دسته بندی محصولات</NavLink>
        <NavLink to="/createProduct">ایجاد محصول</NavLink>
        <a href="/products">لیست محصولات</a>
        <a href="#contact">Contact</a>
      </div>
    </>
  );
};

export default AdminSideNav;
