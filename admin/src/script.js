// sign in 
function adminSignin() {
  //console.log("admin sign in");
  var username = document.getElementById("admin_username").value;
  var password = document.getElementById("admin_password").value;

  var form = new FormData();
  form.append("uname", username);
  form.append("pass", password);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4) {
      var text = req.responseText;
      if (text == true) {
        window.location = "../view/adminPanel.php";
      } else {
        alert("please enter valied data");
      }
    }
  };
  req.open("POST", "../process/adminSigninProcess.php", true);
  req.send(form);
}

function setProduct_for_update(element) {

  //uncheckAllColors
  for (var i = 1; i <= 20; i++) {
    var colorElement = document.getElementById("prod_color-" + i);
    if (colorElement) {
      colorElement.checked = false;
    }
  }


  let val = element;

  fetch('../process/setProductForUpdate.php?prodId=' + val, {
    method: "GET",
  })
    .then((response) => {
      //return response.text();
      return response.status === 200 ? response.json() : (window.location = "../view/error_page.php");
    })
    .then((data) => {
      document.getElementById("prodTitle").value = data.prodTitle;
      document.getElementById("prodType").value = data.prodType;
      document.getElementById("vehType").value = data.vehType;
      document.getElementById("model").value = data.model;
      document.getElementById("partnum").value = data.partnum;
      document.getElementById("samDis").value = data.samDis;
      document.getElementById("Dis").value = data.Dis;
      document.getElementById("price").value = data.price;

      //set colors
      if (data.colors.length > 0) {
        for (let i = 0; i < data.colors.length; i++) {
          let colorElement = document.getElementById("prod_color-" + (i + 1))
          if (colorElement && colorElement.value == data.colors.color_id) {
            colorElement.checked = true
          }
        }
      }

      data.colors.forEach(function (color) {
        var found = false;
        for (var i = 1; i <= 20; i++) {
          var colorElement = document.getElementById("prod_color-" + i);
          if (colorElement && colorElement.value == color.color_id) {
            colorElement.checked = true;
            found = true;
          }
        }


        if (!found) {
          for (var i = 1; i <= 20; i++) {
            var colorElement = document.getElementById("prod_color-" + i);
            if (colorElement) {
              colorElement.checked = false;
            }
          }
        }
      });

      //setimg
      if (data.images.length > 0) {
        document.getElementById("img-mainadd").src = '../../product/' + data.images[0];

        var defaultImagePath = '../resources/images/imageBg.jpeg';
        for (var i = 1; i <= 20; i++) {
          if (i <= data.images.length) {
            document.getElementById("imgadd-" + i).src = '../../product/' + data.images[i - 1];
          } else {
            document.getElementById("imgadd-" + i).src = defaultImagePath;
          }
        }

      }

    // console.log(data);

    })
    .catch((error) => {
    //   location.href="./manage.php";
    console.log(error);
    });

}

function addProductimage() {
  var image = document.getElementById("imageSelect_add");

  image.onchange = function () {
    var file_count = image.files.length;

    if (file_count <= 20) {
      for (var x = 0; x < file_count; x++) {
        var file = this.files[x];
        var url = window.URL.createObjectURL(file);

        if (x === 0) {
          // Set the first image to the element with ID "abs"
          document.getElementById("img-mainadd").src = url;
        } else {
          // Set the rest of the images to elements with IDs "imgadd-2", "imgadd-3", etc.
          document.getElementById("imgadd-" + x).src = url;
        }
      }
    } else {
      alert("Please select 2 or less than 20 images.");
    }
  };
}

