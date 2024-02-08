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

  // Function to add item to cart
  const addToCart = (productId: number, price: number, qty: number) => {
    const newItem: CartItem = { productId, price, qty };

    const cartItemsString = sessionStorage.getItem("cartItems");
    let cartItems_sess: CartItem[] = cartItemsString ? JSON.parse(cartItemsString) : [];

    const index = cartItems_sess.findIndex((item) => item.productId === productId);

    if (index !== -1) {
      const updatedCartItem = { ...cartItems_sess[index], qty: qty };
      cartItems_sess[index] = updatedCartItem;
      console.log(cartItems_sess);
      console.log(index);
      
    } else {
      cartItems_sess.push(newItem);
    }
    updateSessionStorage(cartItems_sess);

  };

  //cart remove
  const removeFromCart = (productId: number) => {
    const cartItemsString = sessionStorage.getItem("cartItems");
    const cartItems_rem = cartItemsString ? JSON.parse(cartItemsString) : [];
    const index = cartItems_rem.findIndex(
      (item) => item.productId === productId
    );
    if (index !== -1) {
      const updatedCartItems = [
        ...cartItems_rem.slice(0, index),
        ...cartItems_rem.slice(index + 1),
      ];
      cartItems = updatedCartItems;
      updateSessionStorage(updatedCartItems);
    } else {
      alert("Something went wrong. Please try again!");
    }
  };

  //temporary cart item store in session
  const updateSessionStorage = (updatedCartItems: CartItem[]) => {
    sessionStorage.setItem("cartItems", JSON.stringify(updatedCartItems));
  };

  return { cartItems, addToCart, removeFromCart, isCartAdded, setIsCartAdded };
};

//read session data
export const getcartItemsSessionData = () => {
  const cartItemsString = sessionStorage.getItem("cartItems");
  const cartItems = cartItemsString ? JSON.parse(cartItemsString) : [];

  return { cartItems };
};
