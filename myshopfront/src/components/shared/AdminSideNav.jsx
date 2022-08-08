import { NavLink } from "react-router-dom";

const AdminSideNav = () => {
  return (
    <>
      <div className="sidebar">
        <NavLink to="/admin/categories">دسته بندی محصولات</NavLink>
        <NavLink to="/createProduct">ایجاد محصول</NavLink>
        <NavLink to="/products">لیست محصولات</NavLink>
        <a href="#contact">Contact</a>
      </div>
    </>
  );
};

export default AdminSideNav;
