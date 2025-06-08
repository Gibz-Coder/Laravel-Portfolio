const navBtn = document.querySelector('.header__collapse--btn');
const nav = document.querySelector('.nav');
const navWrapper = document.querySelector('.navWrapper');
const navClose = document.querySelector('.nav__close');

// Start Toggle Header profile
const toggleProfileNav = document.querySelector('.header-profile');
const showProfileNav = document.querySelector('.header-profile-nav');
toggleProfileNav.addEventListener('click', () => {
    showProfileNav.classList.toggle('show');
});
// End Toggle Header profile

// Start Add/Edit modal button - invoice
const showAddModal = document.querySelector(
    '.modal'
);
const toggleShowModal = document.querySelector(
    '.open-modal'
);
const closeShowModal = document.querySelectorAll(
    '.close-modal'
);

toggleShowModal.addEventListener('click', () => {
    showAddModal.classList.toggle('show');
});

closeShowModal.forEach((btn) => {
    btn.addEventListener('click', () => {
        showAddModal.classList.toggle('show');
    });
});
