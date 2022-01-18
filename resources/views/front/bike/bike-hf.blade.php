<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>揪騎后豐</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/bike.css">
    <style>
        button{
            position: relative;
            z-index: 22;
            width: 850px;
            height: 850px;
            top: 5%;
            left: 5%;
            border: none;
            background-color: transparent;
            transition: 0.1s;
            background-image: url('/img/biking/LOGO.png');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            cursor: pointer;
        }
        
        button.none{
            display: none;
        }
        .loading-veiw{
            position: fixed;
            z-index: 20;
            background-color: rgb(29, 28, 28);
            width: 100vw;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.5s;
            background-image: url('/img/biking/start.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .loading-veiw.none{
            opacity: 0;
            z-index: -5;
        }
        .loader{
            position: fixed;
            z-index: 10;
            top: calc(50%-50px);
            left: calc(50%-50px) ;
            width: 100px;
            height: 100px;
            border: 5px #ccc solid;
            border-bottom: 5px solid #86817c;
            border-radius: 50px;
            animation: loading  1s linear infinite;
        }
        .loader.none{
            display: none;
        }
        .loader::before{
            content: '';
            position: fixed;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            border: 5px #ccc solid;
            border-bottom: 5px solid #4e5643;
            border-radius: 50px;
            animation: loading2 .4s linear infinite;
        }
        .loader::after{
            content: '';
            position: fixed;
            top: 22px;
            left: 22px;
            right: 22px;
            bottom: 22px;
            border: 5px #ccc solid;
            border-bottom: 5px solid #aea83e;
            border-radius: 50px;
            animation: loading  1s linear infinite;
            
        }
        
        @keyframes loading {
            0%{
                transform: rotate(0deg);
            }
            100%{
                transform: rotate(360deg);
            }
        }
        @keyframes loading2 {
            0%{
                transform: rotate(0deg);
            }
            100%{
                transform: rotate(-360deg);
            }
        }
        
    </style>
</head>

<body>
    
    <div class="loading-veiw">
        <button  onclick ="start()"></button>
        
        
        <div class="loader none"></div>
    </div>
    
    <main>
        
        <section class="veiw">
            
            <a class=".df-link"></a> 
        </section>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="/js/bike.js"></script>
    <script>
        let mapLink = document.querySelector('.map');
        let bicycleLink = document.querySelector('.bicycle');
        let bagink = document.querySelector('.bag');
        let readerLink = document.querySelector('.reader');
        let indexLink = document.querySelector('.index-link');
        let dfLink = document.querySelector('.df-link');
        mapLink.href  = `{{route('attractions')}}`;
        bicycleLink.href  = `{{route('teams')}}`;
        bagink.href = `{{route('stores')}}`;
        readerLink.href = `{{route('index')}}`;
        indexLink.href = `{{route('index')}}`;
        dfLink.href =`{{route('bike.Page-Df')}}`;
    </script>

</body>

</html>
