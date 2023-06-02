<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3658ab6f9c.js" crossorigin="anonymous"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet" href="css/blog2.css">
    <link rel="stylesheet" href="css/media.css">
  

  <title>Blogging</title>
  <style>
  .footer{
	  background-color:#F5F5F5;
	  color:#8a8a8a;
	  font-size:16px;
	  padding:60px 0 20px;
	
  }
  
  .column1 h3
  {
	  margin-bottom:20px;
  }
  .app-logo img
  {
	  margin-bottom:20px;
  }

  .column2 img
  {  width:160px;
    
  }
  .column3 ul,.column4 ul
  {
	  padding:0;
	  
  }
  .column3 ul li,.column4 ul li 
  {
	  list-style:none;
	  
  }
  .column4 ul li 
  {
	  display:inline;
	  padding: 0 5px;
  }
  .hr
  {
	  margin:20px 0;
	  
  }
  .copyright{
	  text-align:center;
  }
  @media (max-width: 575.98px) {

  .position
  {
	 margin-bottom:20px; 
  }
  .column1
  {
	  margin-bottom:30px;
  }
  .column1
  {
	  
  }
}
</style>
 </head>
 
 
 <body>
  	

	
	
	
	
<!--header strt-->
  <header>
   <div class="container">
   <h1 class="span">Food Blog</h1>
   	<hr>
 <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid g-0">
    <!--<a class="navbar-brand" href="#">Navbar</a>-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
         
         <li class="nav-item">
          <a class="nav-link" href="contactform.php">Contact</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Meet the Team</a>
        </li>
         
    </ul>
     <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
     	 <li class="nav-item">
          <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-caret-down"></i></a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="fas fa-user-alt"></i></a>
        </li>
		

   </ul>

</div>
</div>
</nav>
<!--menu end-->
</div>
</header>

<!--sidebar-->



<div class="filter"> <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
</div>
<div id="mobile-filter">
<div>
<h6 class="p-1 border-bottom">Home Furniture</h6>
<ul>
<li><a href="#">Living</a></li>
<li><a href="#">Dining</a></li>
<li><a href="#">Office</a></li>
<li><a href="#">Bedroom</a></li>
<li><a href="#">Kitchen</a></li>
</ul>
</div>
<div>
<h6 class="p-1 border-bottom">Filter By</h6>
<p class="mb-2">Color</p>
<ul class="list-group">
<li class="list-group-item list-group-item-action mb-2 rounded"><a href="#"> <span class="fa fa-circle pr-1" id="red"></span>Red </a></li>
<li class="list-group-item list-group-item-action mb-2 rounded"><a href="#"> <span class="fa fa-circle pr-1" id="teal"></span>Teal </a></li>
<li class="list-group-item list-group-item-action mb-2 rounded"><a href="#"> <span class="fa fa-circle pr-1" id="blue"></span>Blue </a></li>
</ul>
</div>
<div>
<h6>Type</h6>
<form class="ml-md-2">
<div class="form-inline border rounded p-sm-2 my-2"> <input type="radio" name="type" id="boring"> <label for="boring" class="pl-1 pt-sm-0 pt-1">Boring</label> </div>
<div class="form-inline border rounded p-sm-2 my-2"> <input type="radio" name="type" id="ugly"> <label for="ugly" class="pl-1 pt-sm-0 pt-1">Ugly</label> </div>
<div class="form-inline border rounded p-md-2 p-sm-1"> <input type="radio" name="type" id="notugly"> <label for="notugly" class="pl-1 pt-sm-0 pt-1">Not Ugly</label> </div>
</form>
</div>
</div>
<section id="sidebar">
<div>
<h6 class="p-1 border-bottom">Categories</h6>
<ul>
<li><a href="#">Healthy food</a></li>
<li><a href="#">Beverages</a></li>
<li><a href="#">Sweets</a></li>
<li><a href="#">Around the world</a></li>

