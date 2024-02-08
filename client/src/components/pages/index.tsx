import React from "react";
import { Route, BrowserRouter as Router, Routes } from "react-router-dom";

import { Footer, NavBar } from "../common/index.ts";
import { CartItemPage, HomePage, SingleProduct } from "./path.ts";

import "bootstrap/dist/css/bootstrap.min.css";

const AppRouter = () => {
  return (
    <Router>
      <NavBar />
      <Routes>
        <Route path="/" element={<HomePage />} />
        <Route path="/product" element={<SingleProduct />} />
        <Route path="/cart" element={<CartItemPage />} />
      </Routes>
      <Footer />
    </Router>
  );
};

export default AppRouter;
