document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.hello-cloud');
    elements.forEach(element => {
        element.addEventListener('click', () => {
            element.classList.toggle('toggled');
            const name = element.dataset.name || 'World';
            element.textContent = element.classList.contains('toggled')
                ? `Clicked! Hello again, ${name}!`
                : `Hello, ${name}!`;
        });
    });
});
