
let main = document.querySelector('main');
let loadingVeiw = document.querySelector('.loading-veiw');
let loadCircle = document.querySelector('.loader');
let mainVeiw = document.querySelector('.veiw');
let btnElements = document.querySelectorAll('button');
let skipBtn = document.querySelector('.skip-btn');



//籌備告示
function notYet(){
    alert('籌備中，敬請期待!!')

}
window.onload = start2();



//東豐
function start2(){
    loadCircle.classList.remove('none')
    btnElements.forEach(function(btn){
        btn.classList.add('none');
    })
    setTimeout(function () {
        loadingVeiw.classList.add('none');
        mainVeiw.classList.remove('loaded');
    }, 1000);
    main.style.minHeight = '25500px';
    bikewayVeiw2();
    dfBikeway();
    
}
///省略動畫用
function skip(){
    loadCircle.classList.remove('none');
    loadingVeiw.classList.add('none');
    mainVeiw.classList.remove('loaded');

    // main.style.minHeight = '11000px';
    // bikewayVeiw1();
    // hfBikeway();

    main.style.minHeight = '25500px';
    bikewayVeiw2();
    dfBikeway();
}
//有需要修改就打開
// skip();


//東豐頁面的結構
function bikewayVeiw2(){
    mainVeiw.innerHTML =`
        <div class="scroll-tip">
            <div class="mouse"></div>
            <h3>歡迎來到東豐</h3>
        </div>
        <div class="background df"></div>
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
                    <a href="/attraction.html"><ion-icon name="map-outline"></ion-icon></a>
                </li>
                <li style="--i:4;">
                    <a href="/group.html"><ion-icon name="bicycle"></ion-icon></a>
                </li>
                <li style="--i:5;">
                    <a href="/store.html"><ion-icon name="bag-handle-outline"></ion-icon></a>
                </li>
                <li style="--i:6;">
                    <a href="/index.html"><ion-icon name="reader-outline"></ion-icon></a>
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
        <div class="streetLight streetLight-1"></div>
        <div class="streetLight streetLight-2"></div>
        <div class="streetLight streetLight-3"></div>
        <div class="streetLight streetLight-4"></div>
        <div class="grass grass-1 g-left"></div>
        <div class="grass grass-2 g-left"></div>
        <div class="grass grass-3 g-right"></div>
        <div class="grass grass-4 g-right"></div>
        <div class="grass grass-5 g-right"></div>
        <div class="grass grass-6 g-center"></div>
        <div class="grass grass-7 g-center"></div>
        <div class="brige df"></div>
        <div class="marker marker-d-1"></div>
        <div class="marker marker-d-2"></div>
        <div class="marker marker-d-3"></div>
        <div class="marker marker-d-4"></div>
        <div class="marker marker-d-5"></div>
        <div class="marker marker-d-6"></div>
        <div class="marker marker-d-7"></div>
        <div class="marker marker-d-8"></div>
        <div class="marker marker-d-9"></div>
        <div class="marker marker-d-10"></div>
        <div class="marker marker-d-11"></div>
        <div class="marker marker-d-12"></div>


        <div class="building building-1 df"></div>
        <div class="building building-2 df"></div>
        <div class="building building-3 df"></div>
        <div class="building building-4 df">
            <h5>石岡</h5>
            <h6>豐原 <i class="fas fa-arrows-alt-h"></i> 東勢</h6>
            <h5>0蛋月台</h5>
        </div>
        <div class="building building-5 df"></div>
        <div class="building building-6 df"></div>
        <div class="building building-7 df"></div>
        <div class="building building-8 df"></div>
        <div class="building building-9 df"></div>
        <div class="building building-10 df"></div>
        <div class="building building-11 df"></div>
        <div class="building building-12 df">
            <h5>東勢客家園區</h5>
            <h6>DongShi Hakka</h6>
            <h6>Cultural Park</h6>
        </div>

        <div class="info">
            <div class="info-title"></div>
            <div class="info-description"></div>
        </div>
        <div  class="KM km-d-1">
            <h3 class="km-number">0.7K</h3>
        </div>
        <div class="KM km-d-2">
            <h3 class="km-number">1.1K</h3>
        </div>
        <div class="KM km-d-3">
            <h3 class="km-number">1.8K</h3>
        </div>
        <div class="KM km-d-4">
            <h3 class="km-number">2.3K</h3>
        </div>
        <div class="KM km-d-5">
            <h3 class="km-number">2.9K</h3>
        </div>
        <div class="KM km-d-6">
            <h3 class="km-number">3.9K</h3>
        </div>
        <div class="KM km-d-7">
            <h3 class="km-number">4.2K</h3>
        </div>
        <div class="KM km-d-8">
            <h3 class="km-number">5.4K</h3>
        </div>
        <div class="KM km-d-9">
            <h3 class="km-number">6.6K</h3>
        </div>
        <div class="KM km-d-10">
            <h3 class="km-number">7.4K</h3>
        </div>
        <div class="KM km-d-11">
            <h3 class="km-number">9.8K</h3>
        </div>
        <div class="KM km-d-12">
            <h3 class="km-number">11.6K</h3>
        </div>`;
}

