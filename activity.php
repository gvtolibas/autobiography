<!DOCTYPE html>
<html lang="en">

<head>
    <title>Activity | Calculator</title>
    
    <link rel="stylesheet" href="styleactivity.css">
    <link rel="shortcut icon" type="image/img" href="img/activity-icon.png">
</head>

<body>
    <!-- dashboard design -->
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Web Development</h2>
            </div>

            <div class="menu">
                <ul>
                    <li ><a href="index.php" style="--i:2">Home</a></li>
                    <li ><a href="aboutpage.php" style="--i:3">About Me</a></li>
                    <li ><a href="activity.php" style="--i:4" class="active">Activity</a></li>
                </ul>
            </div>

            <div class="date"><?php  echo "Today is " . date("l |").' '. date("M d, Y"); ?>
                <!-- <?php
                    echo "Today is " . date("M/d/Y") . "<br>";
                    echo "Today is " . date("M.d.Y") . "<br>";
                    echo "Today is " . date("M-d-Y") . "<br>";
                    echo "Today is " . date("l");
                    ?> --></div>
        </div>

    <!-- home section design -->
    <!-- <section class="home" id="home">
        <div class="home-content">
            <h3>Hello. Bonjour, I am</h3>
            <h1>Gerome Tolibas</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur repellendus voluptatum asperiores, similique minus aperiam saepe optio? Lorem ipsum, dolor. Ipsa minus aliquid nam temporibus magni accusamus voluptatum? Alias!</p>
            
            <div class="social-media">
                <a href="https://www.facebook.com/gerometolibas1" style="--i:7;"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/simpkyron" style="--i:8;"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="https://twitter.com/shinseiii" style="--i:9;"><i class='bx bxl-twitter' ></i></a>
                <a href="https://www.tiktok.com/@simpkyron" style="--i:10;"><i class='bx bxl-tiktok'></i></a>
            </div>
        </div> -->

        <!-- <div class="profession-container">
            <div class="profession-box">
                <div class="profession" style="--i:0;">
                    <i class='bx bx-cable-car'></i>
                    <h3>Adventure</h3>
                </div>
                <div class="profession" style="--i:1;">
                    <i class='bx bx-palette'></i>
                    <h3>Digital Artist</h3>
                </div>
                <div class="profession" style="--i:2;">
                    <i class='bx bx-camera'></i>
                    <h3>Photography</h3>
                </div>
                <div class="profession" style="--i:3;">
                    <i class='bx bx-music'></i>
                    <h3>Music</h3>
                </div>

                <div class="circle"></div>
            </div>

            <div class="overlay"></div>
        </div> -->

        <!-- <div class="home-img">
            <div class="glowing-circle">
                <span></span>
                <span></span>
                <div class="image">
                <img src="img/home.png" alt="">
                </div>
            </div>          
        </div>
    </section>
    </div> -->

    <div class="app">
        
        <div class="calculator">

            <div class="display">
                <div class="content">
                    <div class="input"></div>
                    <div class="output"></div>
                </div>
            </div>

            <div class="keys">

                <div data-key="clear" class="key action">
                    <span>AC</span>
                </div>

                <div data-key="brackets" class="key action">
                    <span>( )</span>
                </div>

                <div data-key="%" class="key operator">
                    <span>%</span>
                </div>

                <div data-key="/" class="key operator">
                    <span>÷</span>
                </div>

                <div data-key="7" class="key">
                    <span>7</span>
                </div>

                <div data-key="8" class="key">
                    <span>8</span>
                </div>

                <div data-key="9" class="key">
                    <span>9</span>
                </div>

                <div data-key="*" class="key operator">
                    <span>x</span>
                </div>

                <div data-key="4" class="key">
                    <span>4</span>
                </div>

                <div data-key="5" class="key">
                    <span>5</span>
                </div>

                <div data-key="6" class="key">
                    <span>6</span>
                </div>

                <div data-key="-" class="key operator">
                    <span>−</span>
                </div>

                <div data-key="1" class="key">
                    <span>1</span>
                </div>

                <div data-key="2" class="key">
                    <span>2</span>
                </div>

                <div data-key="3" class="key">
                    <span>3</span>
                </div>

                <div data-key="+" class="key operator">
                    <span>+</span>
                </div>

                <div data-key="backspace" class="key action">
                    <span>←</span>
                </div>

                <div data-key="0" class="key">
                    <span>0</span>
                </div>

                <div data-key="." class="key">
                    <span>.</span>
                </div>

                <div data-key="=" class="key operator">
                    <span>=</span>
                </div>
            </div>

        </div>

    </div>

    <script src="calculator.js"></script>
</body>
</html>