//add product
function addProduct() {
  var name = document.getElementById("prodTitle").value;
  var prodType = document.getElementById("prodType").value;
  var vehType = document.getElementById("vehType").value;
  var model = document.getElementById("model").value;
  var partnum = document.getElementById("partnum").value;
  var samDis = document.getElementById("samDis").value;
  var dis = document.getElementById("Dis").value;
  var price = document.getElementById("price").value;
  
  var btn = document.getElementById("add_btn");
  var spinner = document.getElementById("spinner");
  
  btn.classList.add("d-none");
  spinner.classList.remove("d-none");

  const img = document.getElementById("imageSelect_add");
  var imgArray = [];
  var files = img.files;
  for (var x = 0; x < files.length; x++) {
    imgArray.push(files[x]);
  }

  //add color
  var colors = [];
  for (var x = 1; x < 50; x++) {
    var color = document.getElementById("prod_color-" + x);
    if (color && color.checked) {
      colors.push(color.value);
    }
  }

  //color
  var data = {
    'colors': colors,
  };
  var dataObj = JSON.stringify(data);


  var form = new FormData();
  form.append("name", name)
  form.append("prodType", prodType)
  form.append("vehType", vehType)
  form.append("model", model)
  form.append("partnum", partnum)
  form.append("samDis", samDis)
  form.append("dis", dis)
  form.append("price", price)
  form.append("dataObj", dataObj)
  for (var i = 0; i < imgArray.length; i++) {
    form.append('images[]', imgArray[i]);
  }


  fetch('../process/addProduct.php', {
    method: "POST",
    body: form,
  })
    .then((response) => {
      //return response.text();
      return response.status === 200 ? response.json() : (window.location = "../view/error_page.php");
    })
    .then((data) => {
      if (data.isAllFill) {
        alert("Product Adding Successful !")
        window.location.reload();
      } else {
        alert("Fill All Required Fields !")
        btn.classList.remove("d-none");
  spinner.classList.add("d-none");
      }
    })
    .catch((error) => {
      console.log(error);
    });




}

//update product
function updateProduct(id) {
  var name = document.getElementById("prodTitle").value;
  var prodType = document.getElementById("prodType").value;
  var vehType = document.getElementById("vehType").value;
  var model = document.getElementById("model").value;
  var partnum = document.getElementById("partnum").value;
  var samDis = document.getElementById("samDis").value;
  var dis = document.getElementById("Dis").value;
  var price = document.getElementById("price").value;

  const img = document.getElementById("imageSelect_add");
  var imgArray = [];
  var files = img.files;
  for (var x = 0; x < files.length; x++) {
    imgArray.push(files[x]);
  }

  //add color
  var colors = [];
  for (var x = 1; x < 50; x++) {
    var color = document.getElementById("prod_color-" + x);
    if (color && color.checked) {
      colors.push(color.value);
    }
  }

  //color
  var data = {
    'colors': colors,
  };
  var dataObj = JSON.stringify(data);


  var form = new FormData();
  form.append("id", id)
  form.append("name", name)
  form.append("prodType", prodType)
  form.append("vehType", vehType)
  form.append("model", model)
  form.append("partnum", partnum)
  form.append("samDis", samDis)
  form.append("dis", dis)
  form.append("price", price)
  form.append("dataObj", dataObj)
  for (var i = 0; i < imgArray.length; i++) {
    form.append('images[]', imgArray[i]);
  }


  fetch('../process/updateProduct.php', {
    method: "POST",
    body: form,
  })
    .then((response) => {
      //return response.text();
      return response.status === 200 ? response.json() : (window.location = "../view/error_page.php");
    })
    .then((data) => {
      if (data.isDone) {
        alert("Update is Successfull !")
        window.location.reload();
      } else {
        alert("Somthing went wrong !")
        window.location.reload();
      }
      console.log(data);
    })
    .catch((error) => {
      console.log(error);
    });

}

function deleteProduct(id) {

  fetch('../process/deleteproduct.php?id=' + id, {
    method: "GET",
  })
    .then((response) => {
      //return response.text();
      return response.status === 200 ? response.json() : (window.location = "../view/error_page.php");
    })
    .then((data) => {
      if (data.isDelete) {
        alert("Data has been deleted!")
        window.location.reload();
      } else {
        alert("Somthing went wrong !")
        window.location.reload();
      }

      console.log(data);
    })
    .catch((error) => {
      console.log(error);
    });
}

//add types
function addProdTypeVisible() {
  let addProdTypeSec = document.getElementById("addProdTypeSec");
  addProdTypeSec.classList.toggle("d-none")
}
function addVehiTypeVisible() {
  let addVehiTypeSec = document.getElementById("addVehiTypeSec");
  addVehiTypeSec.classList.toggle("d-none")
}
function addModelVisible() {
  let addModelSec = document.getElementById("addModelSec");
  addModelSec.classList.toggle("d-none")
}

