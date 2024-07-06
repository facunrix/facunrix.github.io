let btn = document.querySelector('#btn');
let slidebar = document.querySelector('.slidebar');
let listItem = document.querySelectorAll('.list-item');

btn.onclick = function () {
    slidebar.classList.toggle('active');
    slidebar.classList.toggle('hidden');
}
