window.addEventListener('load', function () {
    var overlay = document.getElementById('loader');
    this.setTimeout(() => overlay.style.display = 'none', 1800)
});

document.addEventListener('DOMContentLoaded', function () {
    var overlay = document.getElementById('loader');
    overlay.style.display = 'flex';
});