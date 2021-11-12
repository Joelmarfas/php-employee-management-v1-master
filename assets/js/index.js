$("#login").submit(function(e){
  e.preventDefault();

  const data = {
    username: $("#username").val(),
    password: $("#password").val()
  }
console.log(data);

$.ajax ({
  url: "./src/library/loginManager.php",
  type: "POST",
  data: data,
  success: function(response) {
    console.log(response);
  }

})

// $.post("./src/library/loginManager.php", data, function (response) {

//   console.log(response)
  
  // switch (response) {
  
  // case "Login Ok":
  
  // location.href = "./src/dashboard.php";
  
  // break;
  
  
  
  // default:
  
  // break;
  
  // }
  
  
  
  })



// console.log("funciona kike");
// function removeLabel () {
//   $(logoutLabel) = document.getElementById("logoutLabel");
//   setTimeout(() => {
//     $(logoutLabel).addClass("display:none")
//   }, 2000);
// }
// removeLabel();
