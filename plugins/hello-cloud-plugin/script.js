document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.hello-cloud');
    elements.forEach(element => {
        element.addEventListener('click', () => {
            element.classList.toggle('toggled');
            element.textContent = element.classList.contains('toggled')
                ? 'Clicked! Hello again!'
                : element.textContent.replace('Clicked! Hello again!', 'Hello, World!');
        });
    });
});
