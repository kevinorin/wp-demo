document.addEventListener('DOMContentLoaded', function() {
  const headerNav = document.querySelector('.header-nav'); // Adjust this selector based on your actual HTML
  const searchForm = document.querySelector('.search-form'); // Adjust this selector

  function handleScroll() {
      if (window.scrollY > 0) {
          searchForm.classList.add('show-search');
          searchForm.classList.remove('hide-search');
      } else {
          searchForm.classList.remove('show-search');
          searchForm.classList.add('hide-search');
      }
  }

  window.addEventListener('scroll', handleScroll);
});
