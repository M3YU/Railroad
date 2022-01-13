let navTitles = document.querySelectorAll('.navbar-title');

navTitles.forEach(navTitle => {
  navTitle.addEventListener('mouseenter', function () {
    navTitle.querySelector('.nav-detail').classList.add('active');
  });
  navTitle.addEventListener('mouseleave', function () {
    navTitle.querySelector('.nav-detail').classList.remove('active');
  });
});