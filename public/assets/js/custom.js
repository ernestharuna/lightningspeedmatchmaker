// alert('Hi there');
window.addEventListener('load', function () {
    var overlay = document.getElementById('loading-overlay');
    overlay.style.display = 'none';
});

document.addEventListener('DOMContentLoaded', function () {
    var overlay = document.getElementById('loading-overlay');
    overlay.style.display = 'flex';
});