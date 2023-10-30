const logoutBtn = document.querySelector(".logout");
const loginBtn = document.querySelector(".login");

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function check() {
  if (getCookie("user")) {
    loginBtn.style.display = "none";
    logoutBtn.style.display = "block";
  }else {
    loginBtn.style.display = "block";
    logoutBtn.style.display = "none";
  }
}

check();