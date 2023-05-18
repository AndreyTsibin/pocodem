// Функция копирует код по нажатию на кнопку
const copyText = () => {
  const textToCopy = document.querySelector('.post__code-text').innerText;
  const copyBtn = document.querySelector('.post__code-btn');
  const copySuccess = document.querySelector('.post__copy-true');
  navigator.clipboard.writeText(textToCopy).then(() => {
    console.log('Text copied successfully!');
    copySuccess.style.display = 'block';
    copyBtn.innerText = 'Код скопирован!';
    copyBtn.style.background = '#fff';
    copyBtn.style.color = '#000';
    setTimeout(() => {
      copySuccess.classList.add('post__copy-true--show');
    }, 300);
    setTimeout(() => {
      copySuccess.classList.remove('post__copy-true--show');
    }, 4000);

  }, (err) => {
    console.error('Could not copy text: ', err);
  });
};

document.querySelector('.post__code-btn').addEventListener('click', copyText);