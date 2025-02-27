<?php 
if( isset($_GET) && !empty($_GET['img']) && $_GET['img'] != 'undefined' ) { 
    //check if this is an ajax request
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
        //die();
    }
    
    $DomainName = 'http://triginals.com/';
    $PathName = 'media/gifs/';
    $NewImageName = trim($_GET['img']);   
    
    $NewImage = $PathName.$NewImageName;
    $NewImageFull = $DomainName.$NewImage;
    $NewPage = 'media.php?img='.$NewImageName;
    $NewPageFull = $DomainName.$NewPage;
    
    if (!file_exists($NewImage)) {
        header('location: ./uploader.php');
    }

} else { 
    header('location: ./uploader.php');
}
?>
<?php 
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] == true ) {
    
    $btn_login = '<a href="logoff.php?redirect=./'.$NewPage.'">Log Off <span class="sr-only">(current)</span></a>';
    $btn_upload = '<a href="uploader.php">Upload</a>';
} else {
    
    $btn_login = '<a href="login.php?redirect=./'.$NewPage.'">Log In <span class="sr-only">(current)</span></a>';
    $btn_upload = '';

}

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="$NewImageFull">
    <meta name="author" content="$NewImageFull">
    <link rel="icon" href="assets/img/favicon.ico">
    
    <title>TimeMac Originals</title>
    <meta name="
	<meta name="Author" content="TimeMac Originals"/>
	<meta name="Website" content="http://triginals.com"/>
    <meta property="og:image" content="" />      
    <meta property="og:url" content="" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>   
   <div class="main">
      
        <header>
           <!-- Fixed navbar -->
            <nav class="navbar navbar-reverse navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                   <a class="navbar-brand" href="index.php"><span class="logo"><img class="img-responsive icon" alt="logo"src="media/img/newLogo.png"</span></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li ><a href="Clothing/index.php">Clothing</a></li>
                    <li class="active"><a href="index.php">GIFs</a></li>
                    <li><?php echo($btn_upload);?></li>
                    <!--<li><?php echo($btn_login);?></li>-->
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </nav>            
        </header>
       
        <section id="primary-slider">
            <div class="container">
                <h1 class="page-title text-center">TimeMac Originals</h1>
                <!--<img class="media col-xs-12 col-md-6 col-md-offset-3" src="media/gifs/filler.gif">-->
            </div>
        </section>
        		
                
                <div class="well well-lg">
                    <img class="media col-xs-12 col-md-6 col-md-offset-3" src="<?php echo($NewImage);?>">
                    
                    
            
                </div>
                
                
               
        <section id="secondary">
            <!--<div class="container">
                    <div class="col-xs-12 col-sm-6 col-md-4">One</div>
                    <div class="col-xs-12 col-sm-6 col-md-4">Two</div>
                    <div class="col-xs-12 col-sm-6 col-md-4">Three</div>
            </div>-->
            <div class="container">
                <?php if (!empty($_GET['w']) && !empty($_GET['h'])) { ?>    
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                <small>Width: <?php echo($_GET['w']);?>  X  Height: <?php echo($_GET['h']);?> </small></div>
                <?php } ?>
                
                <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                <small>Image preview in Facebook and Twitter. </small></div>
                
                <div class="input-group input-group-md col-xs-12 col-md-6 col-md-offset-3">                 
                  <span class="input-group-addon" id="kis-image">
                     <a href="<?php echo($NewImage);?>" target="_blank">Image</a>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input type="text" class="form-control" placeholder="http://" aria-describedby="kis-image" value="<?php echo($NewImageFull);?>">
                </div>
                <br/>
                <div class="input-group input-group-md col-xs-12 col-md-6 col-md-offset-3">
                  <span class="input-group-addon" id="kis-page">
                     <a href="<?php echo($NewPage);?>">Page</a>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span>
                  <input type="text" class="form-control" placeholder="http://" aria-describedby="kis-page" value="<?php echo($NewPageFull);?>">
                </div>
                <br/>
                <div class="input-group input-group-md col-xs-12 col-md-6 col-md-offset-3">
                  <span class="input-group-addon" id="kis-download">
                      <a href="<?php echo($NewImage);?>" download="<?php echo($NewImageName);?>">Download</a></span>
                      <input type="text" class="form-control" placeholder="http://" aria-describedby="kis-download" value="<?php echo($NewImageFull);?>">
                </div>
            </div>
        </section>
    </div>
    
    <div class="container-fluid"> 
        <div class="row">
              <a href="https://www.facebook.com/triginals" target="_blank"><img style="display:block;float:left;padding:1px 10px 10px 1px;" class="img-responsive" src="media/img/facebook.png" width="70" height="70" alt="facebook" /></a>
              <a href="https://www.instagram.com/triginals" target="_blank"><img style="display:block;float:left;padding:1px 10px 10px 1px;"  class="img-responsive" src="media/img/instagram.jpg" width="70" height="70" alt="instagram"/></a>
              <div class="text-center col-md-offset-0 col-md-10">
              
                <h4>Built by #TeamTimeMac</h4>
                <p>Copyright &copy; 2016 &middot; All Rights Reserved &middot; </p>
              </div>
             </div>
       </div>
    
<!---------------------
        Scripts
----------------------->
<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-2.1.4.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
    $(document).ready(function() {
        $("input:text").focus(function() { $(this).select(); } );
    });
    </script>
</body>
</html>
