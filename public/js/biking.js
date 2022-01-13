window.onload = function () {
    setTimeout(function () {
        laodingVeiw.classList.add('none');
        mainVeiw.classList.remove('loaded');
    }, 4000);
};

let laodingVeiw = document.querySelector('.laoding-veiw');
let mainVeiw = document.querySelector('.veiw');
mainVeiw.innerHTML =`<div class="scroll-tip">
    <div class="mouse">
        <p>Scoll</p>
    </div>
    <h3>清滾動滑鼠滾輪</h3>
</div>
<div id="road" class="road">
    <div class="line"></div>
    <div class="shadow"></div>
</div>
<div class="camera">
    <!-- 選單 -->
    <div class="menu">
        <div class="toggle"></div>
        <!-- 調整li裡面的--i可以選擇位置 -->
        <li style="--i:3;">
            <a href="#"><ion-icon name="map-outline"></ion-icon></a>
        </li>
        <li style="--i:4;">
            <a href="#"><ion-icon name="fast-food-outline"></ion-icon></a>
        </li>
        <li style="--i:5;">
            <a href="#"><ion-icon name="bag-handle-outline"></ion-icon></a>
        </li>
        <li style="--i:6;">
            <a href="#"><ion-icon name="reader-outline"></ion-icon></a>
        </li>
    </div>
    <div class="space">
        <div class="box1">
            <div class="face1"></div>
            <div class="face2"></div>
            <div class="face3"></div>
            <div class="face4"></div>
        </div>
        <div class="box2">
            <div class="face1"></div>
            <div class="face2"></div>
            <div class="face3"></div>
            <div class="face4"></div>
        </div>
    </div>
</div>
<div class="bike"></div>
<div class="cloud cloud-1"></div>
<div class="cloud cloud-2"></div>
<div class="cloud cloud-3"></div>
<div class="cloud cloud-4"></div>
<div class="tree tree-1"></div>
<div class="tree tree-2"></div>
<div class="tree tree-3"></div>
<div class="tree tree-4"></div>
<div class="tree tree-5"></div>
<div class="tree tree-6"></div>
<div class="tree tree-7"></div>
<div class="tree tree-8"></div>
<div class="tree tree-9"></div>
<div class="mountain mountain-1"></div>
<div class="mountain mountain-2"></div>
<div class="grass grass-1 g-left"></div>
<div class="grass grass-2 g-left"></div>
<div class="grass grass-3 g-right"></div>
<div class="grass grass-4 g-right"></div>
<div class="grass grass-5 g-right"></div>
<div class="grass grass-6 g-center"></div>
<div class="grass grass-7 g-center"></div>
<div class="brige"></div>
<div class="marker marker-1"></div>
<div class="marker marker-2"></div>
<div class="marker marker-3"></div>
<div class="marker marker-4"></div>
<div class="marker marker-5"></div>

<div class="info">
    <h3 id="info"></h3>
</div>
<div class="KM km-1">
    <h3 class="km-number">0.55K</h3>
</div>
<div class="KM km-2">
    <h3 class="km-number">1.1K</h3>
</div>
<div class="KM km-3">
    <h3 class="km-number">1.5K</h3>
</div>
<div class="KM km-4">
    <h3 class="km-number">2.9K</h3>
</div>
<div class="KM km-6">
    <h3 class="km-number">4.3K</h3>
</div>`;

//畫面初始化
// window.onload = function () {
//     setTimeout(function () {
//         laodingVeiw.classList.add('none');
//         mainVeiw.classList.remove('loaded');
//     }, 4000);
// };
//按鈕選單
let toggle = document.querySelector('.camera');
let menu = document.querySelector('.menu');
toggle.onclick = function () {
    menu.classList.toggle('active')
}
//景物
//捲動提示
const scrollTip = document.querySelector('.scroll-tip');
//道路
const roadElement = document.querySelector('#road');
//中線
const lineElement = document.querySelector('.line');
//腳踏車
const bikeElement = document.querySelector('.bike');
//雲
const cloudElemets = document.querySelectorAll('.cloud');
//樹
const treeElemets = document.querySelectorAll('.tree');
//草
const grassElemets1 = document.querySelectorAll('.g-left');
const grassElemets2 = document.querySelectorAll('.g-right');
const grassElemets3 = document.querySelectorAll('.g-center');
//山
const mountainElemets = document.querySelectorAll('.mountain');
//橋
const brigeElement = document.querySelector('.brige');
//景點地標
let mapPoints = document.querySelectorAll('.marker');
//資訊框
let infoElemet = document.querySelector('.info');
let arttactionName = document.querySelector('#info');
//公里路標
let kmShowers = document.querySelectorAll('.KM');
let kmNumber = document.querySelector('.km-number');


