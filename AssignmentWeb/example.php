<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style type="text/css">
        body{
            background: rgba(218,218,218,1)
        }
        .container{
            width: 100%;
            height: 100px;
        }
        .photologo{
            width: 100px;
            height: 100px;
            margin-left: 100px;
        }
        .logo{
            width: 40%;
            height: 100px;
            float: left;
        }
        .options{
            width: 60%;
            height: 100px;
            float: left;
        }
        ul {
        margin: 0;
        padding: 0;
        display: flex;
        position: absolute;
        top: 6%;
        left: 79.25%;
        transform: translate(-50%, -50%);
        }
        ul li {
        list-style: none;
        margin: 0 15px;
        }
        ul li a {
        position: relative; 
        display: block;
        width: 60px;
        height: 60px;
        padding: 7px;
        text-align: center;
        line-height: 63px;
        background: white;
        border-radius: 50%;
        font-size: 30px;
        color: #666;
        transition: .5s;
        }
        ul li a::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: paleturquoise;
        transition: .5s;
        transform: scale(.9);
        z-index: -1;
        }
        ul li a:hover::before {
        transform: scale(1.1);
        box-shadow: 0 0 15px pink;
        }
        ul li a:hover {
        color: pink;
        box-shadow: 0 0 5px pink;
        text-shadow: 0 0 5px pink;
        }
        .container2{
            width: 100%;
            height: 300px;
            margin-top: 50px;
        }
        .words {
            position: relative;
            animation: move-words 20s linear infinite;
            margin: 0;
        }
        .move1{
            text-align: center;
            margin: 50px;
        }
        .bgphoto1{
            width: 80%;
            height: 300px;
        }
        .images {display: none}
        img {
      	vertical-align: middle;
        width:100%;
        } 
        /* Slideshow container */
        .carousel-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        }
        /* Next & previous buttons */
        .previous, .next {
         cursor: pointer;
         position: absolute;
         top: 50%;
         width: auto;
         padding: 16px;
         margin-top: -22px;
         color: white;
         font-weight: bold;
         font-size: 18px;
         transition: 0.6s ease;
         border-radius: 0 3px 3px 0;
         user-select: none;
        }
        /* Position the "next button" to the right */
        .next {
        right: 0;
        border-radius: 3px 0 0 3px;
        }
        /* On hover, add a black background color with a little bit seethrough */
        .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        }
        /* The dots/bullets/indicators */
        .navigation-dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }
        .active, .navigation-dot:hover {
        background-color: #717171;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="logo">
            <a href="index.php"><img src="Image/d1.png" class="photologo"></a>
        </nav>
        <nav class="options">
            <ul>
                <li>
                    <a href="index.php">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="Image.php">
                        <i class="fas fa-seedling"></i>
                    </a>
                </li>
                <li>
                    <a href="about.php">
                        <i class="fas fa-users"></i>
                    </a>   
                </li>
                <li>
                    <a href="contact.php">
                        <i class="fab fa-weixin"></i>
                    </a> 
                </li>
                <li>
                    <a href="login.php">
                        <i class="fas fa-fingerprint"></i>
                    </a> 
                </li>
            </ul>
        </nav>
    </div>
    <div class="container2">
        <div class="carousel-container">
            <div class="images fade">
                <img src="Image/b1.jpg">
            </div>
            <div class="images fade">
                <img src="Image/b2.jpg">
            </div>
            <div class="images fade">
                <img src="Image/b3.jpg">
            </div>
            <div class="images fade">
                <img src="Image/b4.jpg">
            </div>
            <div class="images fade">
                <img src="Image/b5.jpg">
            </div>
            <div class="images fade">
                <img src="Image/b6.jpg">
            </div>
            
            <!-- Previous and Next Buttons -->
            <a class="previous" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <br>
   
    <!-- Navigation Dots-->
    <div style="text-align:center">
        <span class="navigation-dot" onclick="currentSlide(1)"></span>
        <span class="navigation-dot" onclick="currentSlide(2)"></span>
        <span class="navigation-dot" onclick="currentSlide(3)"></span>
        <span class="navigation-dot" onclick="currentSlide(4)"></span>
        <span class="navigation-dot" onclick="currentSlide(5)"></span>
        <span class="navigation-dot" onclick="currentSlide(6)"></span>
    </div>
    <script>
    var currentIndex = 1;
      
    //Show current image
    showSlides(currentIndex);
      
    //Function to move Next
    function plusSlides(n) {
        showSlides(currentIndex += n);
    }
      
    //Function to move back
    function currentSlide(n) {
        showSlides(currentIndex = n);
    }
      
      
    //Initiate moving of slides
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("images");
        var dots = document.getElementsByClassName("navigation-dot");
        if (n > slides.length) {currentIndex = 1}
        if (n < 1) {currentIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[currentIndex-1].style.display = "block";
        dots[currentIndex-1].className += " active";
    }
    </script>
    </div>
</body>
</html>