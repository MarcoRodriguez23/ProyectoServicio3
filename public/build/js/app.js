function eventListeners(){document.querySelector(".mobile-menu").addEventListener("click",navegacionResponsive)}function navegacionResponsive(){const e=document.querySelector(".navegacion");e.classList.contains("mostrar")?e.classList.remove("mostrar"):e.classList.add("mostrar")}document.addEventListener("DOMContentLoaded",(function(){eventListeners()}));