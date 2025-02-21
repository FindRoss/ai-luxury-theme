export function themeMode() {
  const themeToggles = document.querySelectorAll('.theme-toggle__option input[type="radio"]');

  themeToggles.forEach(toggle => {

    const localStorageTheme = localStorage.getItem('theme') || "system";
    if (toggle.value == localStorageTheme) {
      toggle.checked = true;
    }



    toggle.addEventListener('change', () => {
      const mode = toggle.value;

      // if (mode == 'system') {
      //   const systemTheme = getSystemTheme();
      //   applyTheme(systemTheme);
      // } else {
      //   applyTheme(mode);
      // }

      applyTheme(mode);

    })


  });
};

export function applyTheme(mode) {
  const htmlEl = document.querySelector('html');

  if (mode == 'dark') {
    localStorage.setItem('theme', 'dark');
    htmlEl.classList.add('dark-mode');
  } else if (mode == 'light') {
    localStorage.setItem('theme', 'light');
    htmlEl.classList.remove('dark-mode');
  } else {
    localStorage.setItem('theme', 'system');
    const systemTheme = getSystemTheme();

    if (systemTheme == 'dark') {
      htmlEl.classList.add('dark-mode');
    } else {
      htmlEl.classList.remove('dark-mode');
    }
  }
}

export const getSystemTheme = () => window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
