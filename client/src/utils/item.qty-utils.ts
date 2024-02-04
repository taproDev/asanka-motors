import { useState } from "react";

export const UseItemcardQty = ()=>{
    const [quantity, setQuantity] = useState(1);

    const handleIncrease = () => {
      setQuantity(quantity + 1);
    };
  
    const handleDecrease = () => {
      if (quantity > 1) {
        setQuantity(quantity - 1);
    }}

    return {quantity , handleIncrease , handleDecrease}
  
}