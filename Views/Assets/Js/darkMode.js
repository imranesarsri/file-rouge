// dark mode

let body = document.querySelector('body');
let btnDark = document.getElementById('btnDark');
let logo = document.querySelectorAll('.logo');

btnDark.addEventListener('click', function () {
    body.classList.toggle('dark');

});
