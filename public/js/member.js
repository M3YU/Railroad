
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

// 開啟自訂行程詳細
const orderDetailElements = document.querySelectorAll('.order-btn');
orderDetailElements.forEach(orderDetailElement => {
    orderDetailElement.addEventListener('click', function () {
      let time = orderDetailElement.getAttribute('data-createdTime');
      let name = orderDetailElement.getAttribute('data-orderName');
      let spotsJson = JSON.parse(orderDetailElement.getAttribute('data-spotsData'));

      let tableTitle = `<div class="row align-items-center border-bottom">
                          <div class="col-2 py-2 text-end"><strong>建立日期</strong></div>
                          <div class="col-3 py-2 text-start">${time}</div>
                          <div class="col-2 py-2 text-end"><strong>行程名稱</strong></div>
                          <div class="col-5 py-2 text-start">${name}</div>
                        </div>`;
      let tableRow = '';

      spotsJson.forEach(spot => {
        let image_url = spot['image_url'];
        let name = spot['name'];
        let direction = spot['direction'];
        let distance = spot['distance'];

        tableRow += `<div class="row align-items-center">
                      <div class="col-1 py-2"><img class="img-fluid" src="/storage/${image_url}"></div>
                      <div class="col-6 py-2 text-start">${name}</div>
                      <div class="col-2 py-2"><span>${direction}</span>方向</div>
                      <div class="col-3 py-2 text-start">距離起點 <span>${distance}</span> 公里</div>
                    </div>`;
      });

      let tableText = `<div class="card card-body">`+tableTitle+tableRow+`</div>`;

      Swal.fire({
            html: tableText,
            width: 768,
        })
    });
});