//橫向捲軸
window.addEventListener('scroll', function () {
    let yValue = window.scrollY;
    let kNum = (yValue * 0.0005).toFixed(2);
    scrollTip.style.transform = `translateY(${yValue * 1}px)`;
    //馬路中線
    lineElement.style.left = yValue % 10 * - 50 + 'px';
    //雲
    cloudElemets.forEach(function (cloudElemet) {
        cloudElemet.style.transform = `translateX(${yValue % 2300 * - 1}px)`;
    })
    //樹
    treeElemets.forEach(function (treeElemet) {
        treeElemet.style.transform = `translateX(${yValue % 2500 * -2}px)`;
    })
    //山
    mountainElemets.forEach(function (mountainElemet) {
        mountainElemet.style.transform = `translateX(${yValue % 6000 * - 1}px)`;
    })
    //草叢1
    grassElemets1.forEach(function (grassElemet1) {
        //                                           多遠出現一次       經過的速度
        grassElemet1.style.transform = `translateX(${yValue % 1000 * - 3}px)`;
    })
    //草叢2
    grassElemets2.forEach(function (grassElemet2) {
        grassElemet2.style.transform = `translateX(${yValue % 2000 * - 3}px)`;
    })
    //草叢3
    grassElemets3.forEach(function (grassElemet3) {
        grassElemet3.style.transform = `translateX(${yValue % 5000 * - 3}px)`;
    })
    //鐵橋
    brigeElement.style.transform = `translateX(${-yValue}px)`;
    //景點
    mapPoints.forEach(function (mapPoint) {
        mapPoint.style.transform = `translateX(${- yValue}px)`;
    })
    //路牌
    kmShowers.forEach(function (kmShower) {
        kmShower.style.transform = `translateX(${- yValue}px)`;
    })


    //點擊出現
    // infoElemet.classList.remove('open')
    // mapPoint.onclick = function(){
    //     infoElemet.classList.toggle('open')
    //     arttactionName.classList.toggle('none')
    // }

    if (kNum > 5) {
        arttactionName.textContent = '';
        infoElemet.classList.remove('open')
    } else if (kNum > 4.3) {
        arttactionName.textContent = '后里馬場';
        infoElemet.classList.add('open')
    } else if (kNum > 3.6) {
        arttactionName.textContent = '';
        infoElemet.classList.remove('open')
    } else if (kNum > 2.9) {
        arttactionName.textContent = '夫妻樹';
        infoElemet.classList.add('open')
    } else if (kNum > 2.8) {
        arttactionName.textContent = '';
        infoElemet.classList.remove('open')
    } else if (kNum > 2) {
        arttactionName.textContent = '九號隧道';
        infoElemet.classList.add('open')
    } else if (kNum > 1.6) {
        arttactionName.textContent = '';
        infoElemet.classList.remove('open')
    } else if (kNum > 1) {
        arttactionName.textContent = '大甲溪花樑鋼橋';
        infoElemet.classList.add('open')
    } else if (kNum > 0.8) {
        arttactionName.textContent = '';
        infoElemet.classList.remove('open')
    } else if (kNum > 0.58) {
        arttactionName.textContent = '大方賽車場';
        infoElemet.classList.add('open');
    } else if (kNum < 0.5) {
        arttactionName.textContent = '';
        infoElemet.classList.remove('open')
    } else if (kNum > 0.4) {
        arttactionName.textContent = '榮町雜貨店';
        infoElemet.classList.add('open');
    } else if (kNum <= 0.4) {
        arttactionName.textContent = '';
        infoElemet.classList.remove('open')
    }

})