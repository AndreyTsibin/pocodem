//Функция которая делать ссылку в меню активной
function highlightActiveMenuItem() {
  var currentUrl = window.location.href;
  var menuLinks = document.querySelectorAll('nav a');

  menuLinks.forEach(function (link) {
    if (link.href === currentUrl) {
      link.classList.add('menu__link-active');
    }
  });
}
window.addEventListener('load', function () {
  highlightActiveMenuItem();
});

// Мобильное меню
const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
mobileMenuIcon.addEventListener('click', function () {
  mobileMenuIcon.classList.toggle('active');
});

// Появление мобильного меню
const mobileMenu = document.querySelector('.mobile-menu');
mobileMenuIcon.addEventListener('click', function () {
  mobileMenu.classList.toggle('active');
});

// Поиск по сайту
const searchInput = document.getElementById('searchInput');
const searchButton = document.getElementById('searchButton');
const elements = document.getElementsByClassName('searchable');
const searchResults = document.getElementById('searchResults');
searchButton.addEventListener('click', handleSearch);
searchInput.addEventListener('keydown', function (event) {
  if (event.key === 'Enter') {
    handleSearch();
  }
});
document.addEventListener('click', function (event) {
  const isSearchResult = event.target.closest('#searchResults');
  const isSearchInput = event.target.closest('#searchInput');
  const isSearchButton = event.target.closest('#searchButton');

  if (!isSearchResult && !isSearchInput && !isSearchButton) {
    searchResults.style.display = 'none';
  }
});
function handleSearch() {
  const searchQuery = searchInput.value.toLowerCase();
  searchInput.value = '';

  let resultsHtml = '';

  for (let i = 0; i < elements.length; i++) {
    const element = elements[i];
    const content = element.textContent.toLowerCase();

    if (content.includes(searchQuery)) {
      resultsHtml += `<div class="main__content-card-search">${element.innerHTML}</div>`;
    }
  }

  if (resultsHtml !== '') {
    searchResults.innerHTML = resultsHtml;
    searchResults.style.display = 'block';
  } else {
    searchResults.innerHTML = '<p class="none__search">Ничего не найдено :(</p>';
    searchResults.style.display = 'block';
  }
}





