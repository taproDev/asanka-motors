import React, { useEffect } from "react";
import { CartFill, Cart } from "react-bootstrap-icons";
import { getcartItemsSessionData, useCart } from "../../../utils/cart-item-utils.ts";

interface ICartItem {
  productid: any;
  price: any;
  qty?: number;
}

export const CartItem = ({ productid, price, qty = 1 }: ICartItem) => {
  const { addToCart, removeFromCart, isCartAdded, setIsCartAdded } = useCart();
  const { cartItems } = getcartItemsSessionData();


  const handleCartClick = (pid: number, price: number) => {
    setIsCartAdded(!isCartAdded);
    isCartAdded ? removeFromCart(pid) : addToCart(pid, price, qty);
  };

  useEffect(() => {
    const hasItem = cartItems.some((cartItem) => cartItem.productId === productid);
    setIsCartAdded(hasItem);
  }, [productid, setIsCartAdded,cartItems]);  

  return (
    <button
      className="btn btn-sm pe-auto border-0 cart-icon"
      onClick={() => {
        handleCartClick(productid, price);
      }}
    >
      {isCartAdded ? (
        <CartFill className="text-danger fs-3 ms-1 pe-auto" />
      ) : (
        <Cart className="text-danger fs-3 ms-1 pe-auto" />
      )}
    </button>
  );
};
