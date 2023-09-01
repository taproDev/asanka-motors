//add product - addProductProcess
function addProduct(){
    
    const img = document.getElementById("imageSelect");
    var imgArray = [];
    var files = img.files;
    for (var x = 0; x < files.length; x++) {
      imgArray.push(files[x]);
    }

    var colors = [];
    for (var x = 0; x < 11; x++) {
      var color = document.getElementById("color" + x);
      if (color && color.checked) {
        colors.push(color.value);
      }
    }
    var color = {
        'colors': colors,
    };
    var colorObj = JSON.stringify(color);


    const idArray = ["product_type","vehicle_type","product_partNum","product_title", "product_brand", "product_sampleDis", "product_discription", "product_price"];

    //data append to form
    const form = new FormData();

    for (var i = 0; i < imgArray.length; i++) {
        form.append('images[]', imgArray[i]);
    }
    form.append("colorObj",colorObj)
    form.append("idArray", JSON.stringify(idArray));
    idArray.forEach(elementId => {
      const elementValue = document.getElementById(elementId).value;
      form.append(elementId, elementValue);
    });
    

    fetch("../../admin/process/addProductProcess.php", {
        method: "POST",
        body: form,
      })
        .then((response) => {
          return response.text();
        })
        .then((data) => {
          console.log(data);
        })
        .catch((error) => {
          console.log(error);
        });
}