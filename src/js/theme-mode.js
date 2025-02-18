export function themeMode() {
  const modeBtn = document.getElementById('mode-button');
  const htmlEl = document.querySelector('html');


  modeBtn.addEventListener('click', () => {
    const isLightTheme = htmlEl.classList.contains('light-theme');

    if (isLightTheme) {
      htmlEl.classList.remove('light-theme');
      modeBtn.innerHTML = sunIcon;
      localStorage.setItem('lightTheme', 'false');
    } else {
      // The 'light-theme' class is not present on the element
      htmlEl.classList.add('light-theme');
      modeBtn.innerHTML = moonIcon;
      localStorage.setItem('lightTheme', 'true');
    }
  })
};