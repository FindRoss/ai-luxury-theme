import "../assets/scss/style.scss";

import { themeMode, applyTheme, getSystemTheme } from './js/theme-mode';
import MobileMenu from "./js/mobile-menu";
import { desktopMenu } from "./js/desktop-menu";

const localStorageTheme = localStorage.getItem('theme');
if (localStorageTheme) {
  applyTheme(localStorageTheme);
} else {
  const systemTheme = getSystemTheme();
  applyTheme(systemTheme);
}

document.addEventListener('DOMContentLoaded', () => {
  themeMode();
  desktopMenu();
  const mobileMenu = new MobileMenu();
});