//按鈕選單
let toggle = document.querySelector('.camera');
let menu = document.querySelector('.menu');
    toggle.onclick = function () {
        menu.classList.toggle('active')
    }
//景物
//捲動提示
const scrollTip = document.querySelector('.scroll-tip');
//背景
const backgroundElement = document.querySelector('.background');
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
const mountainElemets = document.querySelectorAll('.streetLight');
//橋
const brigeElement = document.querySelector('.brige');
//景點地標
let mapPoints = document.querySelectorAll('.marker');
//建物
let buildingElements = document.querySelectorAll('.building');
//資訊框
let infoElemet = document.querySelector('.info');
let attractionName = document.querySelector('.info-title');
let attractionDescription = document.querySelector('.info-description');

//公里路標
let kmShowers = document.querySelectorAll('.KM');
let kmNumber = document.querySelector('.km-number');

//景點描述
let attractionText =[
    '懷舊的場景布置、復古的柑仔店，請您停下腳步休閑一下，喝了再上。店內有天然的膠質愛玉(降膽固醇、促進代謝)，冷冷的天愛玉也可以吃熱的喔！也有蔬食簡餐喔。',
    '后豐鐵馬道招牌「花梁鋼橋」建於日治時代(明治41年)1908年完工，站在遠處觀望，立即能感受到它的氣勢雄偉。臺鐵舊山線最南端的景點，全長382公尺。',
    '「9號隧道」，亦建於西元1908年，全長1.2公里，是臺鐵舊山線最長的一座隧道，欣賞大甲溪沿岸風光，特殊的隧道穿越經驗，讓這趟悠閒的單車之旅，既豐富又令人驚豔。',
    '在九號隧道北口左迴轉，來到大樟樹休憩廣場。樟樹與榕樹天生於此，二棵不同種的樹木相生相息，枝幹交錯攀爬二樹幹，相依偎形同夫妻故稱夫妻樹。',
    '后里馬場為國內具歷史及規模的公營馬場，為日治時期臺灣總督府，臺灣光復後作為種馬繁殖及國防騎兵之訓練場所。隨著時代轉變，已轉型為具觀光休閒遊憩的馬場。',
    [
        '朴口車站位於台灣臺中市豐原區，曾為臺灣鐵路管理局東勢線（現已廢止）的鐵路車站。東勢線在1959年剛通車的時候並無此站，兩年後的1961年才設置朴口站。',
        '為華興芋仔冰的新生代新品牌。傳承40多年的技術與製造工法，讓[華興芋仔冰]老品牌繼續壯大。華興芋仔冰堅持採用天然食材及台糖砂糖，不使用糖精及香料、色素...等添加物，讓您吃得安心。',
        '車道兩旁種滿了樹木，騎了不久後可以到親水公園，此公園是引附近水圳的水來造景的。小而美的親水公園，不但是當地民眾休息散步的地方，也是單車族歇歇腳的處所。',
        '豐榮水利之碑於昭和14年(1939年)設置，碑文記載葫蘆墩圳開設始末，為當時水利工程開發的歷史見證，碑體曾於921地震中毀損，由文化局進行修復完成。',
        '橫跨大甲溪的水壩，提供台中市農業、民生及工業用水主要水源區。不論遠看或近看皆是壯觀與宏偉，水壩上游攔水成為一個大湖，每當豐水時節，兩岸青山綠水，相連環抱，甚是迷人，下游則礫石成堆風光秀麗。',
        '劇變發生在921大地震，因為石岡車站正好位於斷層上，所以原有的月台和路軌都被拉扯擠壓，嚴重扭曲變形，甚至還產生了將近5公尺高的地勢落差。',
        '據說「0蛋月台」的名稱源自於「零擔月台」，因為早期石岡地區的農產品會以零擔貨運（註）的方式，從這個月台送上火車運往豐原、台中販售，所以採用這個有趣的諧音。',
        '情人木橋位於食水嵙溪上，長40公尺寬3.5公尺的木橋，全橋沒有橋墩支撐，台灣第一次引進木橋建設技術，可防七級以上強震，更是遠東地區跨距最長的景觀木橋。夜間燈火點亮，就如浪漫的七夕情人橋。',
        '東勢線的梅子站設於一處彎道上，大致上位於梅子社區地圖上的中心位置，現在這段自行車道有一處遮棚可供休息，而真正的車站位置是在其東邊。',
        '梅子鐵橋是跨越大甲溪連接石岡區與東勢區的橋梁，作為東豐自行車綠廊豐原端與后豐鐵馬道相接，且為大東勢地區重要的觀光據點。每當遊客騎到梅子鐵橋時，大多會停駐片刻，欣賞大甲溪溪畔風光，或是拍照留念。',
        '東勢鎮內東安里「鯉魚伯公公園」闢設完成，增添鎮民一處休閒活動的場所。公園內設置太陽能景觀高燈與漫步機等多種健身器材，也種植櫻花、杜鵑花等花卉綠美化。',
        '東勢客家文化園區的文物館是由東勢火車站舊站改建而成，保留火車站內旅客等車時坐的長條椅。後方是東豐綠色走廊自行車道路，綠意景緻廣佈綠廊，這裡是觀光的新地標之一。',
    ]
];
//刪除說明欄的文字
function deleteText(){
    attractionName.textContent = '';
    attractionDescription.textContent ='';
    infoElemet.classList.remove('open');
}


