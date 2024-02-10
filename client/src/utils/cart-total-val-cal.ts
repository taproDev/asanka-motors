import { useEffect, useState } from "react";
import { getcartItemsSessionData, useCart } from "./cart-item-utils.ts";
import { UseItemcardQty } from "./item.qty-utils.ts";

export const UseCartTotal = () => {
  const { cartItems } = getcartItemsSessionData();
  const { addToCart,removeFromCart } = useCart();
  const {quantity,handleDecrease,handleIncrease} = UseItemcardQty(10,2)
  const [cartItemsNumber, setCartItemsNumber] = useState<number>(0);
  const [cartItemValue, setCartItemValue] = useState<number>(0);

  useEffect(() => {
    setCartItemsNumber(cartItems.length);
    let totalValue = 0;
    cartItems.forEach((item) => {
      totalValue += item.price * item.qty;
    });
    setCartItemValue(totalValue);
  }, [quantity, handleDecrease, handleIncrease, cartItems, addToCart, removeFromCart]);
  
  return {cartItemsNumber,cartItemValue}
};