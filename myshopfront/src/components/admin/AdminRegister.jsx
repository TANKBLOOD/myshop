import axios from "axios";
import { useState } from "react";

const AdminRegister = () => {
  const [formInfo, setFormInfo] = useState({
    name: "",
    email: "",
    phone: "",
    password: "",
  });
  const handleInputChange = (e) => {
    const name = e.target.name;
    const value = e.target.value;

    setFormInfo((prev) => {
      return {
        ...prev,
        [name]: value,
      };
    });
  };
  const register = () => {
    const url = "http://127.0.0.1:8000/api/user/registerAdmin";
    axios
      .post(url, formInfo, {
        headers: { "Content-Type": "application/json" },
      })
      .then((res) => {
        console.log(res.data);
      })
      .catch((err) => {
        console.log(err);
      });
  };
  return (
    <>
      <form action="">
        <div className="form-group">
          <label htmlFor="">name</label>
          <input type="text" name="name" onChange={handleInputChange} />
        </div>
        <div className="form-group">
          <label htmlFor="">email</label>
          <input type="text" name="email" onChange={handleInputChange} />
        </div>
        <div className="form-group">
          <label htmlFor="">phone</label>
          <input type="text" name="phone" onChange={handleInputChange} />
        </div>
        <div className="form-group">
          <label htmlFor="">password</label>
          <input type="text" name="password" onChange={handleInputChange} />
        </div>
        <button type="button" onClick={register}>ثبت</button>
      </form>
    </>
  );
};

export default AdminRegister;
