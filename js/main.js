(() => {
  const player = new Plyr("video");

  // Hamburger Menu

  const menu = document.querySelector("#menu");
  const hamburger = document.querySelector("#hamburger");
  const closeButton = document.querySelector("#close");
  const menuLinks = document.querySelectorAll("#menu ul a");

  function toggleMenu() {
    menu.classList.toggle("open");
    console.log("Menu toggled");
  }

  hamburger.addEventListener("click", toggleMenu);
  closeButton.addEventListener("click", toggleMenu);

  menuLinks.forEach((link) => {
    link.addEventListener("click", toggleMenu);
  });
})();
