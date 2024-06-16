<?php include"db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cafe 2.0 Website Design</title>
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
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a id="active" href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <h4 class="menu" onclick="showMenu()">&#x2630;</h4>
        </nav>
        <h1>Contact Us</h1>

    
    </section>

    <!-- ----- contact us content ----  -->

    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60870.34688562319!2d73.4880029318442!3d17.536290668769574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2062c95f6f0ff%3A0x55c667ba59237eed!2sChiplun%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1626978612759!5m2!1sen!2sin"
         width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" title="map"></iframe>

    </section>

    <section class="contact-us">

        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>cafe: Dubai Fata, United States Ausa, Dis. Latur</h5>
                        <p>Tal - latur, Dist. latur, Maharashtra, In</p>
                    </span>
                </div>
                <div>
                    <span class="logo">&#9990;</span>
                    <span>
                        <h5>+91 9011076771</h5>
                        <p>Monday to Saturday, 10AM to 9PM</p>
                    </span>
                </div>
                <div>
                    <span class="logo">&#9993;</span>
                    <span>
                        <h5>Bilal@gmail.com</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">

                <form action="contact.php" method="POST">
                    <input type="text" name="name" value="" class="text-input" placeholder="Enter your name" required>
                    <input type="text" name="address" value="" class="text-input" placeholder="Enter your address" required>
 
                    <select name="food" class="text-input" required>
                        <option value="Coffe">Coffe</option>
                        <option value="Tea">Tea</option>
                        <option value="Pizza">Pizza</option>
                        <option value="Burger">Burger</option>
                        <option value="chocolate">chocolate</option>
                        <option value="icecreame">icecreame</option>
                    </select>

                    <textarea rows="8" name="message" value="" class="text-input" placeholder="Message" required></textarea>
                    <button type="submit" name="submit" class="hero-btn red-btn">Send Message</button>
                </form>
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

</body>
</html>