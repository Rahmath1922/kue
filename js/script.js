//Toggle class active
const navbarNav = document.querySelector('.navbar-nav');
//Ketika hamburger menu di klik
document.querySelector('#hamburger-menu').
    onclick = () => {
        navbarNav.classList.toggle('active');
    };

//toogle class active untuk search form 
const searchForm = document.querySelector('.search-form');
const searchBox = document.querySelector('#search-box');

document.querySelector('#search-button').onclick = (i) => {
    searchForm.classList.toggle('active');
    searchBox.focus();
    i.prevenDefault();
};

//Toggle class active untuk shopping cart
const shoppingCart = document.querySelector('.shopping-cart');
document.querySelector('#shopping-cart-button').onclick = (e) => {
    shoppingCart.classList.toggle('active');
    e.prevenDefault();
};

//Klik di luar elemen
const hm = document.querySelector('#hamburger-menu');
const sb = document.querySelector('#search-button');
const sc = document.querySelector('#shopping-cart-button');

document.addEventListener('click', function (e) {
    if (!hm.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }

    if (!sb.contains(e.target) && !searchForm.contains(e.target)) {
        searchForm.classList.remove('active');
    }

    if (!sc.contains(e.target) && !shoppingCart.contains(e.target)) {
        shoppingCart.classList.remove('active');
    }

});


// Modal box
const itemDetailModals = document.querySelectorAll('.modal');

document.querySelectorAll('.item-detail-button').forEach((btn, index) => {
    btn.onclick = (e) => {
        itemDetailModals[index].style.display = 'flex';
        e.preventDefault();
    };
});

// Klik tombol close modal
document.querySelectorAll('.modal .close-icon').forEach((closeBtn) => {
    closeBtn.onclick = (e) => {
        closeBtn.closest('.modal').style.display = 'none';
        e.preventDefault();
    };
});

// Klik diluar modal
window.onclick = (e) => {
    itemDetailModals.forEach((modal) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
};

