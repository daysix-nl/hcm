try {
  const button = document.querySelector(".button-hamburger");

  button.addEventListener("click", () => {
    const menu = document.querySelector(".menu");
    button.classList.toggle("button-hamburger--active");
    menu.classList.toggle("menu--active");
  });
} catch (error) {}

try {
  const calculateRootMargin = () => {
    const topMargin = -209;
    const otherMargins = window.screen.height - 208;

    return `${topMargin}px 0px ${otherMargins}px 0px`;
  };

  const elementsToObserve = document.querySelectorAll(".timeline-container");

  const intersectionCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("in-view");
      } else {
        entry.target.classList.remove("in-view");
      }
    });
  };

  const observer = new IntersectionObserver(intersectionCallback, {
    threshold: 1,
    rootMargin: calculateRootMargin(),
  });

  elementsToObserve.forEach((element) => observer.observe(element));
} catch (error) {}
