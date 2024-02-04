import React, { useState } from "react";
import { CartFill ,Cart } from "react-bootstrap-icons";
import { useCart } from "../../../utils/cart-utils.ts";


export const CartItem = (productid:any,price:any) => {
  const { addToCart, removeFromCart } = useCart();
  const [isCartAdded, setIsCartAdded] = useState(false);

  const handleCartClick = (pid: number, price: number) => {
    setIsCartAdded(!isCartAdded);
    isCartAdded ? removeFromCart(pid) : addToCart(pid, price);
  };

  return (
    <button
      className="btn btn-sm pe-auto border-0 cart-icon"
      onClick={() => {
        handleCartClick(productid, price);
      }}
    >
      {isCartAdded ? (
        <CartFill className="text-danger fs-4 ms-1 pe-auto" />
      ) : (
        <Cart className="text-danger fs-4 ms-1 pe-auto" />
      )}
    </button>
  );
};
