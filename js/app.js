const btonClosed = document.querySelector('.exit');

btonClosed.addEventListener('click', exit);

function exit() {
    window.location.href = 'http://localhost:8000/php/login.php';
}