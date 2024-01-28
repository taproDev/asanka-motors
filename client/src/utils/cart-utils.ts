interface CartItem {
  productId: number;
  price: number;
}

let cartItems: CartItem[] = [];

//cart items add/remove session storage
export const useCart = () => {
  const addToCart = (productId: number, price: number) => {
    const newItem: CartItem = { productId, price };
    cartItems.push(newItem);
    updateSessionStorage()

  };

  const removeFromCart = (productId: number) => {
    const index = cartItems.findIndex(item => item.productId === productId);
    if (index !== -1) {
      cartItems.splice(index, 1);
      updateSessionStorage()
    } else {
      alert("Something went wrong, Please try again!");
    }
  };

  const updateSessionStorage = () => {
    sessionStorage.setItem("cartItems", JSON.stringify(cartItems));
  };

  return { cartItems, addToCart, removeFromCart };
};
