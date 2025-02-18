<div>
  <div class="theme-toggle" role="radiogroup" aria-label="Theme switcher">
    <div class="theme-toggle__option">
      <input type="radio" id="system" name="theme" value="system" checked>
      <label for="system">System</label>
    </div>

    <div class="theme-toggle__option">
      <input type="radio" id="light" name="theme" value="light">
      <label for="light">Light</label>
    </div>

    <div class="theme-toggle__option">
      <input type="radio" id="dark" name="theme" value="dark">
      <label for="dark">Dark</label>
    </div>
  </div>
</div>

<style>
  .theme-toggle {
  display: flex;
  gap: 1rem;
  align-items: center;
  margin: 1rem 0;
  background-color: var(--color-body);
  padding: 0.5rem;
  border-radius: 8px;
}

.theme-toggle__option {
  display: flex;
  align-items: center;
  gap: 0.25rem;
  padding: 0.5rem 1rem;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.theme-toggle__option:hover {
  background-color: rgba(0, 0, 0, 0.1);
}

.theme-toggle label {
  color: var(--color-dark);
  font-family: var(--font-family-body);
  font-size: var(--size-300);
  cursor: pointer;
}

.theme-toggle input[type="radio"] {
  margin: 0;
  cursor: pointer;
}

.theme-toggle input[type="radio"]:checked + label {
  font-weight: 600;
}
</style>
