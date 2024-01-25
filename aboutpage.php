<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Me | WebDev</title>
    
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="styleabout.css">
    <link rel="shortcut icon" type="image/img" href="img/about-icon.png">
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
                    <li ><a href="aboutpage.php" style="--i:3" class="active">About Me</a></li>
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

        <!-- about section design -->
    <section class="home" id="home">
        <div class="home-img">
                <div class="glowing-circle">
                    <span></span>
                    <span></span>

                    <!-- slideshow images -->
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img src="img/home.png" alt="">
                        </div>
                        <div class="mySlides fade">
                            <img src="img/about2.png" alt="">
                        </div>
                        <div class="mySlides fade">
                            <img src="img/about.png" alt="">
                        </div>
                        <div class="mySlides fade">
                            <img src="img/about1.png" alt="">
                        </div>
                    </div>
                </div>          
            </div>

            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
  
    
            <div class="home-content">
                <h1>About <span>Me</span></h1>
                <p>He is 20 years old. He was born on a cold, rainy day in December. He lives in Santa Cruz, Manila to school 
    at the Pamantasan ng Lungsod ng Maynila (University of the City of Manila). He lives with his mom, Emma, and 
    his dad, Gerry. He has two sisters, namely, Gemmarie and Gemmabel. His older sister has her own family now, 
    which is why he and his younger sister are the only ones left to live with their parents. He started school 
    when he was 7 years old. He went to kindergarten through sixth grade at Padre Gomez Elementary School. 
    Then he attended Ramon Magsaysay High School after he graduated from elementary. He is currently a 
    2nd year college student at Pamantasan ng Lungsod ng Maynila and is currently aiming to graduate with a 
    bachelor's degree in IT in the near future together with his boyfriend, named Angelo Tadeo.</p>
        
                    <a href="mailto:gerometolibas@gmail.com" class="btn" style="--i:8">Personal Email: gerometolibas@gmail.com</a>
                    <a href="mailto:gvtolibas2021@plm.edu.ph" class="btn" style="--i:9">School Email: gvtolibas2021@plm.edu.ph</a>
                    <a class="btn" style="--i:10">Contact Number: (+63)9183577255</a>
            </div>
    </section>


    <!-- slideshow javascript -->
    <script>
    let slideIndex = 0;
    showSlides();
      
    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
    </script>
</body>
</html>