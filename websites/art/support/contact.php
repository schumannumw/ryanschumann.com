<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <script> src="/js/analytics.js"</script>
        <title>Index page | schumannart.com | Layout</title>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="/css/screen.css" rel="stylesheet" type="text/css" media="screen">
    </head>
    <body>
        
        <div class="wrapper">
            <div class ="header">
        <header>
            <div>
              <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </div>
                    <div id="main_nav">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
        </div>
        </header>
            </div>
        <div id="mega-wrap">
            
        <div>
<!--            <p>Contemporary Abstract Paintings</p>-->
        </div>
<!--            <div class="fronttext"><p><b>Contemporary Abstract Paintings</b>
                    <br>All paintings are original works of art, signed and dated by the artist, <br>Tausha Schumann. For more information please email us at tschumannart@gmail.com</p></div>-->
          
<!--         <img class="front" src="/images/home/frontpage.jpg">  -->
        
       <section class="main">
                       <?php
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];
       $from = 'From: My Contact Form';
       $to = 'tschumannart@gmail.com';
       $subject = 'SchumannArt';

       $body = "From: $name\n E-Mail: $email\n Message:\n $message";

       if ($_POST['submit']) {
           if (mail ($to, $subject, $body, $from)) {
           echo '<p>Message Sent Successfully!</p>';
           } else {
           echo '<p>Please fill in each part of the form</p>';
           }
       }
    ?>   
             <form method="post" action="/support/contact.php">
           <label>Your Name:</label>
           <input name="name" placeholder="">
           <label>Your Email:</label>
           <input name="email" type="email" placeholder="">
           <label>Your Message:</label>
           <textarea name="message" placeholder=""></textarea>
           <input id="submit" name="submit" type="submit" value="Submit">
             </form><br><br>
        </section> 
<!--                <img id="content" src="/images/home/frontpage.jpg" alt="Welcome to my Art Gallery">-->
                
        </div>
            <div class="push"></div>
             </div>            
        <div class="footer">
        <footer id="page_footer">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
                <div class="links">
                    <p>Last Updated: <?php echo date('j F Y', getlastmod()) ?></p>
                </div>
        </footer>
        </div>
    </body>
</html>
