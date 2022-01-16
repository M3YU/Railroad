
//頁籤
var topElements = document.querySelectorAll('.top');
var mainElements = document.querySelectorAll('.main');
for (let i = 0; i < topElements.length; i++) {
  topElements[i].addEventListener('click', function () {
    for (let j = 0; j < topElements.length; j++) {

      topElements[j].classList.remove('active');
      mainElements[j].classList.remove('active');
    }
    topElements[i].classList.add('active');
    mainElements[i].classList.add('active');
  });
}

/* // 登入 */
$('.tabs .tab').click(function () {
  if ($(this).hasClass('signin')) {
    $('.tabs .tab').removeClass('active');
    $(this).addClass('active');
    $('.cont').hide();
    $('.signin-cont').show();
  }
  if ($(this).hasClass('signup')) {
    $('.tabs .tab').removeClass('active');
    $(this).addClass('active');
    $('.cont').hide();
    $('.signup-cont').show();
  }
});
$('.container .bg').mousemove(function (e) {
  var amountMovedX = (e.pageX * -1 / 30);
  var amountMovedY = (e.pageY * -1 / 9);
  $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
});


var swiper = new Swiper(".swiper", {
  slidesPerView: 4,
  spaceBetween: 20,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
