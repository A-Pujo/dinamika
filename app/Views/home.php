<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinamika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;700&display=swap');

        html, body{
            overflow-x: hidden;
        }

        *{
            margin: 0;
            padding: 0;
        }

        .hello-container{
            height: 100vh;
            background-color: #04afda;
        }

        #header{
            z-index: 9999;
        }

        .nav .nav-item .nav-link{
            margin-left: 12px;
            border-radius: 16px;
            color: #f8fdf9;
        }

        .nav .nav-item .nav-link:hover{
            color: #064e6e;
            background-color: #f8fdf9;
        }

        #scene{
            position: absolute;
            left: -5%;
            width: 110%;
            height: 100%;
        }

        #scene .layer{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        #scene .layer img{
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #left-tree{
            position: absolute;
            top: 0;
            left: 0;
        }

        #right-tree{
            position: absolute;
            top: 0;
            left: 0;
        }

        #bush-1{
            position: absolute;
            left: 0;
            margin-left: 20em;
        }

        #bush-2{
            position: absolute;
            margin-left: -40em;
        }

        #bush-3{
            position: absolute;
            top: 0;
            margin-left: 10em;
        }

        #text-dmk{
            margin-top: 10em;
            margin-left: 1em;
        }

        #text-dmk a{
            background-color: #df5867;
            border-radius: 16px;
            font-family: 'Montserrat Alternates', sans-serif;
            color: #fff;
            cursor: pointer;
            pointer-events: auto;
        }

        #divider{
            background: rgb(17,36,51);
            background: linear-gradient(0deg, rgba(17,36,51,1) 0%, rgba(40,227,197,1) 100%);
            /* width: 100vw;
            height: 100px; */
        }

        .content{
            background-color: #112433;
        }

        .content p{
            color: #ffa;
        }

        @media only screen and (max-width: 600px) {
            #bush-1{
                position: absolute;
                left: 0;
                margin-left: 0em;
            }

            #bush-2{
                display: none;
            }

            #bush-3{
                position: absolute;
                top: 0;
                margin-left: 0em;
            }
        } 

    </style>
</head>
<body>
    <div class="hello-container">
        <div class="container-liquid">
            <div id="scene">
                <div class="layer" id="wave" data-depth-x="0.3"><img src="<?= base_url('assets/images/wave(1).png') ?>" /></div>
                <div class="layer" id="bush-1" data-depth-x="0.1"><img src="<?= base_url('assets/images/bushes.png') ?>" /></div>
                <div class="layer" id="bush-2" data-depth-x="0.2"><img src="<?= base_url('assets/images/bushes.png') ?>" /></div>
                <div class="layer" id="bush-3" data-depth-x="0.2"><img src="<?= base_url('assets/images/bush.png') ?>" /></div>
                <div class="layer" id="left-tree" data-depth-x="0.1"><img src="<?= base_url('assets/images/left-tree.png') ?>" /></div>
                <div class="layer" id="right-tree" data-depth-x="0.05"><img src="<?= base_url('assets/images/right-tree.png') ?>" /></div>
                <div class="layer d-flex justify-content-center align-items-center" id="logo-dmk" data-depth="0.55"><img src="<?= base_url('assets/images/LogoDinamika.png') ?>" style="width: 200px; height: auto;" /></div>
                <div class="layer d-flex justify-content-center align-items-center" id="text-dmk" data-depth="0.55"><a data-scroll href="#target" class="text-center btn">Mulai Eksplorasi!</a></div>
            </div>
            <div class="d-flex justify-content-center align-items-center px-2 px-sm-5 py-2" id="header">
                <div>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('formulir-penugasan') ?>">Penugasan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="divider"></div>
    <div class="container-fluid content">
        <div class="py-5 px-3">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo sed sunt ducimus, repellendus laborum explicabo facere praesentium, at numquam quae voluptate earum incidunt ut doloribus cumque asperiores temporibus, quas et?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo sed sunt ducimus, repellendus laborum explicabo facere praesentium, at numquam quae voluptate earum incidunt ut doloribus cumque asperiores temporibus, quas et?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo sed sunt ducimus, repellendus laborum explicabo facere praesentium, at numquam quae voluptate earum incidunt ut doloribus cumque asperiores temporibus, quas et?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo sed sunt ducimus, repellendus laborum explicabo facere praesentium, at numquam quae voluptate earum incidunt ut doloribus cumque asperiores temporibus, quas et?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo sed sunt ducimus, repellendus laborum explicabo facere praesentium, at numquam quae voluptate earum incidunt ut doloribus cumque asperiores temporibus, quas et?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo sed sunt ducimus, repellendus laborum explicabo facere praesentium, at numquam quae voluptate earum incidunt ut doloribus cumque asperiores temporibus, quas et?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo sed sunt ducimus, repellendus laborum explicabo facere praesentium, at numquam quae voluptate earum incidunt ut doloribus cumque asperiores temporibus, quas et?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo sed sunt ducimus, repellendus laborum explicabo facere praesentium, at numquam quae voluptate earum incidunt ut doloribus cumque asperiores temporibus, quas et?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo sed sunt ducimus, repellendus laborum explicabo facere praesentium, at numquam quae voluptate earum incidunt ut doloribus cumque asperiores temporibus, quas et?</p>
            <p id="target">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo sed sunt ducimus, repellendus laborum explicabo facere praesentium, at numquam quae voluptate earum incidunt ut doloribus cumque asperiores temporibus, quas et?</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
    <script>
        var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene);

        // smooth scroll
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 500,
            speedAsDuration: true,
            easing: 'easeInQuad',
        });
    </script>
</body>
</html>