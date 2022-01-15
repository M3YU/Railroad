<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>形象頁</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/biking.css')}}">
    <style>
        button {
            position: relative;
            z-index: 22;
            width: 300px;
            height: 300px;
            border: none;
            color: #fff;
            font-size: 2.3rem;
            font-weight: 900;
            background-color: transparent;
            transition: .1s;
            background-image: url('/img/biking/banner-back.png');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }

        button:hover {
            color: #fa0;
        }

        button.none {
            display: none;
        }

        .loading-veiw {
            position: fixed;
            z-index: 20;
            background-color: rgb(29, 28, 28);
            width: 100vw;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: .8s;
            background-image: url('/img/biking/start.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .loading-veiw.none {
            opacity: 0;
            z-index: -5;
        }

        .loader {
            position: fixed;
            z-index: 10;
            top: calc(50%-50px);
            left: calc(50%-50px);
            width: 100px;
            height: 100px;
            border: 5px #ccc solid;
            border-bottom: 5px solid #3498bd;
            border-radius: 50px;
            animation: loading 1s linear infinite;
        }

        .loader.none {
            display: none;
            background-image: url("/");
        }

        .loader::before {
            content: '';
            position: fixed;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            border: 5px #ccc solid;
            border-bottom: 5px solid #e74c3c;
            border-radius: 50px;
            animation: loading2 .4s linear infinite;
        }

        .loader::after {
            content: '';
            position: fixed;
            top: 22px;
            left: 22px;
            right: 22px;
            bottom: 22px;
            border: 5px #ccc solid;
            border-bottom: 5px solid #21cc71;
            border-radius: 50px;
            animation: loading 1s linear infinite;

        }

        @keyframes loading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading2 {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(-360deg);
            }
        }
    </style>
</head>

<body>

    <div class="loading-veiw">
        <button onclick="start()">后豐鐵馬道</button>
        <button onclick="notYet()">東豐鐵馬道</button>

        <div class="loader none"></div>
    </div>

    <main>
        <div class="skip-btn">
            <i onclick="" class="fas fa-play"></i>
        </div>
        <section class="veiw">


        </section>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{asset('js/bike.js')}}"></script>

</body>

</html>