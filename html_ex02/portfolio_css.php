<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Portfolio</title>
</head>
<body>
    <!-- this is a navbar-->
        <div id="navbar">
            <span class="nav-item">LOGO</span>
            <span class="nav-item">REGISTER</span>
            <span class="nav-item">LOGIN</span>
        </div>
          
        <div class="container">
            <div id="banner">
                <div class="image"> 
                    <img src="image.jpg" alt="">
                 </div>
            </div>

            
            <div id="store">
                <div class="store-item">
                    <a target="_blank" href="image.jpg">
                        <img src="image.jpg" alt="">
                    </a>
                </div>
                <div class="store-item">
                    <a target="_blank" href="image.jpg">
                         <img src="image.jpg" alt="">
                    </a>
                </div>
                <div class="store-item">
                    <a target="_blank" href="image.jpg">
                        <img src="image.jpg" alt="">
                    </a>
                </div>
                <div class="store-item">
                    <a target="_blank" href="image.jpg">
                        <img src="image.jpg" alt="">
                    </a>
                </div>
                <div class="store-item">
                    <a target="_blank" href="image.jpg">
                        <img src="image.jpg" alt="">
                    </a>
                </div>
                <div class="store-item">
                    <a target="_blank" href="image.jpg">
                        <img src="image.jpg" alt="">
                    </a>
                </div>
            </div>

            <div id="contact">
                <div class="map contact-item">
                        <iframe src="https://maps.google.com/maps?q=cebu%20city&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>

                <div class="form contact-item">
                    <form action="">
                        <label for="fname">First name:</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                        <label for="lname">Last name:</label><br>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <label for="number">Contact Number:</label><br>
                        <input type="number" id="number" name="number" value=""><br><br>
                        <input type="submit" value="Submit">
                    </form> 
                </div>
            </div>

            <div id="footer">
                <p>Copyright © 2022 Forty Degrees Celsius Inc</p>
            </div>
        </div>
</body>
</html>