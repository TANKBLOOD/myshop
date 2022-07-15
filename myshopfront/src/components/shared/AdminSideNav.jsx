import { NavLink } from "react-router-dom";

const AdminSideNav = () => {
  return (
    <>
      <div className="sidebar">
        <NavLink to="/categories">دسته بندی محصولات</NavLink>
        <a href="#services">Services</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>
      </div>
    </>
  );
};

export default AdminSideNav;
