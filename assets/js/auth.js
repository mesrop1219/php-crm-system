const show_data = document.querySelectorAll(".show");

show_data.forEach(
  e => e.addEventListener("click", () => {
  if (e.parentElement.childNodes[1].type === "password") {
    e.parentElement.childNodes[1].type = "text";
  }else {
    e.parentElement.childNodes[1].type = "password";
  }
})
);