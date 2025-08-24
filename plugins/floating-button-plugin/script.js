document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('floating-btn');
    if (!btn) return;
    btn.addEventListener('click', () => btn.classList.toggle('clicked'));
});
