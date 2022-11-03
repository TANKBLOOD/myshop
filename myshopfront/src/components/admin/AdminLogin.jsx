import axios from "axios";
import { useEffect } from "react";
import { useState } from "react";

const AdminLogin = () => {
  const [formInfo, setFormInfo] = useState({
    username: "",
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
  const login = () => {
    const url = "http://127.0.0.1:8000/api/user/adminLogin";
    axios
      .post(url, formInfo, {
        withCredentials: "true",
        headers: {
          "Content-Type": "application/json",
        },
      })
      .then((res) => {
        console.log(res.data);
      })
      .catch((err) => {
        console.log(err);
      });
  };
  const logout= ()=> {
    const url = "http://127.0.0.1:8000/api/user/adminLogout";
    axios
      .post(url,{},{
        withCredentials: "true",
        headers: { "Content-Type": "application/json" },
      })
      .then((res) => {
        console.log(res.data);
      });
  }
  useEffect(() => {
    const url = "http://127.0.0.1:8000/api/user/adminUser";
    axios
      .get(url, {
        withCredentials: "true",
        headers: { "Content-Type": "application/json" },
      })
      .then((res) => {
        console.log(res.data);
      });
  }, []);
  return (
    <>
      <form action="">
        <div className="form-group">
          <label htmlFor="">username</label>
          <input type="text" name="username" onChange={handleInputChange} />
        </div>
        <div className="form-group">
          <label htmlFor="">password</label>
          <input type="text" name="password" onChange={handleInputChange} />
        </div>
        <button type="button" onClick={login}>
          ورود
        </button>
        <button type="button" onClick={logout}>خروج</button>
      </form>
    </>
  );
};

export default AdminLogin;
