function visibleUpdate(){
    let selector = document.getElementById("productSelector");
    let add = document.getElementById("addProductSection");
    let update = document.getElementById("updateProductSection");
    let del = document.getElementById("deleteProductSection");

    let addbtn = document.getElementById("addProcutSecBtn");
    let updatebtn = document.getElementById("updateProcutSecBtn");


    selector.classList.toggle("d-none");
    add.classList.toggle("d-none");
    update.classList.toggle("d-none");
    del.classList.toggle("d-none");
    addbtn.classList.toggle("d-none");
    updatebtn.classList.toggle("d-none");

}


//add product image
function addProductimage() {
    var image = document.getElementById("imageSelect");
  
    image.onchange = function () {
      var file_count = image.files.length;
  
      console.log(file_count);
  
      if (file_count <= 20) {
        for (var x = 0; x < file_count; x++) {
          var file = this.files[x];
          var url = window.URL.createObjectURL(file);
  
          document.getElementById("productaddimg-" + x).src = url;
        }
      } else {
        alert("Please select less than 1 images.");
      }
  
  
    };
  }

