class MobileMenu {
  constructor() {
    this.navDrawer = document.getElementById('nav-drawer');
    this.hamburgers = document.querySelectorAll('.nav-hamburger');
    this.bodyEl = document.querySelector('body');
    this.mobileMenu = document.querySelector('.mobile-menu');
    this.mobileMenuItems = this.mobileMenu.querySelectorAll('.menu-item-has-children');
    this.subMenus = this.mobileMenu.querySelectorAll('ul.sub-menu');
    this.init();
  }

  createChevronElement() {
    const chevronWrapper = document.createElement('div');
    chevronWrapper.classList.add('chevron-wrapper');

    chevronWrapper.innerHTML = `
        <svg class="chevron" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <path fill="currentColor" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
        </svg>
    `;

    return chevronWrapper;
  }

  handleChevronClick(item) {
    const subMenu = item.querySelector('.sub-menu');
    const chevron = item.querySelector('.chevron');

    // Close all the submenus 
    // need to remove the 'rotate' as well
    // this.subMenus.forEach(menu => menu.classList.remove('open'));

    if (!subMenu.classList.contains('open')) {
      subMenu.classList.add('open')
      chevron.classList.add('rotate')
    } else {
      subMenu.classList.remove('open')
      chevron.classList.remove('rotate')
    }
  }


  init() {
    this.hamburgers.forEach(burger => {
      burger.addEventListener('click', () => {
        this.navDrawer.classList.toggle('open');
        this.bodyEl.classList.toggle('no-scroll');
      });
    });

    this.mobileMenuItems.forEach(item => {
      const subMenu = item.querySelector('ul.sub-menu');
      if (!subMenu) return;

      const chevron = this.createChevronElement();
      chevron.addEventListener('click', (e) => this.handleChevronClick(item));
      item.insertBefore(chevron, subMenu);

    });
  };

};

export default MobileMenu;