import logo from './logo.svg';
import { Routes, Route } from "react-router-dom"
import CategoryIndex from './components/category/CategoryIndex';
import { CategoryProvider } from './contexts/CategoryContext';
function App() {
  return (
    <>
    <CategoryProvider>
        <Routes>
          <Route></Route>
          <Route path='categories' element={ <CategoryIndex /> }></Route>
        </Routes>
    </CategoryProvider>
    </>
  );
}

export default App;
