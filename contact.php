<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            Amazing View Resort
        </title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg"/>
    </head>

    <body>

            <ul>
                <li><a href="index.html"><i class="fas fa-home"></i></a></li>
                <li><a href="about.html"><i class="fas fa-users"></i></a></li>
                <li><a href="gallery.html"><i class="far fa-image"></i></a></li>
                <li><a href="contact.php"><i class="fas fa-phone active"></i></a></li>
                
                <div class="bottom-icons">
                    <li><a href="https://www.facebook.com/amazingviewmountainresort/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                 
                    <li><a href="https://www.instagram.com/avmresort/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    
                </div>
            </ul>
                  
            <div class="content">

                <p>Contact us</p>

                <form class="contact-form" action="contactform.php" method="post">
                    <input type="text" name="name" placeholder="Full Name">
                    <input type="text" name="email" placeholder="Your e-mail">
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="message" placeholder="Message"></textarea>
                    <button type="submit" name="submit">Send Mail</button>
                </form>

           </div>

           <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
           <script>
                AOS.init();
            </script>
    </body>

</html>
