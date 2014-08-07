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
            
        <div class="support">
            <h3>About Us</h3>
       

            <p>Our studio is located in Utah. All artwork is created by the artist Tausha Schumann.<br>Email us if you would like custom artwork.</p><br>
            <h3>About your order</h3>
            <p>We will email you details within 24 hours of your order.
Free Shipping on all orders in the U.S.A<br><p>The majority of the artwork was created with acrylic paint on wooden art boards with painted 1.5 inch deep sides. These are individually handmade.</p> </div>
               
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
