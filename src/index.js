import "../assets/scss/style.scss";

import { themeMode, applyTheme, getSystemTheme } from './js/theme-mode';
import { mobileMenu } from "./js/mobile-menu";

const localStorageTheme = localStorage.getItem('theme');
if (localStorageTheme) {
  applyTheme(localStorageTheme);
} else {
  const systemTheme = getSystemTheme();
  applyTheme(systemTheme);
}

document.addEventListener('DOMContentLoaded', () => {
  themeMode();
  mobileMenu();
});