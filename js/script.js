const dataRecebida = document.querySelectorAll("#data-vencida");
const btnMobile = document.getElementById("menu-mobile");
const color = document.querySelector(".color-picker");

color.addEventListener("change", function () {
  document.body.style.setProperty("--bg", color.value);
});

//Inverter data
dataRecebida.forEach((item, index) => {
  let data_brasileira = item.innerText.split("-").reverse().join("/");
  item.innerText = data_brasileira;
});

function toggleMenu() {
  const menu = document.getElementById("menu");
  menu.classList.toggle("active");
}

btnMobile.addEventListener("click", toggleMenu);