//====================================================
function addProdType() {
  let addProdType = document.getElementById("addProdType").value;

  fetch('../process/addProdType.php?type=' + addProdType, {
    method: "GET",
  })
    .then((response) => {
      //return response.text();
      return response.status === 200 ? response.json() : (window.location = "../view/error_page.php");
    })
    .then((data) => {
      if (data.isSet) {
        if (!data.isAlreadyExists) {
          alert("Data added!");
          addProdTypeVisible();
          document.getElementById("addProdType").value = "";

          var selectElement = document.getElementById("prodType");
          selectElement.innerHTML = "";

          // Add a default option
          var defaultOption = document.createElement("option");
          defaultOption.disabled = true;
          defaultOption.selected = true;
          defaultOption.value = "";
          defaultOption.textContent = "-- select product type --";
          selectElement.appendChild(defaultOption);

          for (var i = 0; i < data.getType.length; i++) {
            var option = document.createElement("option");
            option.value = data.getType[i].id;
            option.textContent = data.getType[i].type;
            selectElement.appendChild(option);
          }


        } else {
          alert("Already exist data")
        }
      } else {
        alert("Please add Data to 'type input fields' ")
      }
    })
    .catch((error) => {
      console.log(error);
    });

}

function addVehiType() {
  let addVehiType = document.getElementById("addVehiType").value;

  fetch('../process/addVehiType.php?type=' + addVehiType, {
    method: "GET",
  })
    .then((response) => {
      //return response.text();
      return response.status === 200 ? response.json() : (window.location = "../view/error_page.php");
    })
    .then((data) => {
      if (data.isSet) {
        if (!data.isAlreadyExists) {
          alert("Data added!");
          addVehiTypeVisible();
          document.getElementById("addVehiType").value = "";

          var selectElement = document.getElementById("vehType");
          selectElement.innerHTML = "";

          // Add a default option
          var defaultOption = document.createElement("option");
          defaultOption.disabled = true;
          defaultOption.selected = true;
          defaultOption.value = "";
          defaultOption.textContent = "-- select product type --";
          selectElement.appendChild(defaultOption);

          for (var i = 0; i < data.getType.length; i++) {
            var option = document.createElement("option");
            option.value = data.getType[i].id;
            option.textContent = data.getType[i].type;
            selectElement.appendChild(option);
          }


        } else {
          alert("Already exist data")
        }

      } else {
        alert("Please add Data to 'type input fields' ")
      }
    })
    .catch((error) => {
      console.log(error);
    });

}

function addModel() {
  let addModel = document.getElementById("addModel").value;

  fetch('../process/addModel.php?type=' + addModel, {
    method: "GET",
  })
    .then((response) => {
      //return response.text();
      return response.status === 200 ? response.json() : (window.location = "../view/error_page.php");
    })
    .then((data) => {
      if (data.isSet) {
        if (!data.isAlreadyExists) {
          alert("Data added!");
          addModelVisible();
          document.getElementById("addModel").value = "";

          var selectElement = document.getElementById("model");
          selectElement.innerHTML = "";

          // Add a default option
          var defaultOption = document.createElement("option");
          defaultOption.disabled = true;
          defaultOption.selected = true;
          defaultOption.value = "";
          defaultOption.textContent = "-- select product type --";
          selectElement.appendChild(defaultOption);

          for (var i = 0; i < data.getType.length; i++) {
            var option = document.createElement("option");
            option.value = data.getType[i].id;
            option.textContent = data.getType[i].model;
            selectElement.appendChild(option);
          }



        } else {
          alert("Already exist data")
        }

      } else {
        alert("Please add Data to 'type input fields' ")
      }
    })
    .catch((error) => {
      console.log(error);
    });

}

