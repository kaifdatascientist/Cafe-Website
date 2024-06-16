<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Website Design</title>
    <link rel="stylesheet" href="css/style1.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity=""  crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candal|Lora">



    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <section class="header">
        <nav>
            <img src="images/logo.png" alt="">
            <div class="nav-links" id="navLinks">
                
                <h4 class="menu" onclick="hideMenu()">&#10006;</h4>
                <ul>
                    <li><a id="active" href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <h4 class="menu" onclick="showMenu()">&#x2630;</h4>
        </nav>

    <div class="text-box">
        <h1>CAFE 2.0</h1>
        <p>Coffee time, anytime
        <br>Our coffee is hotter than Angelina Jolie
        </p> 
    </div>
    </section>

     <!-- ---- PRODUCTS PHOTOS---- -->

    <div class="sliderbox">
        <h1>OUR PRODUCTS</h1>
        <div id="slider">
            <img src="images/cup2.jpg" alt="">
            <img src="images/img12.jpg" alt="">
            <img src="images/img13.jpg" alt="">
            <img src="images/pasta.jpg" alt="">
        </div>
        <div class="indicator">
            <span id="btn1" class="active"></span>
            <span id="btn2"></span>
            <span id="btn3"></span>
            <span id="btn4"></span>
        </div>
    </div>

    <!-- ---- Campus---- -->

    <section class="campus">
        <h1>Our Global Branches</h1>
        <p>heaven to the food lovers.</p>

        <div class="row">
            <div class="campus-col">
                <img src="images/img17.jpeg" alt="">
                <div class="layer">
                    <h3>LONDON</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/img16.jpeg" alt="">
                <div class="layer">
                    <h3>NEW YORK</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/img18.jpg" alt="">
                <div class="layer">
                    <h3>WASHINGTON</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- ---- Facilities ---  -->

    <div class="specilities">
        <h1>Our specilities</h1>
        <p>special dishes for special ones.</p>
    </div>
    <section class="container">
        <div class="card">
            <div class="imgBx">
                <img src="images/img14.jfif" alt="">
            </div>
            <div class="content">
                <h2>cakes</h2>
                <p>Funfetti cake,Pineapple Upside Down cake, Lemon Cake,Black Forest Cake,Cheesecake, Vanilla Cake,Red Velvet Cake. The second most popular cake is the gorgeous-looking red velvet cake.Chocolate Cake. The chocolate cake very obviously secures the first rank.</p>
                <h4><a href="#"> More</a></h4>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="images/img9.png" alt="">
            </div>
            <div class="content">
                <h2>Coffee</h2>
                <p>Arabica. You may have seen bags of coffee labeled "100 percent Arabica." Arabica is the most popular type of bean used for coffee. Robusta,Black Coffee,Decaf,Espresso.</p>
                <h4><a href="#"> More</a></h4>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="images/img12.jpg" alt="">
            </div>
            <div class="content">
                <h2>Burger</h2>
                <p>Chilli burger With Pepper Relish.
                    Perfect Lamb Satay Burger.
                    Lamb and Tomato Stuffed Burger.
                    Crunchy Chicken and Fish Burger.
                    Chicken Feta Cheese Burger With Potato Salad.
                    Lentil and Mushroom Burger.
                    Stuffed Bean Burger</p>
                <h4><a href="#"> More</a></h4>
            </div>
        </div>
    </section>
    <!-- ---- testimonials ----  -->
    <section class="textimonials">
        <h1>What Our customer's Says</h1>
        <div class="row">
            <div class="textimonials-col">
                <img src="images/user1.jpg" alt="">
                <div>
                    <p>The catch of Cafe Coffee Day is, it's very quite inside with the ambience and sitting. You will not find it much crowded as compared to other outlets. Hence , you can have some quality time❤️
                        And it’s very welcoming to its customers.
                        Great place to visit for couples and friends.
                        Must visit. Must try their milkshakes and cake varieties.</p>
                    <h3>Ashvarya Roy</h3>
                    <h4>&#9733;&#9733;&#9733;&#9733;&#9733;</h4>
                </div>
            </div>
            <div class="textimonials-col">
                <img src="images/user2.jpg" alt="">
                <div>
                    <p>It is very nice place to chill out
                        We had signature cold coffee , lavender based drink💜, chicken Chipotle sandwich., bread loaf is so soft
                        and we enjoyed the dishes 😋.</p>
                    <h3>Ram reddy</h3>
                    <h4>&#9733;&#9733;&#9733;&#9733;<span>&#9734;</span></h4>
                </div>
            </div>
        </div>
    </section>

    <!-- ---- Call To Action ----  -->

    <section class="cta">
        <h1>Stay with us for amezing food <br> Anywhere From The World</h1>
        <a href="contact.php" class="hero-btn">CONTACT US</a>
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