<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Dinamika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            /* background: rgb(17,36,51);
            background: linear-gradient(0deg, rgba(17,36,51,1) 0%, rgba(40,227,197,1) 100%); */
            /* width: 100vw;
            height: 100px;
            background-image: url("<?= base_url('assets/images/divider.png') ?>");
            background-repeat: repeat-x;
            background-size: contain; */
        }

        .welcoming-text{
            min-height: 100vh;
        }

        .welcoming-text h2{
            color: #ffa;
            font-family: 'Lilita One', cursive;
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
    <div id="target" class="container-fluid content">
        <div class="py-5 px-1 px-md-3 welcoming-text d-flex justify-content-center align-items-center">
            <h2>Selamat Datang Generasi Kesatria!</h2>
        </div>
    </div>
    <div class="container-fluid content">
        <div class="py-5 px-3">
            <!-- Image Map Generated by http://www.image-map.net/ -->
            <img src="https://i.pinimg.com/originals/2a/bc/c9/2abcc96e4aedee07c23d6f038aafc328.jpg" class="w-100" usemap="#image-map">

            <map name="image-map">
                <area target="" alt="" title="" href="#" coords="227,469,35" shape="circle" data-bs-toggle="modal" data-bs-target="#modal">
                <area target="" alt="" title="" href="#" coords="307,146,478,221" shape="rect">
                <area target="" alt="" title="" href="#" coords="99,127,188,138,194,177,91,178,61,184,74,78,91,74" shape="poly">
            </map>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
    <script>
        /*! Image Map Resizer (imageMapResizer.min.js ) - v1.0.10 - 2019-04-10
        *  Desc: Resize HTML imageMap to scaled image.
        *  Copyright: (c) 2019 David J. Bradshaw - dave@bradshaw.net
        *  License: MIT
        */

        !function(){"use strict";function r(){function e(){var r={width:u.width/u.naturalWidth,height:u.height/u.naturalHeight},a={width:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-left"),10),height:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-top"),10)};i.forEach(function(e,t){var n=0;o[t].coords=e.split(",").map(function(e){var t=1==(n=1-n)?"width":"height";return a[t]+Math.floor(Number(e)*r[t])}).join(",")})}function t(e){return e.coords.replace(/ *, */g,",").replace(/ +/g,",")}function n(){clearTimeout(d),d=setTimeout(e,250)}function r(e){return document.querySelector('img[usemap="'+e+'"]')}var a=this,o=null,i=null,u=null,d=null;"function"!=typeof a._resize?(o=a.getElementsByTagName("area"),i=Array.prototype.map.call(o,t),u=r("#"+a.name)||r(a.name),a._resize=e,u.addEventListener("load",e,!1),window.addEventListener("focus",e,!1),window.addEventListener("resize",n,!1),window.addEventListener("readystatechange",e,!1),document.addEventListener("fullscreenchange",e,!1),u.width===u.naturalWidth&&u.height===u.naturalHeight||e()):a._resize()}function e(){function t(e){e&&(!function(e){if(!e.tagName)throw new TypeError("Object is not a valid DOM element");if("MAP"!==e.tagName.toUpperCase())throw new TypeError("Expected <MAP> tag, found <"+e.tagName+">.")}(e),r.call(e),n.push(e))}var n;return function(e){switch(n=[],typeof e){case"undefined":case"string":Array.prototype.forEach.call(document.querySelectorAll(e||"map"),t);break;case"object":t(e);break;default:throw new TypeError("Unexpected data type ("+typeof e+").")}return n}}"function"==typeof define&&define.amd?define([],e):"object"==typeof module&&"object"==typeof module.exports?module.exports=e():window.imageMapResize=e(),"jQuery"in window&&(window.jQuery.fn.imageMapResize=function(){return this.filter("map").each(r).end()})}();
        //# sourceMappingURL=imageMapResizer.map
        var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene);

        // smooth scroll
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 500,
            speedAsDuration: true,
            easing: 'easeInQuad',
        });

        $('map').imageMapResize();

        $(document).ready(function() {

            var $body = $(document);
            $body.bind('scroll', function() {
                // "Disable" the horizontal scroll.
                if ($body.scrollLeft() !== 0) {
                    $body.scrollLeft(0);
                }
            });

        }); 
    </script>
</body>
</html>