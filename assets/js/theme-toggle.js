(() => {
  const btn = document.getElementById('theme-toggle');
  const root = document.documentElement;
  function applyTheme(t){
    root.setAttribute('data-theme', t);
    btn.textContent = t === 'dark' ? '☀️' : '🌙';
  }
  const initial = localStorage.getItem('fsa-theme') || (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
  applyTheme(initial);
  if(!btn) return;
  btn.addEventListener('click', () => {
    const next = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
    applyTheme(next);
    localStorage.setItem('fsa-theme', next);
  });
})();
