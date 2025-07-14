// ícones Menu

let menuHamburguer = document.querySelector("#menu-hamburguer");
let navegacao = document.querySelector(".navegacao");

menuHamburguer.onclick = () => {
  menuHamburguer.classList.toggle("bx-x");
  navegacao.classList.toggle("active");
};

// seções coom links ativos
let secao = document.querySelectorAll("section");
let linkMenu = document.querySelectorAll("header nav a");

window.onscroll = () => {
  secao.forEach((sec) => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute("id");

    if (top >= offset && top < offset + height) {
      linkMenu.forEach((links) => {
        links.classList.remove("ativo");
        document
          .querySelector("header nav a[href*=" + id + "]")
          .classList.add("ativo");
      });
    }
  });

  //   sticky navbar

  let header = document.querySelector(".header");

  header.classList.toggle("sticky", window.scrollY > 100);

  // remove

  menuHamburguer.classList.remove("bx-x");
  navegacao.classList.remove("ativo");
};

/*========== dark light mode ==========*/

let darkModeIcon = document.querySelector("#modo-escuro-icon");

darkModeIcon.onclick = () => {
  darkModeIcon.classList.toggle("bx-sun");
  document.body.classList.toggle("dark-mode");
};

/*========== scroll reveal ==========*/

ScrollReveal({
  distance: "80px",
  duration: 2000,
  delay: 200,
});

ScrollReveal().reveal(".caixa-home, .subtitulos", { origin: "top" });
ScrollReveal().reveal(
  ".home-img img, .container-servicos, .caixa-projetos, .caixa-clientes, .contato form",
  { origin: "bottom" }
);
ScrollReveal().reveal(".caixa-home h1, .caixa-foto img", { origin: "left" });
ScrollReveal().reveal(".caixa-home h3, .caixa-home p, .conteudo-sobre", {
  origin: "right",
});
