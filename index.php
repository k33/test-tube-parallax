 <!DOCTYPE html> 

<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test tube parallax</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php include('functions.php') ?>
    
    <link rel="stylesheet" href="<?php echo $site_url ?>src/css/normalize.css" >
    <link rel="stylesheet" href="<?php echo $site_url ?>style.css" data-skrollr-stylesheet >
  </head>
  
  <!-- add id for mobile support - https://github.com/Prinzhorn/skrollr#mobile-support -->
  <body id="skrollr-body">
    
    <h1 id="fx-title">this is a title that will skew, scale, rotate and translate on scroll</h1>
    
    <!-- External scripts -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- skrollr stylesheet support: https://github.com/Prinzhorn/skrollr-stylesheets -->
    <script src="<?php echo $site_url ?>skrollr.stylesheets.js"></script>

    <!-- skrollr paralex FX: https://github.com/Prinzhorn/skrollr -->
    <script src="<?php echo $site_url ?>skrollr.js"></script>

    <!-- set up skroller -->
    <script type="text/javascript">
        skrollr.init();
    </script>

    <script src="<?php echo $site_url ?>custom.js"></script>
  
  </body>
  
</html>