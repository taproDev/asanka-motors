// sign in 
function adminSignin(){
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