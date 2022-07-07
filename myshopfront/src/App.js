import logo from './logo.svg';
import './App.css';
import { Routes, Route } from "react-router-dom"
import CategoryIndex from './components/category/CategoryIndex';
import { CategoryProvider } from './contexts/CategoryContext';
function App() {
  return (
    <CategoryProvider>
      <div className='app'>
        <Routes>
          <Route></Route>
          <Route path='categories' element={ <CategoryIndex /> }></Route>
        </Routes>
      </div>
    </CategoryProvider>
   
  );
}

export default App;
