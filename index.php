<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/app.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <form id="sms-form" action="sendsms.php" method="post">
    <input type="text" name="mobileno" id="mobileno" placeholder="Mobile Number">
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <input id="submit" type="submit" name="submit" value="SEND">
  </form>

  <!-- Add your site or application content here -->  
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  
</body>

</html>
