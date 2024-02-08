import { useState } from "react";

interface CartItem {
  productId: number;
  price: number;
  qty: number;
}

let cartItems: CartItem[] = [];

//cart items add/remove session storage
export const useCart = () => {
  const [isCartAdded, setIsCartAdded] = useState(false);

  //Function to add item to cart
  const addToCart = (productId: number, price: number, qty: number) => {
    const newItem: CartItem = { productId, price, qty };
    cartItems.push(newItem);
    updateSessionStorage();
  };

  //cart remove
  const removeFromCart = (productid: number) => {
    const cartItemsString = sessionStorage.getItem("cartItems");
    const cartItems_rem = cartItemsString ? JSON.parse(cartItemsString) : [];
    const index = cartItems_rem.findIndex((item) => item.productId === productid);
    if (index !== -1) {
      const updatedCartItems = [
        ...cartItems_rem.slice(0, index),
        ...cartItems_rem.slice(index + 1),
      ];
      cartItems = updatedCartItems;
      updateSessionStorage();
    } else {
      alert("Something went wrong, Please try again!"+index);
    }
  };

  //tempoy cart item store in sesssion
  const updateSessionStorage = () => {
    sessionStorage.setItem("cartItems", JSON.stringify(cartItems));
  };

  return { cartItems, addToCart, removeFromCart,isCartAdded, setIsCartAdded};
};

//read session data
export const getcartItemsSessionData = () => {
  const cartItemsString = sessionStorage.getItem("cartItems");
  const cartItems = cartItemsString ? JSON.parse(cartItemsString) : [];

  return { cartItems };
};
