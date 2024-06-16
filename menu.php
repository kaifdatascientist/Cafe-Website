<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website Design</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@100;200;300;400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <section class="sub-header">
        <nav>
            <img src="images/logo.png" alt="">
            <div class="nav-links" id="navLinks">
                
                <h4 class="menu" onclick="hideMenu()">&#10006;</h4>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a id="active" href="menu.php">MENU</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <h4 class="menu" onclick="showMenu()">&#x2630;</h4>
        </nav>
        <h1>OUR MENU</h1>
    </section>

    <!-- ----Menu----- -->

    <section class="course">
        <h1>Food We Offer</h1>
        <p>trying....to add a joy of best tastes.</p>
        <div class="sliderbox">
            <div id="slider">
                <img src="images/menu2.jpg" alt="">
                <img src="images/menu.jpg" alt="">
                <img src="images/img16.jpeg" alt="">
                <img src="images/menu2.jpg" alt="">
                <img src="images/menu.jpg" alt="">
            </div>
            <div class="indicator">
                <span id="btn1" class="active"></span>
                <span id="btn2"></span>
                <span id="btn3"></span>
                <span id="btn4"></span>
            </div>
        </div>
    
    </section>

    <!-- ---- Footer ----  -->

    <?php include"footer.php"; ?>


    <!-- JavaScript for Toggle Menu ---- -->
    <script>

        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>

    <!-- photos Gallary -->

 <script>
    var slide = document.getElementById("slider");
    var btn1 = document.getElementById("btn1");
    var btn2 = document.getElementById("btn2");
    var btn3 = document.getElementById("btn3");
    var btn4 = document.getElementById("btn4");

    btn1.onclick = function(){
        slide.style.transform = "translateX(0px)";
        btn1.classList.add("active");
        btn2.classList.remove("active");
        btn3.classList.remove("active");
        btn4.classList.remove("active");
    }

    btn2.onclick = function(){
        slide.style.transform = "translateX(-100%)";
        btn2.classList.add("active");
        btn1.classList.remove("active");
        btn3.classList.remove("active");
        btn4.classList.remove("active");
    }

    btn3.onclick = function(){
        slide.style.transform = "translateX(-200%)";
        btn3.classList.add("active");
        btn2.classList.remove("active");
        btn1.classList.remove("active");
        btn4.classList.remove("active");
    }

    btn4.onclick = function(){
        slide.style.transform = "translateX(-300%)";
        btn4.classList.add("active");
        btn3.classList.remove("active");
        btn2.classList.remove("active");
        btn1.classList.remove("active");
    }
 </script>

</body>
</html>