function addcolor() {
  let addcolor = document.getElementById("addcolor").value;

  fetch('../process/addcolor.php?type=' + addcolor, {
    method: "GET",
  })
    .then((response) => {
      //return response.text();
      return response.status === 200 ? response.json() : (window.location = "../view/error_page.php");
    })
    .then((data) => {
      if (data.isSet) {
        if (!data.isAlreadyExists) {
          alert("Data added!");

          // Reference to the div containing checkboxes
          var colorCheckboxesDiv = document.getElementById("colorCheckboxes");

          // Clear existing checkboxes in the div
          colorCheckboxesDiv.innerHTML = "";

          // Loop through data.getType and add checkboxes to the div
          for (var i = 0; i < data.getType.length; i++) {
            var checkboxDiv = document.createElement("div");
            checkboxDiv.className = "col-6 col-lg-3 text-dark-50";

            var checkbox = document.createElement("input");
            checkbox.type = "checkbox";
            checkbox.value = data.getType[i].id;
            checkbox.className = "mt-1 mr-3";
            checkbox.id = "prod_color-" + (i + 1);

            var label = document.createTextNode(" " + data.getType[i].color);

            checkboxDiv.appendChild(checkbox);
            checkboxDiv.appendChild(label);

            colorCheckboxesDiv.appendChild(checkboxDiv);
          }



        } else {
          alert("Already exist data")
        }

      } else {
        alert("Please add Data to 'type input fields' ")
      }
    })
    .catch((error) => {
      console.log(error);
    });

}

//----- additional page------
function addProdType1() {
  let addProdType = document.getElementById("addProdType").value;

  fetch('../process/addProdType.php?type=' + addProdType, {
    method: "GET",
  })
    .then((response) => {
      //return response.text();
      return response.status === 200 ? response.json() : (window.location = "../view/error_page.php");
    })
    .then((data) => {
      if (data.isSet) {
        if (!data.isAlreadyExists) {
          alert("Data added!");
        } else {
          alert("Already exist data")
        }
      } else {
        alert("Please add Data to 'type input fields' ")
      }
    })
    .catch((error) => {
      console.log(error);
    });

}

function addVehiType1() {
  let addVehiType = document.getElementById("addVehiType").value;

  fetch('../process/addVehiType.php?type=' + addVehiType, {
    method: "GET",
  })
    .then((response) => {
      //return response.text();
      return response.status === 200 ? response.json() : (window.location = "../view/error_page.php");
    })
    .then((data) => {
      if (data.isSet) {
        if (!data.isAlreadyExists) {
          alert("Data added!");
        } else {
          alert("Already exist data")
        }

      } else {
        alert("Please add Data to 'type input fields' ")
      }
    })
    .catch((error) => {
      console.log(error);
    });

}

function addModel1() {
  let addModel = document.getElementById("addModel").value;

  fetch('../process/addModel.php?type=' + addModel, {
    method: "GET",
  })
    .then((response) => {
      //return response.text();
      return response.status === 200 ? response.json() : (window.location = "../view/error_page.php");
    })
    .then((data) => {
      if (data.isSet) {
        if (!data.isAlreadyExists) {
          alert("Data added!");
        } else {
          alert("Already exist data")
        }

      } else {
        alert("Please add Data to 'type input fields' ")
      }
    })
    .catch((error) => {
      console.log(error);
    });

}

function addcolor1() {
  let addcolor = document.getElementById("addcolor").value;

  fetch('../process/addcolor.php?type=' + addcolor, {
    method: "GET",
  })
    .then((response) => {
      //return response.text();
      return response.status === 200 ? response.json() : (window.location = "../view/error_page.php");
    })
    .then((data) => {
      if (data.isSet) {
        if (!data.isAlreadyExists) {
          alert("Data added!");
        } else {
          alert("Already exist data")
        }

      } else {
        alert("Please add Data to 'type input fields' ")
      }
    })
    .catch((error) => {
      console.log(error);
    });

}


function request(method, url, form, callback) {
  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4) {
      var text = req.responseText;
      callback(text);
    }
  };
  req.open(method, url, true);
  req.send(form);
}


function loadProductCode(){

  var barcode = document.getElementById("barcode").value;

  var method = "POST";
  var url = "../process/loadProductBy_id.php";
  var form = new FormData();
  form.append("code", barcode);

  request(method, url, form, function (response) {
    document.getElementById("productlist").innerHTML = response;
  });


}


function searchProduct(){

  var barcode = document.getElementById("search-product").value;

  var method = "POST";
  var url = "../process/loadProductBy_name.php";
  var form = new FormData();
  form.append("code", barcode);

  request(method, url, form, function (response) {
    document.getElementById("productlist").innerHTML = response;
  });


}