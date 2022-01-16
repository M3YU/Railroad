let titles = document.querySelectorAll('.title');
let floatTitle = document.querySelector('.float-title');
let photoWall = document.querySelector('.photo-wall');
let teams = document.querySelector('.teams');
let teamForm = document.querySelector('.team-form');
let teamWall = document.querySelector('.team-wall')
titles.forEach((title, index) => {
  title.addEventListener('click', function () {
    console.log(this);
    console.log(index);
    if (index === 1) {
      floatTitle.style.left = '1%'
      floatTitle.innerText = '在線行程'
      active(index);
    } else if (index === 2) {
      floatTitle.style.left = '34%'
      floatTitle.innerText = '建立行程'
      active(index);
    } else {
      floatTitle.style.left = '66%'
      floatTitle.innerText = '行程細節'
      active(index);
    }
  })
});


function active(index) {
  teams.classList.add('inactive');
  teamForm.classList.add('inactive');
  photoWall.classList.add('inactive');
  if (index === 1) {
    teamWall.style.height = ''
    teams.classList.remove('inactive');
    photoWall.classList.remove('inactive');
  } else if (index === 2) {
    teamWall.style.height = '62.5vw'
    teamForm.classList.remove('inactive');
  };
}