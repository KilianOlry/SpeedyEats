let toggleBtn = document.getElementById("ID_toggle");
menu = document.getElementById("ID_menu");

toggleBtn.addEventListener("click", () => {
  toggleBtn.classList.toggle("active");
  menu.classList.toggle("active_menu");
});
