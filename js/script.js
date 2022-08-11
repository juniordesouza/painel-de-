const dataRecebida = document.querySelectorAll("#data-vencida");
const btnMobile = document.getElementById("menu-mobile");

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
