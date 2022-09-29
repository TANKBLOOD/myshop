import { createContext, useState } from "react";
import axios from "axios";
const CategoryContext = createContext();

export const CategoryProvider = ({ children }) => {
  const [categoryList, setCategoryList] = useState([]);

  const [openModalFlag, setOpenModalFlag] = useState(0);
  const getCategories = () => {
    axios.get(`http://127.0.0.1:8000/api/category/index`).then((response) => {
      setCategoryList(response.data.categories);
      console.log(response.data.categories);
    });
  };

  //create section
  const createCategory = (params) => {
    const formData = new FormData();
    Object.entries(params).forEach(([key, val]) => {
      formData.append(key, val);
    });
    axios
      .post("http://127.0.0.1:8000/api/category/create", formData)
      .then((response) => {
        console.log(response);
        setCategoryList((pervList) => {
          return [...pervList, response.data.newCat];
        });
      });
  };
  //view section
  const [toViewCategory, setToViewCategory]= useState(null);
  const getCategory=  (slug)=> {
    axios.get(`http://127.0.0.1:8000/api/category/view/${slug}`).then((res)=> {
        setToViewCategory(res.data.category);
    })
  }
  //edit section
  const [editModalFlag, setEditModalFlag] = useState(0);
  const [toEditCategory, setToEditCategroy] = useState(null);
  const editCategory = (params) => {
    axios
      .post("http://127.0.0.1:8000/api/category/edit", params)
      .then((response) => {
        console.log(response);
        setCategoryList((pervList) => {
          return pervList.map((category) => {
            if (category.id === params.id) {
              return response.data.updatedCat;
            } else {
              return category;
            }
          });
        });
      });
  };

  //delete section
  const deleteCategory = (id) => {
    axios
      .post("http://127.0.0.1:8000/api/category/delete", {
        catId: id,
      })
      .then((response) => {
        setCategoryList((pervList) => {
          return pervList.filter((category) => {
            return category.id !== id;
          });
        });
      });
  };

  const [makeSpecialModalFlag, setMakeSpecialModalFlag] = useState(false);
  const makeSpecial = (id) => {
    axios
      .post("http://127.0.0.1:8000/api/category/makeSpecial", {
        id: id,
      })
      .then((res) => {
        if (res.data.updated) {
          setCategoryList((prev) => {
            return prev.map((item) => {
              if (item.id === id) {
                return {
                  ...item,
                  isSpecial: true,
                };
              } else {
                return item;
              }
            });
          });
        }
        setMakeSpecialModalFlag(0);
      });
  };
  const makeNormal = (id) => {
    axios
      .post("http://127.0.0.1:8000/api/category/makeNormal", {
        id: id,
      })
      .then((res) => {
        if (res.data.updated) {
          setCategoryList((prev) => {
            return prev.map((item) => {
              if (item.id === id) {
                return {
                  ...item,
                  isSpecial: false,
                };
              } else {
                return item;
              }
            });
          });
        }
        setMakeSpecialModalFlag(0);
      });
  };
  const [specialCategories, setSpecialCategories] = useState([]);
  const getSpecialCategories = () => {
    axios.get("http://127.0.0.1:8000/api/category/specials").then((res) => {
        setSpecialCategories(res.data.categories);
    });
  };
  return (
    <CategoryContext.Provider
      value={{
        categoryList: categoryList,
        getCategories: getCategories,
        createCategory: createCategory,
        openModalFlag: openModalFlag,
        setOpenModalFlag: setOpenModalFlag,
        deleteCategory: deleteCategory,
        editModalFlag: editModalFlag,
        setEditModalFlag: setEditModalFlag,
        editCategory: editCategory,
        toEditCategory: toEditCategory,
        setToEditCategroy: setToEditCategroy,
        makeSpecialModalFlag: makeSpecialModalFlag,
        setMakeSpecialModalFlag: setMakeSpecialModalFlag,
        makeSpecial: makeSpecial,
        makeNormal: makeNormal,
        specialCategories: specialCategories,
        getSpecialCategories: getSpecialCategories,
        toViewCategory: toViewCategory,
        getCategory: getCategory,
      }}
    >
      {children}
    </CategoryContext.Provider>
  );
};

export default CategoryContext;
