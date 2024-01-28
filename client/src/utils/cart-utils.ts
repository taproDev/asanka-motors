// addCartUtil.ts

let cartItems: number[] = [];
export const useCart = () => {
  const addToCart = (productId: number) => {
    cartItems.push(productId);
  };

  const removeFromCart = (productId) => {
    const index = cartItems.indexOf(productId);
    if (index !== -1) {
      cartItems.splice(index, 1);
    } else {
        alert("Somthing went wrong , Please try againg !")
    }
  };
  return { cartItems, addToCart, removeFromCart };
};
