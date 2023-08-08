function checkPassword() {
  let password = document.getElementById("password").value;

  let comfirm_password = document.getElementById("comfirm-password").value;

  console.log(password, comfirm_password);

  let message = document.getElementById("message");

  if (password.length != 0 && comfirm_password.length != 0) {
    if (password === comfirm_password) {
      message.textContent = "Passwords Match";
      message.style.backgroundColor = "#3ae374";
      message.style.height = "40px";
    } else {
      message.textContent = "Password don't match";
      message.style.backgroundColor = "#ff4d4d";
      message.style.height = "40px";
    }
  } else {
    message.style.backgroundColor = "";
    message.textContent = "";
  }
}
