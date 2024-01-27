import React from "react";
import { Route, BrowserRouter as Router, Routes } from "react-router-dom";

import { Footer, NavBar } from "../common/index.ts";
import { HomePage, SingleProduct } from "./path.ts";

const AppRouter = () => {
  return (
    <Router>
      <NavBar />
      <Routes>
        <Route path="/" element={<HomePage/>} />
        <Route path="/single-product" element={<SingleProduct/>} />
      </Routes>
      <Footer/>
    </Router>
  );
};


export default AppRouter;
