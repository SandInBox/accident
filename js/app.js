let a = document.querySelector('.header__up-flex-inline');

function one() {
    a.textContent = 'Комиссаров на линии: 4';
}

function two() {
    a.textContent = 'Комиссаров на линии: 5';
}

function three() {
    a.textContent = 'Комиссаров на линии: 3';
}

function four() {
    a.textContent = 'Комиссаров на линии: 2';
}

window.addEventListener('DOMContentLoaded', () => {
    setTimeout(one, 5000);
})

window.addEventListener('DOMContentLoaded', () => {
    setTimeout(two, 15000);
})

window.addEventListener('DOMContentLoaded', () => {
    setTimeout(three, 30000);
})

window.addEventListener('DOMContentLoaded', () => {
    setTimeout(four, 45000);
})

