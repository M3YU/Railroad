let titles = document.querySelectorAll('.title');
let floatTitle = document.querySelector('.float-title');
let photoWall = document.querySelector('.photo-wall');
let teams = document.querySelector('.teams');
let teamForm = document.querySelector('.team-form');
let teamDetail = document.querySelector('.team-detail');
let teamWall = document.querySelector('.team-wall');
let summaries = document.querySelectorAll('.team-summary');
let team = document.querySelectorAll('.team-detail .team');
titles.forEach((title) => {
  title.addEventListener('click', function () {
    console.log(this);
    if (title.innerText == '在線行程') {
      floatTitle.style.left = '1%'
      floatTitle.innerText = '在線行程'
      active(0);
    } else if (title.innerText == '建立行程') {
      floatTitle.style.left = '34%'
      floatTitle.innerText = '建立行程'
      active(1);
    } else {
      floatTitle.style.left = '66%'
      floatTitle.innerText = '行程細節'
      active(2);
    }
  })
});


function active(index) {
  teams.classList.add('inactive');
  teamForm.classList.add('inactive');
  photoWall.classList.add('inactive');
  teamDetail.classList.add('inactive');
  if (index === 0) {
    teamWall.style.height = ''
    teams.classList.remove('inactive');
    photoWall.classList.remove('inactive');
  } else if (index === 1) {
    teamWall.style.height = '62.5vw'
    teamForm.classList.remove('inactive');
  } else {
    teamWall.style.height = '62.5vw'
    teamDetail.classList.remove('inactive');
  };
}

summaries.forEach(summary => {
  summary.addEventListener('click', function () {
    let id = summary.parentElement.getAttribute('data-id');
    team.forEach(team => {
      if (team.getAttribute('data-id') === id) {
        team.parentElement.classList.remove('inactive');
      } else {
        team.parentElement.classList.add('inactive');
      }
    });
  })
});