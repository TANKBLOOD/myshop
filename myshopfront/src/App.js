import logo from './logo.svg';
import { Routes, Route } from "react-router-dom"
import CategoryIndex from './components/category/CategoryIndex';
import { CategoryProvider } from './contexts/CategoryContext';
import { useEffect } from 'react';
import AdminDashboard from './components/routes/AdminDashboard';
import "./styles/shared/adminsidebar.css";
function App() {

  // useEffect(() => {
  //   // 👇 add class to body element
    
  //   return () => {
  //     // 👇️ optionally remove styles when component unmounts
      
  //   };
  // }, []);

  return (
    <>
    <CategoryProvider>
        <Routes>
          <Route></Route>
          <Route path='categories' element={ <CategoryIndex /> }></Route>
          <Route path='adminDashboard' element={ <AdminDashboard /> }></Route>
        </Routes>
    </CategoryProvider>
    </>
  );
}

export default App;
