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
        .words {
            position: relative;
            animation: move-words 20s linear infinite;
            margin: 0;
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
            height: 800px;
            margin-top: 20px;
            background-color: black;
        }
        .coverphoto{
            width: 25%;
            height: 800px;
            float: left;
        }
        .coverpagephoto{
            height: 800px;
        }
        .textabout{
            width: 30%;
            height: 800px;
            float: left;
            margin-left: -80px;
        }
        .fortest{
            width: 600px;
            margin-left: 250px;
            margin-top: 70px;
        }
        .aboutest{
            margin-top: 30px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }
        .fortheaboutus{
            width: 2%;
            float: left;
            height: 800px;
        }
        .h1about{
            text-align: center;
            float: left;
            color: white;
            text-shadow: #FC0 1px 0 10px;
            height: 370px;
            font-size: 80px;
            filter: brightness(1.75);
        }
        .fortheaboutus2{
            width: 2%;
            float: left;
            height: 800px;
        }
        .h1about2{
            text-align: center;
            float: left;
            color: white;
            text-shadow: 1px 1px 2px red, 0 0 1em blue, 0 0 0.2em blue;
            height: 370px;
            font-size: 80px;
            filter: brightness(1.75);
            margin-top: 275px;
        }
        .aboutframe{
            float: left;
            width: 25%;
        }
        .aboutphotoframe1{
            width: 200px;
            height: 200px;
            margin-top: 300px;
        }
        .headflowers{
            color: white;
            font-size: 50px;
            text-shadow: 5px 5px purple;
            text-align: center;
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
        <nav class="aboutframe">
            <img class="aboutphotoframe1" src="Image/about1.jpg">
        </nav>
        <nav class="coverphoto">
            <img src="Image/c1.webp"  class="coverpagephoto">
        </nav>
        <nav class="fortheaboutus">
            <h1 class="h1about">
                A
                <br>
                B
                <br>
                O
                <br>
                U
                <br>
                T
        </h1>
        </nav>
        <nav class="fortheaboutus2">
            <h1 class="h1about2">
                U
                <br>
                S
                <br>
        </h1>
        </nav>
        <nav class="textabout">
            <div class="fortest">
                <h1 class="headflowers"><b><i>We make it for</i></b></h1>
                <p class="aboutest">
                    Hello, we’re GOF, a community of local artisan florists crafting beautiful blooms and delivering gorgeous gifts across country and even internationally.
                    We’re experts not just in blooms, but emotions – creating those special moments of connection that bring people together, no matter the distance.
                </p>
                    <h1 class="headflowers"><b><i>We make it personal</i></b></h1>
                <p class="aboutest">
                    The person you’re sending to is a one-off, so shouldn’t their gift be too?
                    That’s why each of our bouquets is bespoke, made just for them and the occasion – and
                    you can even send special requests to their florist, to make their blooms even more personal.
                </p>
                    <h1 class="headflowers"><b><i>We only work with artisans</i></b></h1>
                <p class="aboutest">
                    All our bouquets are handcrafted by skilled florists all over the country. No production lines. No factories.
                    When you hit order, that order zooms to someone who puts love, care and skill into a one-off creation for your special someone.
                </p>              
            </div>
        </nav>
    </div>
</body>
</html>