//東豐段
function dfBikeway(){

    //橫向捲軸
    window.addEventListener('scroll', function () {
        let yValue = window.scrollY;
        let kNum = (yValue * 0.0005).toFixed(2);
        scrollTip.style.transform = `translateY(${yValue * 1}px)`;
        scrollTip.style.opacity = 1 -(yValue * 0.005);
        
        //腳踏車
        setTimeout(function () {
            bikeElement.style.animation =`animateBiking 1s steps(8)  running`;
        }, 100);
        
        bikeElement.style.animation='';
        //背景
        backgroundElement.style.transform = `translateX(${-yValue}px)`;
        //馬路中線
        lineElement.style.left = yValue % 10 * - 50 + 'px';
        //雲
        cloudElemets.forEach(function (cloudElemet) {
            cloudElemet.style.transform = `translateX(${yValue % 2300 * - 1}px)`;
        })
        //樹
        treeElemets.forEach(function (treeElemet) {
            treeElemet.style.transform = `translateX(${yValue % 5000 * -2}px)`;
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
        buildingElements.forEach(function (buildingElement) {
            buildingElement.style.transform = `translateX(${- yValue}px)`;
        })
        //替換說明文字
        if (kNum > 12) {
            infoElemet.classList.add('open')
            attractionName.textContent = '揪騎后豐';
            attractionDescription.innerHTML = `<a class="index-link">前往首頁</a>`;
        } else if (kNum > 11.9) {
            deleteText();
        } else if (kNum > 11.6) {
            infoElemet.classList.add('open')
            attractionName.textContent = '東勢客家園區';
            attractionDescription.textContent = attractionText[5][11];
        } else if (kNum > 10.2) {
            deleteText();
        }else if (kNum > 9.8) {
            infoElemet.classList.add('open')
            attractionName.textContent = '鯉魚伯公公園';
            attractionDescription.textContent = attractionText[5][10];
        } else if (kNum > 7.8) {
            deleteText();
        }else if (kNum > 7.4) {
            infoElemet.classList.add('open')
            attractionName.textContent = '梅子鐵橋';
            attractionDescription.textContent = attractionText[5][9];
        } else if (kNum > 7) {
            deleteText();
        }else if (kNum > 6.6) {
            infoElemet.classList.add('open')
            attractionName.textContent = '梅子車站';
            attractionDescription.textContent = attractionText[5][8];
        } else if (kNum > 5.8) {
            deleteText();
        }else if (kNum > 5.4) {
            infoElemet.classList.add('open')
            attractionName.textContent = '情人木橋';
            attractionDescription.textContent = attractionText[5][7];
        } else if (kNum > 4.6) {
            deleteText();
        }else if (kNum > 4.2) {
            infoElemet.classList.add('open')
            attractionName.textContent = '0蛋月台';
            attractionDescription.textContent = attractionText[5][6];
            bikeElement.style.transform = `translateY(-60px) rotate(0deg)`;
        } else if (kNum > 4.1) {
            deleteText();
            bikeElement.style.transform = `translateY(0px) rotate(-30deg)`;
        }else if (kNum > 3.9){
            bikeElement.style.transform = `translateY(70px) rotate(0deg)`;
        }else if (kNum > 3.8) {
            infoElemet.classList.add('open')
            attractionName.textContent = '石岡斷層月台';
            attractionDescription.textContent = attractionText[5][5];
            bikeElement.style.transform = `translateY(70px) rotate(30deg)`;
        } else if (kNum > 3.3) {
            deleteText();
            bikeElement.style.transform = `translateY(0px) rotate(0deg)`
        } else if (kNum > 2.9) {
            infoElemet.classList.add('open')
            attractionName.textContent = '石岡水壩';
            attractionDescription.textContent = attractionText[5][4];
            bikeElement.style.transform = `translateY(-60px)`;
        } else if (kNum > 2.45) {
            deleteText();
        } else if (kNum > 2.25) {
            infoElemet.classList.add('open')
            attractionName.textContent = '榮豐水利碑';
            attractionDescription.textContent = attractionText[5][3];
        }else if (kNum > 2) {
            deleteText();
        } else if (kNum > 1.8) {
            infoElemet.classList.add('open')
            attractionName.textContent = '親水公園';
            attractionDescription.textContent = attractionText[5][2];
        }else if (kNum > 1.4) {
            deleteText();
        } else if (kNum > 1.1) {
            infoElemet.classList.add('open')
            attractionName.textContent = '200  days';
            attractionDescription.textContent = attractionText[5][1];
        } else if (kNum > 0.8) {
            deleteText();
        } else if (kNum > 0.4) {
            bikeElement.style.transform = `translateY(0px) rotate(0deg)`;
            infoElemet.classList.add('open');
            infoElemet.style.backgroundImage ='url("")'
            attractionName.textContent = '朴口車站';
            attractionDescription.textContent = attractionText[5][0];
        } else if (kNum <= 0.4) {
            bikeElement.style.transform = `translateY(-60px) rotate(-20deg)`;
            deleteText();
        }
       
    });
}

//跳起來
function bikeJump(){

    window.addEventListener('keydown', function(e){
        
        if(e.code == 'KeyW' ){
            
            bikeElement.classList.add('jump');
            
            setTimeout(function () {
                bikeElement.classList.remove('jump');
            }, 500);  
    
    
        }
    });
};