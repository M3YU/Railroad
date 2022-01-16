(function () {
  $(function () {
    var $accordion, $wideScreen;
    $accordion = $('#accordion').children('li');
    $wideScreen = $(window).width() > 767;
    if ($wideScreen) {
      $accordion.on('mouseenter click', function (e) {
        var $this;
        e.stopPropagation();
        $this = $(this);
        if ($this.hasClass('out')) {
          $this.addClass('out');
        } else {
          $this.addClass('out');
          $this.siblings().removeClass('out');
        }
      });
    } else {
      $accordion.on('touchstart touchend', function (e) {
        var $this;
        e.stopPropagation();
        $this = $(this);
        if ($this.hasClass('out')) {
          $this.addClass('out');
        } else {
          $this.addClass('out');
          $this.siblings().removeClass('out');
        }
      });
    }
  });
}.call(this));


let photo = document.querySelector('.accordion-photo')
let btns = document.querySelectorAll('.accordion-button')

btns.forEach((btn, index) => {
  btn.addEventListener('click', function () {
    if (index === 0) {
      photo.src = '/img/news/租車-02.jpg'
    } else if (index === 1) {
      photo.src = '/img/news/租車-02.jpg'
    } else {
      photo.src = '/img/news/租車-02.jpg'
    }
  })
});