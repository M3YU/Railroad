let copyright = document.querySelector('.copyright')
copyright.addEventListener('mouseenter', function () {
  copyright.innerText = 'Copyright By 溪文老闆'
})
copyright.addEventListener('mouseleave', function () {
  copyright.innerText = 'Copyright © 2021 僅供大數據平台開發職訓班教學使用'
})