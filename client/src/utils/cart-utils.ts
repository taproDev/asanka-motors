interface CartItem {
  productId: number;
  price: number;
  qty:number;
}

let cartItems: CartItem[] = [];

//cart items add/remove session storage
export const useCart = () => {

  //cart add
  const addToCart = (productId: number, price: number , qty:number = 1) => {
    const newItem: CartItem = { productId, price , qty };
    cartItems.push(newItem);
    updateSessionStorage()

  };

  //cart remove
  const removeFromCart = (productId: number) => {
    const index = cartItems.findIndex(item => item.productId === productId);
    if (index !== -1) {
      cartItems.splice(index, 1);
      updateSessionStorage()
    } else {
      alert("Something went wrong, Please try again!");
    }
  };

  //tempoy cart item store in sesssion
  const updateSessionStorage = () => {
    sessionStorage.setItem("cartItems", JSON.stringify(cartItems));
  };

  return { cartItems, addToCart, removeFromCart };
};


//read session data
export const getcartItemsSessionData = ()=>{
  const cartItemsString = sessionStorage.getItem("cartItems");
  const cartItems = cartItemsString ? JSON.parse(cartItemsString) : [];

  return {cartItems};
}