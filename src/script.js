//menu items drop down
function toggleMenuItems() {
    const list = document.getElementById("menuItems-list");
    const close = document.getElementById("menuItems-close");
    
    list.classList.toggle("d-none");
    close.classList.toggle("d-none");

    const menuList = document.getElementById("menuList");
    menuList.classList.add = "fade-down"
    menuList.classList.toggle("d-none");

}
  
document.getElementById("orderBtn").addEventListener("click", ()=>{
  document.getElementById("paymentDetails").classList.toggle("d-none");
});

// payment button toggle in payment.php

  function bankPaymentToggle() {
    const bnkPay = document.getElementById("Bank_depo_details");
    bnkPay.classList.toggle("d-none");
  }


function filterClick(){
  const div = document.getElementById("filters");
  div.classList.toggle("d-none");

  //console.log("work")
}



function searchProduct(){
  console.log("work")
}