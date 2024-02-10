import { useEffect, useState } from "react";
import { getcartItemsSessionData, useCart } from "./cart-item-utils.ts";
import { UseCartTotal } from "./cart-total-val-cal.ts";

export const UseItemcardQty = (pid: any, price: any) => {
  const [quantity, setQuantity] = useState(1);
  const { cartItems } = getcartItemsSessionData();
  const { addToCart } = useCart();
  const index = cartItems.findIndex((item) => item.productId === pid);
  const [itemChange,setItemChange] = useState<any>();

  useEffect(() => {
    if (index !== -1) {
      const qty = cartItems[index].qty;
      setQuantity(qty);
    }
    
  }, [addToCart,index,quantity,setItemChange]);

  const handleIncrease = () => {
      setQuantity(quantity + 1);
      addToCart(pid, price, quantity + 1);
      setItemChange(quantity + 1)
  };

  const handleDecrease = () => {
    if (quantity > 1) {
      setQuantity(quantity - 1);
      addToCart(pid, price, quantity - 1);
      setItemChange(quantity - 1)
    }
  };

  return { quantity, handleIncrease, handleDecrease };
};
