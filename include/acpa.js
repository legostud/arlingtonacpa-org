const menuButton = document.querySelector(".js-open-menu__button");
const menu = document.querySelector(".js-main-navigation");
let isOpen = menuButton.getAttribute("aria-expanded") === "true" || false;
let moveFocus = true;

const bindClickAway = () => {
  const unbind = () => {
    document.removeEventListener("click", handleClick);
    document.removeEventListener("keydown", handleKeyDown);
    document.removeEventListener("inFocus", handleFocus);
  };

  const handleClick = (e)=> {
    // click is inside
    if(menu === e.target || menu.contains(e.target)) {
      return;
    } else {
      unbind();
      closeMenu();
    }
  };

  const handleKeyDown = (e)=> {
    if (e.key === "Esc" || e.key === "Escape") {
      closeMenu(moveFocus);
    }
  };

  const handleFocus = (e)=> {
    moveFocus = menu === e.target || menu.contains(e.target);
  };

  document.addEventListener("click", handleClick);
  document.addEventListener("keydown", handleKeyDown);
  document.addEventListener("focusin", handleFocus);
}

const openMenu = () => {
  isOpen = true;
  menuButton.setAttribute("aria-expanded", "true");
  bindClickAway();
}

const closeMenu = (moveFocus = false) => {
  isOpen = false;
  menuButton.setAttribute("aria-expanded", "false");
  if(moveFocus) {
    menuButton.focus();
  }
}

menuButton.addEventListener("click", ()=> {
  if(isOpen) {
    closeMenu();
  } else {
    openMenu();
  }
})
