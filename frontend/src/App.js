import React from "react";
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import AboutPage from "./pages/AboutPage";
import AllCoursePage from "./pages/AllCoursePage";
import PortfolioPage from "./pages/PortfolioPage";
import ContactSec from "./components/ContactSec/ContactSec";
import ContactPage from "./pages/ContactPage";
import AllServicePage from "./pages/AllServicePage";
import HomePage from "./pages/HomePage";
import About from "./components/About/About";
import AppRouter from "./router/AppRouter";
import TopNavigation from "./components/TopNavigation/TopNavigation";


function App() {
  return (
    <Router>
    <div>
    <TopNavigation />
    <AppRouter />    
    </div>
    </Router>
   
  );
}

export default App;
