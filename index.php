<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | WebDev</title>
    
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/img" href="img/home-icon.png">
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
                    <li ><a href="index.php" style="--i:2" class="active">Home</a></li>
                    <li ><a href="aboutpage.php" style="--i:3">About Me</a></li>
                    <li ><a href="activity.php" style="--i:4">Activity</a></li>
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
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello. Bonjour, I am</h3>
            <h1>Gerome Tolibas</h1>
            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur repellendus voluptatum asperiores, similique minus aperiam saepe optio? Lorem ipsum, dolor. Ipsa minus aliquid nam temporibus magni accusamus voluptatum? Alias!</p> -->
            <p>A 2nd year College Student of Pamantasan ng Lungsod ng Maynila (University of the City of Manila). An aspiring programmer from Bachelor of Science in Information Technology (BSIT). Proud Haribon!</p>
            <br><br><h4><i>"If something's doesn't work out, change the plan but never the goal"</i></h4>
            
            <div class="social-media">
                <a href="https://www.facebook.com/gerometolibas1" style="--i:7;"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/simpkyron" style="--i:8;"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="https://twitter.com/shinseiii" style="--i:9;"><i class='bx bxl-twitter' ></i></a>
                <a href="https://www.tiktok.com/@simpkyron" style="--i:10;"><i class='bx bxl-tiktok'></i></a>
            </div>
        </div>

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

        <div class="home-img">
            <div class="glowing-circle">
                <span></span>
                <span></span>
                <div class="image">
                <img src="img/home.png" alt="">
                </div>
            </div>          
        </div>
    </section>
    </div>
</body>
</html>