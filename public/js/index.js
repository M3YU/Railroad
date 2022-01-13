//錨點js
let circles = document.querySelectorAll('.anchor-point-circle');
let lines = document.querySelectorAll('.anchor-point-line');
let titles = document.querySelectorAll('.anchor-point-title');

window.addEventListener('scroll', function () {
  let scrollPositionY = window.pageYOffset;
  let anchor = document.querySelector('.anchor-point');

  let positionY = (scrollPositionY / document.body.offsetHeight) * 100;
  // console.log(positionY);
  let addMargin = (scrollPositionY / window.innerWidth) * 100;
  // console.log(addMargin);
  if (addMargin >= 54) {
    addMargin -= 54.8;
    anchor.style.marginTop = `${addMargin}vw`
  }
  if (positionY >= 60) {
    active(4)
  } else if (positionY >= 47.5) {
    active(3)
  } else if (positionY >= 40) {
    active(2)
  } else if (positionY >= 30) {
    active(1)
  } else {
    active(0)
  }

})

function active(index) {
  reorganize();
  circles[index].style.backgroundColor = '#000000';
  titles[index].style.color = '#000000';
  if (index !== 4) {
    lines[index].style.backgroundColor = '#000000';
  }
}

function reorganize() {
  circles.forEach(function (circle) {
    circle.style.backgroundColor = '#AFAFAF'
  })
  lines.forEach(function (line) {
    line.style.backgroundColor = '#AFAFAF'
  })
  titles.forEach(function (title) {
    title.style.color = '#AFAFAF'
  })
}
//腳踏車橫向js 
let bike = document.querySelector('.bike-img');
window.addEventListener('scroll', function () {
  let scrollPositionY = window.pageYOffset;
  let addMargin = (scrollPositionY / window.innerWidth) * 100;
  if (addMargin >= 12) {
    addMargin -= 12;
    bike.style.marginRight = `${addMargin}vw`
  }
})

//小腳踏車直向js
let percent = [29, 31, 33, 35, 36, 37.5, 38, 38.2,
  38, 37, 35, 34, 33, 31, 30, 28, 26, 25, 23, 21, 20, 18, 17.5,
  17, 17.5, 18.5, 19.5, 21, 22, 23, 25, 28, 32, 36, 40, 44, 49, 54, 59, 64, 70, 76, 78, 80, 82, 84, 85, 86, 86.5, 87, 87.5, 88, 88.5, 89, 89.5, 90, 90.5, 91,
  91, 90.5, 90, 89.5, 89, 88.5, 88, 87, 85.5, 84, 82, 80, 77, 74, 70, 66, 61, 55, 49, 43, 36, 30, 24, 18, 15, 14, 13, 11.5, 10, 8.5, 7.5, 7, 6.5, 6, 6, 6,
  6, 6.5, 7, 7.5, 7.5, 8, 8, 8.5, 9.5, 11, 12.5, 13.5, 14.5, 15.5, 16.5, 18, 19.5, 21, 23, 25, 27, 29, 33, 35, 37, 38, 39, 42, 45, 48, 51, 54, 56, 58, 60, 62, 64, 66, 68, 69.5, 71, 72, 72.5, 73, 73.5, 74, 74.5, 75, 75, 75
];
let navbar = document.querySelector('.navbar')
let movingBike = document.querySelector('.bike-moving')
window.addEventListener('scroll', function () {
  let scrollPositionY = window.pageYOffset;
  let addMarginTop = (scrollPositionY / window.innerWidth) * 100;
  console.log(addMarginTop);

  if (addMarginTop < 14) {
    movingBike.style.display = 'none'
  } else {
    movingBike.style.display = 'block'
  }
  if (addMarginTop >= 49.5) {
    navbar.style.top = '0%'

  } else {
    navbar.style.top = ''

  }
  for (let i = 14; i <= 155; i++) {
    if (Math.floor(addMarginTop) == i) {
      let position = i - 14;
      // console.log(movingBike.style.right);
      movingBike.style.right = `${percent[position]}%`
      if (position < 8) {
        bikeRotate(1)
      } else if (position >= 8 && position < 23) {
        bikeRotate(0)
      } else if (position >= 23 && position < 59) {
        bikeRotate(1)
      } else if (position >= 59 && position < 95) {
        bikeRotate(0)
      } else if (position >= 95 && position < 137) {
        bikeRotate(1)
      } else {
        bikeRotate(0)
      }
    }
  }
  if (addMarginTop >= 14 && addMarginTop <= 155) {
    marginTop = addMarginTop - 14;
    movingBike.style.marginTop = `${marginTop}vw`
  }

})


//草叢
let grass = document.querySelector('.grass');
let billboard = document.querySelector('.billboard');
grass.addEventListener('mouseenter', function () {
  billboard.style.display = 'block'
})
billboard.addEventListener('mouseenter', function () {
  billboard.style.display = 'block'
})

grass.addEventListener('mouseleave', function () {
  billboard.style.display = 'none'
})

function bikeRotate(index) {
  if (index === 0) {
    movingBike.style.transform = 'rotateY(0deg)'
  } else {
    movingBike.style.transform = 'rotateY(-180deg)'
  }
}