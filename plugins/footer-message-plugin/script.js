document.addEventListener('DOMContentLoaded', () => {
    const msg = document.getElementById('footer-msg');
    if (!msg) return;
    msg.addEventListener('click', () => msg.classList.toggle('clicked'));
});
