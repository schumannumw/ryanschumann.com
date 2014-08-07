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
            <div class="fronttext"><p><b>Contemporary Abstract Paintings</b>
                    <br>All paintings are original works of art, signed and dated by the artist, <br>Tausha Schumann</p></div>
            <div id="img">
         <img class="front" src="/images/home/frontpage.jpg">  
</div>
            
               
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
