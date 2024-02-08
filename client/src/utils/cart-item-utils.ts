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
  const cartItems_sess = cartItemsString ? JSON.parse(cartItemsString) : [];

  if (cartItems_sess.length === 0) {
    cartItems.push(newItem);
  } else {
    cartItems_sess.push(newItem);
    updateSessionStorage(cartItems_sess);
  }
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
      updateSessionStorage(updatedCartItems);
    } else {
      alert("Something went wrong, Please try again!");
    }
  };

  //tempoy cart item store in sesssion
  const updateSessionStorage = (updatedCartItems:any) => {
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
