<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cart Items(
        <?php
        if (isset($_SESSION['items'])) {
           echo $_SESSION['items'];
         } 
        
         ?>)</a>
      <a class="nav-item nav-link" href="#">Total Price
        (<?php
        if (isset($_SESSION['total'])) {
           echo '#'.$_SESSION['total'];
         } 
        
         ?>)</a>
      <a class="nav-item nav-link" href="checkout.php">Checkout</a>
    </div>
  </div>
</nav>

<header class="jumbotron header" style=" color: black">
<center style="font-size: 40px;">Locci Phone Store</center>
</header>
<div class="container">
<div class="row">
  <div class="col-md-4">
    <img src="images/1.jpg"><br>
    <b>Description</b>: very durable<br>
      <b>Price: $500</b><br>
    <a href="ecom.cart.php?p=500"><button class="btn btn-primary">Add to cart</button></a>
    
  </div>
  <div class="col-md-4">
    <img src="images/2.jpg"><br>
    <b>Description</b>: very durable<br>
      <b>Price: $600</b><br>
    <a href="ecom.cart.php?p=600"><button class="btn btn-primary">Add to cart</button></a>
    
  </div>
  <div class="col-md-4">
    <img src="images/3.jpg"><br>
    <b>Description</b>: very durable<br>
      <b>Price: $1500</b><br>
    <a href="ecom.cart.php?p=1500"><button class="btn btn-primary">Add to cart</button></a>
    
  </div>
</div>
<br><br>
<div class="row">
  <div class="col-md-4">
    <img src="images/4.jpg"><br>
    <b>Description</b>: very durable<br>
      <b>Price: $2500</b><br>
    <a href="ecom.cart.php?p=2500"><button class="btn btn-primary">Add to cart</button></a>
    
  </div>
  <div class="col-md-4">
    <img src="images/9.jpg"><br>
    <b>Description</b>: very durable<br>
      <b>Price: $700</b><br>
    <a href="ecom.cart.php?=700"><button class="btn btn-primary">Add to cart</button></a>
    
  </div>
  <div class="col-md-4">
    <img src="images/11.jpg"><br>
    <b>Description</b>: very durable<br>
      <b>Price: $800</b><br>
    <a href="ecom.cart.php?p=800"><button class="btn btn-primary">Add to cart</button></a>
    
  </div>
</div>



</div>
</body>
</html>