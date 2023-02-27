<?php
$name="";
$email;


Class Person{
	
	private $name,$email;
	
	function __construct($name,$email){
		$this->name=$name;
		$this->email=$email;
		
		
	}
	
	function getName(){
		return $this->name;
	}
	
	function getEmail(){
		
		return $this->email;
		
	}
	
	function setName($name){
		$this->name=$name;
	}
	function setEmail($email){
		$this->email=$email;
	}
	
	
	
	
}
$p=new Person("","");
$p->setName("Sadia");
$p->setEmail("sadianawsin018@gmail.com");
$r=new Person("","");



 if(isset($_POST['submit']))
  {
	global $name,$email;
  	$name =  $_POST['user_name'];
  	$email =  $_POST['user_email'];
	
    $r->setName($name);
    $r->setEmail($email);
    $getname=$r->getName();
    $getEmail=$r->getEmail();
	//echo "$name\n$email";

  	
	 
  }
 else{
	 
	 
	 
	 
	 
 }
 





?>






















<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" href="style.css">-->
	 
	 <title>HTML FORM</title>
	 
	 
<style>
	
    body{
	
	margin:20px;
    }

   h1{
	font-size: 25px;
    font-family: 'Dancing Script', cursive;
    font-weight: 700;
    font-size: 38px;
    color: #D3D3D3;
    }
.card{
	margin-left:50px;
    }

	
	
</style>



</head>


<body>

<!--<h2>Text input fields</h2>

<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe">
</form>

<p>Note that the form itself is not visible.</p>

<p>Also note that the default width of text input fields is 20 characters.</p>-->

<h1><i>HTML FORM</i></h1>
<p><b>A Html form to store user's name and email<b></p>

<form action="form.php" method="POST" >

<div class="form-row">
  <!--row start-->
 <div class="row">
  <!--1stcol start-->
  <div class="col-md-3">
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="Name" class="form-control" id="exampleInputName" name="user_name" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="user_email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  </div>
  <!--1stcol end-->
  
  <!--2nd col start-->
<div class="col-md-4">
 <div class="card" style="width: 18rem;">
   <div class="card-header">
    Data from Person Class
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Name: <i><?php echo $p->getName(); ?></i></li>
    <li class="list-group-item">Email Adress: <i><?php echo $p->getEmail(); ?></i> </li>

  </ul>
</div>
 
 </div>
  <!--2nd col end-->
  
  
<!--3rd col start-->

<div class="col-md-4">
 <div class="card" style="width: 18rem;">
   <div class="card-header">
   Data from Form Submission
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Name: <i><?php echo $r->getName(); ?></i></li>
    <li class="list-group-item">Email Adress: <i><?php echo $r->getEmail(); ?></i> </li>

  </ul>
</div>
</div>
<!--3rd col end-->
  
</div>
<!--row end-->
  
</div>
 
 
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-success" value="submit" name="submit">Submit</button>
</form>












 <script src="bootstrap-validate.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>
