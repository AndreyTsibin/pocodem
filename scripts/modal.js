//Получить все кнопки на странице
const designBtn = document.querySelectorAll('.design__btn');
const modalOverlay = document.querySelector('.modal-overlay');
const modalClose = document.querySelector('.modal-close');
const modal = document.querySelector('.modal');


designBtn.forEach(btn => {
  btn.addEventListener('click', showModal);
});

function showModal() {
  modalOverlay.style.display = 'flex';
  modal.classList.add('show');
  document.body.style.overflow = 'hidden';

  modalClose.addEventListener('click', hideModal);
  modalOverlay.addEventListener('click', hideModal);

  function hideModal(e) {
    if (e.target === modalOverlay || e.target === modalClose) {
      modalOverlay.style.display = 'none';
      document.body.style.overflow = 'auto';
      modalClose.removeEventListener('click', hideModal);
      modalOverlay.removeEventListener('click', hideModal);
    }
  }
}

