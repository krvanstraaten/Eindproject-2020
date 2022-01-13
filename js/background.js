$(function() {

    //settings for slider
    var width = 200;
    var animationSpeed = 10000;
    var currentSlide = 1;

    // margin-left: -640px;

    //cache DOM elements
    var $slider = $('#slider');
    var $slideContainer = $('.slides', $slider);
    var $slides = $('.slide', $slider);


    function startSlider() {
        setInterval(function() {
            $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
                if (++currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        });
    }


   

    startSlider();


});

// php links and objects

{/* <link rel="stylesheet" href="css/slide.css"> */}

{/* 
<div class="container">
    <div id="slider">
        <ul class="slides">
            <li class="slide">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
            </li>
            <li class="slide">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
            </li>
            <li class="slide">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
            </li>
            <li class="slide">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
            </li>
        </ul>
    </div>
</div>
 */}


{/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="Jquery/jquery.steps.js"></script>
<script src="Jquery/jquery.steps.min.js"></script>
<script src="js/background.js"></script> */}