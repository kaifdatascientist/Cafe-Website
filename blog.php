<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cafe Website Design</title>
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
                    <li><a id="active" href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <h4 class="menu" onclick="showMenu()">&#x2630;</h4>
        </nav>
        <h1>Our achievement 2021</h1>
    </section>

    <!-- ---- blog page contant ---  -->
    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                <img src="images/img3.jpg" alt="">
                <h2>Our Certificate and Online Program For 2021</h2>
                <p>What do people expect from restaurants? What’s something great about your restaurant’s guest experience that customers might not see somewhere else? What can detract from a great restaurant experience, and what can add to it? These kinds of thought-leadership posts are a great way to break up promotional content.

                    Megalo’s in Kingston, Ontario</p><br>
                    <p> has been quite successful at this kind of content. Their most recent post is about why lighting matters in a restaurant, and how it can add to or detract from its ambience. After telling a few stories about how lighting impacted her experience at restaurants and dinner parties, author Carlyn transitions neatly into a description of the favorable atmosphere at Megalo’s. 
                
                
                </p><br>
                
                <div class="comment-box">
                    <h3>Leave a comment</h3>
                    <form action="" class="comment-form">
                        <input type="text" placeholder="Enter Name">
                        <input type="email" placeholder="Enter Email">
                        <textarea rows="5" placeholder="Your Comment"></textarea>
                        <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
                    </form>
                </div>
                                
            </div>

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