<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style type="text/css">
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
        left: 80%;
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
        body{
            background: rgba(218,218,218,1)
        }
        a{
            color: #111
        }
        .photo{
        position: absolute;
        transform: translate(-50%, -50%);
        display: block;
        }
        .photo img{
        width: 200px;
        height: 280px;
        object-fit: cover;
        box-shadow: 10px 15px 25px 0 rgba(0,0,0,.2);
        display: block;
        transition: all .5s cubic-bezier(0.645, 0.045, 0.355, 1);
        margin-top: -10px;
        }

        .photo:hover img{
        box-shadow: 1px 1px 10px 0 rgba(0,0,0,.1);
        }

        .photo .glow-wrap{
        overflow: hidden;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        margin-top: -10px;
        }

        .photo .glow{
        display: block;
        position:absolute;
        width: 40%;
        height: 200%;
        background: rgba(255,255,255,.2);
        top: 0;
        filter: blur(5px);
        transform: rotate(45deg) translate(-450%, 0);
        transition: all .5s cubic-bezier(0.645, 0.045, 0.355, 1);
        }

        .photo:hover .glow{
        transform: rotate(45deg) translate(450%, 0);
        transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1);
        }

        .photo:hover img,
        .photo:hover .glow-wrap{
        margin-top: 0;
        }

        h1{
        position: absolute;
        z-index: 1;
        transform: translate(-25%, -65%);
        font-family: 'Montserrat', sans-serif;
        margin: 0;
        line-height: 1.2;
        }
        .navspace{
            width: 200px;
            height: 200px;
            float: left;
            margin-left: 170px;
            margin-top: 220px;
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
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Rose</h1>
                <img src="Image/1.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Sunflower</h1>
                <img src="Image/2.webp" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Daisy</h1>
                <img src="Image/3.png" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Aster</h1>
                <img src="Image/12.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Orchid</h1>
                <img src="Image/5.png" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Gypsophila</h1>
                <img src="Image/8.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Lily</h1>
                <img src="Image/7.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Forget me not</h1>
                <img src="Image/11.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Baby Breath</h1>
                <img src="Image/9.png" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Sakura</h1>
                <img src="Image/10.webp" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Lavender</h1>
                <img src="Image/6.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        </nav>     
        <nav class="navspace">
        <a href="#" class="photo">
            <h1>Cotton Flower</h1>
                <img src="Image/4.jpg" />
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
        </a> 
        </nav>     
    </div>
</body>
</html>
