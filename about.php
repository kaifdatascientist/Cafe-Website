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
                    <li><a id="active" href="about.php">ABOUT</a></li>
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <h4 class="menu" onclick="showMenu()">&#x2630;</h4>
        </nav>
        <h1>About Us</h1>

    
    </section>

    <!-- ----- about us content ----  -->

    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>we are one of the most popular cafe's in the World</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem libero, nihil unde dolores quae autem cumque! Assumenda, nihil suscipit repellendus voluptas alias libero, odit eius iusto quos fuga vitae doloremque!
                    <span id="dots"><b>....</b></span>
                    <div id="more">
                        <p>&emsp; The company incorporated in 2013 registered with the <b>Govt. of India’s Dept. of MSME with UDYAM-MH-28-0003925 as well as Government of Maharashtra’s industrial energy & works Department having Registration No MC.22957</b> and complying the needs with all required statutory authorities like Employees Provident Fund, Professional Tax, GST, Income Tax etc.</p>      
                    </div>
                    </p>
                <button onclick="readMore()" id="btn" class="red-btn hero-btn">Read More</button>        
            </div>
            <div class="about-col">
                <img src="images/about.jfif" alt="">
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

    <!-- Read More Button  -->
    <script>
        function readMore(){
            var dots = document.getElementById("dots");
            var moretext = document.getElementById('more');
            var btn = document.getElementById('btn');
 
            if(dots.style.display === "none"){
                dots.style.display = "inline";
                btn.innerHTML = "Read more";
                moretext.style.display = 'none';
            } else{
                dots.style.display = 'none';
                btn.innerHTML = "Read Less";
                moretext.style.display = 'inline';
            }
        }
     </script>

</body>
</html>