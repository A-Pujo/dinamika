<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Dinamika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lilita+One&display=swap');

        *{
            margin: 0;
            padding: 0;
        }
        
        html, body{
            overflow-x: hidden;
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

        .welcoming-text{
            min-height: 100vh;
        }

        .welcoming-text h1{
            color: #ffa;
            font-family: 'Lilita One', cursive;
            font-size: 3em;
            z-index: 99;
        }

        .welcoming-text h3{
            font-family: 'Montserrat Alternates', sans-serif;
            z-index: 99;
        }

        #welcome-container{
            background: rgb(223,88,103);
            background: linear-gradient(180deg, rgba(223,88,103,1) 0%, rgba(146,17,68,1) 90%);
            overflow: hidden;
        }

        .content p{
            color: #ffa;
        }

        .pecahan-logo{
            position: relative;
            margin-top: -100vh;
            height: 100vh;
            width: 100%;
        }

        .pecahan-logo img{
            position: absolute;
            width: 160px;
        }

        #bulu{
            top: 88px;
            left: 420px;
        }

        #bidak{
            bottom: 80px;
            left: 720px;
        }

        #motif{
            top: 200px;
            right: 314px;
        }

        #pala{
            bottom: 188px;
            left: 248px;
        }

        #sirip{
            bottom: 164px;
            right: 380px;
        }

        #tanduk{
            top: 80px;
            right: 472px;
        }

        #borneo{
            bottom: 80px;
            left: 0;
        }

        #celebes{
            bottom: 80px;
            left: 25vw;
        }

        #irian{
            bottom: 80px;
            left: 45vw;
        }

        #java{
            bottom: 80px;
            right: 25vw;
        }

        #swarna{
            bottom: 80px;
            right: 0;
        }
        

        #map-container{
            position: relative;
            background-color: #a8d9b5;
            overflow: hidden;
            background-image: url("<?= base_url('assets/images/Element.png') ?>");
            background-size: 50vw auto;
        }

        #divider{
            position: absolute;
            top: 0;
            right: 0;
            z-index: 99;
        }

        .awan-parallax{
            position: relative;
            width: 100%;
            height: auto;
        }

        #awan-1{
            position: absolute;
            top: 12em;
            left: -15vw;
        }

        #awan-2{
            position: absolute;
            top: 22em;
            left: -20vw;
        }

        .space-helper{
            height: 256px;
        }

        #text-map{
            margin-top: -56px;
            background-color: #df5867;
            border-radius: 16px;
            font-family: 'Montserrat Alternates', sans-serif;
            color: #fff;
        }

        .modal-header{
            
        }

        .modal-body{
            background-image: url("<?= base_url('assets/images/modal-bg.png') ?>");
            background-size: cover;
        }

        .glass-container{
            background: rgba( 255, 255, 255, 0.3 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 6px );
            -webkit-backdrop-filter: blur( 6px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }

        .glass-container code{
            text-shadow: 1px 1px #112433;
            color: #fff;
        }

        @media only screen and (max-width: 600px) {
            /* style for mobile */
            .pecahan-logo img{
                display: none;
                position: absolute;
                width: 80px;
            }

            #awan-1{
                position: absolute;
                top: 1em;
                left: -100vw;
                width: 160px;
            }

            #awan-2{
                position: absolute;
                top: 13em;
                left: -110vw;
                width: 160px;
            }

            .space-helper{
                height: 32px;
            }

            #text-map{
                margin-top: -40px;
            }
        } 

    </style>
