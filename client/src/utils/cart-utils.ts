interface CartItem {
  productId: number;
  price: number;
}

let cartItems: CartItem[] = [];

export const useCart = () => {
  const addToCart = (productId: number, price: number) => {
    const newItem: CartItem = { productId, price };
    cartItems.push(newItem);
    // updateLocalStorage();

  };

  const removeFromCart = (productId: number) => {
    const index = cartItems.findIndex(item => item.productId === productId);
    if (index !== -1) {
      cartItems.splice(index, 1);
      // updateLocalStorage();
    } else {
      alert("Something went wrong, Please try again!");
    }
  };

  console.log(cartItems);
  

  // const updateLocalStorage = () => {
  //   localStorage.setItem('cartItems', JSON.stringify(cartItems));
  // };
  return { cartItems, addToCart, removeFromCart };
};
