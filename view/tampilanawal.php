<?php

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>SPPK</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.scrolly.min.js"></script>
    <script src="../assets/js/skel.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>

</head>
<body>

<!-- Header -->

   
    <header id="header">
    <a href="" class="logo"><strong>SPPK</strong></a>
  
</header>

<!-- Banner -->
<section id="banner">
    <div class="inner">
        <form class="form-horizontal" method="get" method="post">
     <input type="hidden" name="controller" value="login">
                    <input type="hidden" name="action" value="autentikasi">

  
    <div class="form-group">

      <label for="inputEmail" class="col-lg-2 control-label" style="color:white;  " >Username </label>
      <div class="col-lg-4">
        <input class="form-control" name="username" placeholder="Username" type="text"/>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label" style="color:white;" >Password </label>
      <div class="col-lg-4">
        <input class="form-control" name="password" placeholder="Password" type="password"/>
        <br>
     
       
        <input type="submit" class="btn btn-success" name="login" value="Masuk">
      </div>
    </div>
 </form>

</section>


</body>
</html>