</head>
<body>
    <div class="hello-container">
        <div class="container-liquid">
            <div id="scene">
                <div class="layer" id="wave" data-depth-x="0.3"><img src="<?= base_url('assets/images/wave(1).png') ?>" /></div>
                <div class="layer" id="bush-1" data-depth-x="0.3"><img src="<?= base_url('assets/images/bush-1.png') ?>" /></div>
                <div class="layer" id="bush-2" data-depth-x="0.2"><img src="<?= base_url('assets/images/bush-2.png') ?>" /></div>
                <div class="layer" id="left-tree" data-depth-x="0.1"><img src="<?= base_url('assets/images/left-tree.png') ?>" /></div>
                <div class="layer" id="right-tree" data-depth-x="0.1"><img src="<?= base_url('assets/images/right-tree.png') ?>" /></div>
                <div class="layer" id="bush-3" data-depth-x="0.2"><img src="<?= base_url('assets/images/bush-3.png') ?>" /></div>
                <div class="layer d-flex justify-content-center align-items-center" id="logo-dmk" data-depth="0.55"><img src="<?= base_url('assets/images/LogoDinamika.png') ?>" style="width: 200px; height: auto;" /></div>
                <div class="layer d-flex justify-content-center align-items-center" id="text-dmk" data-depth="0.55"><a data-scroll href="#welcome-container" class="text-center btn">Mulai Eksplorasi!</a></div>
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

    <div id="welcome-container" class="container-fluid content">
        <div class="py-5 px-1 px-md-3 welcoming-text d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-center">Selamat Datang Generasi Kesatria!</h1>
            <h3 class="text-center">Integrasi Pemimpin Bertalenta, Bangkitkan Indonesia.</h3>
        </div>
        <div class="pecahan-logo">
            <!-- <img id="bulu" src="<?= base_url('assets/images/bulu-burung.png') ?>" data-aos="zoom-out-right" data-aos-duration="1000" />
            <img id="bidak" src="<?= base_url('assets/images/bidak-catur.png') ?>" data-aos="fade-in" data-aos-duration="1000" />
            <img id="motif" src="<?= base_url('assets/images/motif-macan.png') ?>" data-aos="zoom-in-down" data-aos-duration="1000" />
            <img id="pala" src="<?= base_url('assets/images/pala-badak.png') ?>" data-aos="flip-right" data-aos-duration="1000" />
            <img id="sirip" src="<?= base_url('assets/images/sirip-pesut.png') ?>" data-aos="fade-down-right" data-aos-duration="1000" />
            <img id="tanduk" src="<?= base_url('assets/images/tanduk-anoa.png') ?>" data-aos="flip-up" data-aos-duration="1000" /> -->
            <img id="borneo" src="<?= base_url('assets/images/Borneo.png') ?>" data-aos="zoom-in-down" data-aos-duration="1200" />
            <img id="celebes" src="<?= base_url('assets/images/Celebes.png') ?>" data-aos="fade-down-left" data-aos-duration="1200" />
            <img id="irian" src="<?= base_url('assets/images/Irian.png') ?>" data-aos="fade-down" data-aos-duration="1200" />
            <img id="java" src="<?= base_url('assets/images/Java.png') ?>" data-aos="fade-down-right" data-aos-duration="1200" />
            <img id="swarna" src="<?= base_url('assets/images/Swarna.png') ?>" data-aos="zoom-in-down" data-aos-duration="1200" />
        </div>
    </div>

    <div id="map-container" class="content">
        <svg id="divider" class="w-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#921144" fill-opacity="1" d="M0,32L40,69.3C80,107,160,181,240,186.7C320,192,400,128,480,133.3C560,139,640,213,720,234.7C800,256,880,224,960,224C1040,224,1120,256,1200,224C1280,192,1360,96,1400,48L1440,0L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
        <div class="awan-parallax">
            <img id="awan-1" src="<?= base_url('assets/images/awan.png') ?>">
            <img id="awan-2" src="<?= base_url('assets/images/awan.png') ?>">
        </div>
        <div class="space-helper"></div>
        <div class="py-5 px-3 d-flex flex-column justify-content-center align-items-center">
            <!-- Image Map Generated by http://www.image-map.net/ -->
            <img id="map" src="<?= base_url('assets/images/map.png') ?>" class="w-50" usemap="#image-map">
            <h5 id="text-map" class="p-3 text-center">Peta Petualangan!</h5>
            <map name="image-map">
                <area target="" alt="" title="" href="" coords="215,210,36" shape="circle" data-bs-toggle="modal" data-bs-target="#modal">
                <area target="" alt="" title="" href="" coords="528,88,33" shape="circle" data-bs-toggle="modal" data-bs-target="#modal">
                <area target="" alt="" title="" href="" coords="394,702,34" shape="circle" data-bs-toggle="modal" data-bs-target="#modal">
                <area target="" alt="" title="" href="" coords="741,475,36" shape="circle" data-bs-toggle="modal" data-bs-target="#modal">
            </map>
        </div>
        
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Checkpoint #1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="glass-container p-2">
                        <code>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor officiis animi dolore asperiores mollitia placeat corporis debitis itaque molestias, iusto facere atque? Perferendis consequuntur in voluptates amet. Accusamus, laboriosam magni.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor officiis animi dolore asperiores mollitia placeat corporis debitis itaque molestias, iusto facere atque? Perferendis consequuntur in voluptates amet. Accusamus, laboriosam magni.
                        </code>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        /*! Image Map Resizer (imageMapResizer.min.js ) - v1.0.10 - 2019-04-10
        *  Desc: Resize HTML imageMap to scaled image.
        *  Copyright: (c) 2019 David J. Bradshaw - dave@bradshaw.net
        *  License: MIT
        */

        !function(){"use strict";function r(){function e(){var r={width:u.width/u.naturalWidth,height:u.height/u.naturalHeight},a={width:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-left"),10),height:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-top"),10)};i.forEach(function(e,t){var n=0;o[t].coords=e.split(",").map(function(e){var t=1==(n=1-n)?"width":"height";return a[t]+Math.floor(Number(e)*r[t])}).join(",")})}function t(e){return e.coords.replace(/ *, */g,",").replace(/ +/g,",")}function n(){clearTimeout(d),d=setTimeout(e,250)}function r(e){return document.querySelector('img[usemap="'+e+'"]')}var a=this,o=null,i=null,u=null,d=null;"function"!=typeof a._resize?(o=a.getElementsByTagName("area"),i=Array.prototype.map.call(o,t),u=r("#"+a.name)||r(a.name),a._resize=e,u.addEventListener("load",e,!1),window.addEventListener("focus",e,!1),window.addEventListener("resize",n,!1),window.addEventListener("readystatechange",e,!1),document.addEventListener("fullscreenchange",e,!1),u.width===u.naturalWidth&&u.height===u.naturalHeight||e()):a._resize()}function e(){function t(e){e&&(!function(e){if(!e.tagName)throw new TypeError("Object is not a valid DOM element");if("MAP"!==e.tagName.toUpperCase())throw new TypeError("Expected <MAP> tag, found <"+e.tagName+">.")}(e),r.call(e),n.push(e))}var n;return function(e){switch(n=[],typeof e){case"undefined":case"string":Array.prototype.forEach.call(document.querySelectorAll(e||"map"),t);break;case"object":t(e);break;default:throw new TypeError("Unexpected data type ("+typeof e+").")}return n}}"function"==typeof define&&define.amd?define([],e):"object"==typeof module&&"object"==typeof module.exports?module.exports=e():window.imageMapResize=e(),"jQuery"in window&&(window.jQuery.fn.imageMapResize=function(){return this.filter("map").each(r).end()})}();
        //# sourceMappingURL=imageMapResizer.map

        // parallax
        var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene);

        // smooth scroll
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 500,
            speedAsDuration: true,
            easing: 'easeInQuad',
        });

        $('map').imageMapResize();

        // AOS
        AOS.init();

        $(document).ready(function() {

            var $body = $(document);
            $body.bind('scroll', function() {
                // "Disable" the horizontal scroll.
                if ($body.scrollLeft() !== 0) {
                    $body.scrollLeft(0);
                }
            });

            var transltX = '130vw';

            // mobile helper
            let isMobile = window.matchMedia("only screen and (max-width: 600px)").matches;

            if (isMobile) {
                //Conditional script here
                $('#map').removeClass('w-50');
                $('#map').addClass('w-100');
                var transltX = '210vw';
            }

            // Anime js
            anime({
                targets: '#awan-1',
                translateX: transltX,
                duration: 8000,
                loop: true,
                easing: 'linear',
            });

            anime({
                targets: '#awan-2',
                translateX: transltX,
                duration: 9000,
                loop: true,
                easing: 'linear',
            });

        }); 
    </script>
</body>
</html>