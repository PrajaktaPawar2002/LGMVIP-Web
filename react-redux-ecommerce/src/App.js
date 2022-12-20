import React from 'react'
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom'

// In react-router-dom v6, "Switch" is replaced by routes "Routes". You need to update the import from

// import { Switch, Route } from "react-router-dom";
// to

// import { Routes ,Route } from 'react-router-dom';
// You also need to update the Route declaration from

// <Route path="/" component={Home} />
// to

// <Route path='/' element={<Home/>} />

import ProductListing from "./containers/ProductListing";
import Header from "./containers/Header";
import "./App.css";
import ProductDetails from "./containers/ProductDetails";

const App = () => {
  return (
    <Router>
      <Header />
      
        <Routes>
        <Route path="/" exact element={ProductListing} />
          <Route path="/product/:productId" element={ProductDetails} />
          <Route>404 Not Found!</Route>
        </Routes>
      
    </Router>
  );
}

export default App;