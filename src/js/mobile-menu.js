export function mobileMenu() {
  const navDrawer = document.getElementById('nav-drawer');
  const hamburgers = document.querySelectorAll('.nav-hamburger');
  const bodyEl = document.querySelector('body');
  const subMenuChevrons = document.querySelectorAll('.mobile-menu li.has-sub-menu .chevron');
  const subMenus = document.querySelectorAll('.mobile-menu ul.sub-menu');

  hamburgers.forEach(burger => {
    burger.addEventListener('click', () => {
      navDrawer.classList.toggle('open');
      bodyEl.classList.toggle('no-scroll');
    });
  });

  subMenuChevrons.forEach(chevron => {
    const subMenu = chevron.nextElementSibling;
    chevron.addEventListener('click', () => {
      // Close any other open sub-menus
      subMenus.forEach(menu => {
        if (menu !== subMenu) {
          menu.classList.remove('open');
          menu.previousElementSibling.classList.remove('rotated');
        }
      });

      // Toggle the clicked sub-menu
      subMenu.classList.toggle('open');
      chevron.classList.toggle('rotated');
    });
  });
}