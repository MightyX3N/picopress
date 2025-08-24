document.addEventListener('DOMContentLoaded', () => {
    const banner = document.getElementById('test-banner');
    if (!banner) return;
    banner.addEventListener('click', () => {
        banner.style.background = banner.style.background === 'red' ? '#ffcc00' : 'red';
    });
});
