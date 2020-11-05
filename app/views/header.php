<!doctype html>
        <html lang="en">
         
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- Bootstrap CSS -->
            <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            
            <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/vendor/bootstrap/css/bootstrap.min.css">
            <link href="/ElectronicEcommerce/app/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
            <!-- <link rel="stylesheet" href="app/assets/libs/css/style.css"> -->
            <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

            <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

            <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/libs/css/customerStyle.css">

            <title>ECOMMERCE Site</title>


            <style>
              
div#loader{
position:absolute;
top:calc(50% - 12px);
width:100%;
text-align:center;
}

div#loader > span{
font-family:'consolas';
font-soize:25px;
display:inline-block;
transform:scale(1.5);
letter-spacing:10px;
animation:spin 02s linear infinite;
transition:all 0.3s ease;
opacity:1;
color:#fff;
}

div#loader.clear{
  opacity:0;
}

div#loader > span:nth-child(2){
animation-delay:0.1s;
}

div#loader > span:nth-child(3){
animation-delay:0.2s;
}

div#loader > span:nth-child(4){
animation-delay:0.3s;
}

div#loader > span:nth-child(5){
animation-delay:0.4s;
}

div#loader > span:nth-child(6){
animation-delay:0.5s;
}

div#loader > span:nth-child(7){
animation-delay:0.6s;
}

div#loader > span:nth-child(8){
animation-delay:0.7s;
}

div#loader > span:nth-child(9){
animation-delay:0.8s;
}


@keyframes spin{
50%{
transform:scaleY(1);
opacity:0;
}
}

.unfold-box {
  background: #714674;
  -webkit-transition: all 1s cubic-bezier(0.680, 0, 0.265, 1); /* older webkit */
-webkit-transition: all 1s cubic-bezier(0.680, -2.550, 0.265, 3.550); 
   -moz-transition: all 1s cubic-bezier(0.680, -2.550, 0.265, 3.550); 
     -o-transition: all 1s cubic-bezier(0.680, -2.550, 0.265, 3.550); 
        transition: all 1s cubic-bezier(0.680, -2.550, 0.265, 3.550); /* easeInOutBack */
 box-sizing: border-box;
  transform: scale(1);
  opacity: 1;
  display: inline-block;
  float: left;
}

#unfold-block {
  height: 100%;
  width: 100vw;
  position: absolute;
  top: 0px;
  left: 0px;
  transition: all 0.5s ease;
}

.unfold-box.clear {
  transform: scale(0);
  opacity: 0;
}

#unfold-block.clear {
  background: transparent;
}

</style>

        </head>
        <?php 
$_SESSION['redirect']=$_SERVER['REQUEST_URI'];

?>
<body>
<div>
 <div id="CustTemplate">
  <nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#">  <img src="/ElectronicEcommerce/app/assets/images/login_store_logos-1.png" class="float-left rounded-circle" style="width:70px; height:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/ElectronicEcommerce/">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/ElectronicEcommerce/categories/">Categories</a>
    
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Offers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Who we are</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact us</a>
      </li>
    </ul>
    <form class=" mx-auto my-2 my-lg-0">
      <input class="form-control " type="search" placeholder="Search">
    </form>
    <ul class="navbar-nav mt-2 mt-lg-0">

        <a class="nav-link " href="http://localhost/ElectronicEcommerce/cart/">
        <div class="iconShopping">

        <i class="fa fa-shopping-cart"></i>
				<p class="">0</p>
		</div>
     </a>
     <a class="nav-link " href="#">
        <div class="iconheart">

        <i class="fa fa-heart"></i>
				<p class="">0</p>
		</div>
     </a>
     <div class="dropdown">
    <button class="dropbtn"> 
      <i class="fas fa-user-circle"></i>
    </button>
    <div class="dropdown-content">
      <?php
		if(isset($_SESSION['user_role']) && $_SESSION['user_role']==1)
    {
     
     echo'<a href="#">Profile</a>
      <a href="http://localhost/ElectronicEcommerce/user/logout">Log Out</a> ';}
     else{
       echo '<a href="http://localhost/ElectronicEcommerce/user/login">Log In</a>';
     }
    
      ?>

     
    </div>
  </div> 
   
     
    </ul>
  </div>
</nav>

<select class=" my-2 mx-2  cloudtranslation-selection" style="width: 100px;"></select>
