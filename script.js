document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.grid-box').forEach(box => {
        box.addEventListener('click', () => box.classList.toggle('clicked'));
    });
});
