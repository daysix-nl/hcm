try {
  const button = document.querySelector(".button-hamburger");

  button.addEventListener("click", () => {
    const menu = document.querySelector(".menu");
    button.classList.toggle("button-hamburger--active");
    menu.classList.toggle("menu--active");
  });
} catch (error) {}