</ul>
</div>
<div>
<h6 class="p-1 border-bottom">Filter By</h6>
<p class="mb-2">Color</p>
<ul class="list-group">
<li class="list-group-item list-group-item-action mb-2 rounded"><a href="#"> <span class="fa fa-circle pr-1" id="red"></span>Red </a></li>
<li class="list-group-item list-group-item-action mb-2 rounded"><a href="#"> <span class="fa fa-circle pr-1" id="teal"></span>Teal </a></li>
<li class="list-group-item list-group-item-action mb-2 rounded"><a href="#"> <span class="fa fa-circle pr-1" id="blue"></span>Blue </a></li>
</ul>
</div>
<div>
<h6>Type</h6>
<form class="ml-md-2">
<div class="form-inline border rounded p-sm-2 my-2"> <input type="radio" name="type" id="boring"> <label for="boring" class="pl-1 pt-sm-0 pt-1">Boring</label> </div>
<div class="form-inline border rounded p-sm-2 my-2"> <input type="radio" name="type" id="ugly"> <label for="ugly" class="pl-1 pt-sm-0 pt-1">Ugly</label> </div>
<div class="form-inline border rounded p-md-2 p-sm-1"> <input type="radio" name="type" id="notugly"> <label for="notugly" class="pl-1 pt-sm-0 pt-1">Not Ugly</label> </div>
</form>
</div>
</section>
 





<!--sidebar-->


   	<!--header end-->
	

	   <!--featured product-->
     
<section class="featured-products">
 <div class="container">
   <div class="title-box">
          <h2>Recent post</h2>
    </div> 
<!-- 1st row start-->
	<div class="row">
	  <div class="col-md-12">
	 
	 <!--card start-->
<div class="card mb-3">
  <img src="images/pizza.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <a href="#"><h3 class="card-title">How to not eat pizzas</h3></a>
    <a href="#"><p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</a></p>
	<a href="singlepost.php"><button type="button" class="btn btn-secondary">Read More</button></a>
	<hr>
	<div class="horizontal">
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	<a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
	</div>
  </div>
</div>

	 
	 
 <!--card end-->	 
   </div>
    </div>
<!-- 1st row end-->
 

<!-- 2nd row start-->

<div class="row">
	  <div class="col-md-12">
	 
	 <!--card start-->
<div class="card mb-3">
  <img src="images/pancake.jpg" class="card-img-top" alt="ramen">
  <div class="card-body">
    <a href="#"><h3 class="card-title">Ramen in spicy sauce</h3></a>
    <a href="#"><p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</a></p>
	<a href="singlepost.php"><button type="button" class="btn btn-secondary">Read More</button></a>
	<hr>
	<div class="horizontal">
    <p class="card-text"><small class="text-muted">Last updated 7 mins ago</small></p>
	<a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
	</div>
  </div>
</div>

	 
	 
 <!--card end-->	 
   </div>
    </div>


<!-- 2nd row end--> 
 </div>
</section>
    <!--featured product end-->

	
	
<footer class="footer">
  <div class="container">
    <div class="row">
	<div class="col-lg-3 col-md-6 column1" >
	   <h3>Download Our App</h3>
	   <p>Download Our app for ios and android</p>
	  <div class="app-logo">
	   <img src="images/gplay.png">
	  </div>
	 
	</div>
	<div class="col-lg-3 col-md-6 column2">
	   <img src="images/logo.jpg">
	   <p>It is a long established fact that a reader will be distracted by the readable content </p>
	</div>
	
	
	
	
	<div class="col-lg-3 col-md-6 column3">
	  <h3>Useful links</h3>
	  <ul>
	  <li>Return Policy</li>
	  <li>Payment Details</li>
	  <li>Use Coupuns</li>
	  <li>Join Affiliate</li>
	  </ul>
	</div>
	
	<div class="col-lg-3 col-md-6 column4">
	  <h3>Follow us</h3>
	  <ul>
	  <li><i class="fab fa-facebook-f"></i></li>
	  <li><i class="fab fa-twitter"></i></li>
	  <li><i class="fab fa-instagram-square"></i></li>
	  <li><i class="fab fa-linkedin"></i></li>
	  </ul>
	</div>
	
  </div>
  
  <hr>
  <p class="copyright">&#169 Copyright 2021.All Rights Reserved</p>
  </div>

</footer>

  
<!--circle end-->


   

    <!-- Optional JavaScript; choose one of the two! -->


    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    <script src="js/script.js"></script>

   

    
  </body>
</html>
 
 
 
 
 
 