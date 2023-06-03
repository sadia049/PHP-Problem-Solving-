<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!--<link rel="stylesheet" href="style.css">-->
	 
  <title>String Tool Manipulation</title>
  <style>
  body{
	  margin:0;
	  padding:0;
	  background-color:#f2f2f2;
	  font-family:Arial,sans-serif!important;
  }
  .container{
	  width:80%;
	  padding:20px;
	  margin: 0 auto;
	  background-color:#fff;
	  box-shadow: 0 0 10px rgba(0,0,0,0.2);
  }
  h1{
	 font-family: Arial, sans-serif;
     font-weight:bold;	 
  }
  
  label{
	  width:100%;
	  padding:5px 0;
	  
	  
  }
  input[type="text"],select{
	  width:100%;
	  padding:7px;
	  border: 1px solid #D3D3D3;
	  border-radius:5px;
	  box-sizing:border-box;
	  font-size:16px;
	  margin-bottom:10px;
	  
	  
  }  
  
   input[type="submit"]{
	   background-color:#4CAF50;
	   color:white;
	   padding:.489rem 1.02rem;

	  
	   
   }
  
  
</style>




</head>


<body>

<div class="container">
<h1>String Manipulation Tool</h1>
<form action="stringTool.php" method="post">
<label for="stringname" >Enter a string:</label>
<input type="text" name="stringname" id="stringname"  required ></input>
<label for="string_function">Select a function:</label>
<select name="string_function" id="string_function" required>
<option value="strlen">strlen</option>
<option value="strrev">strrev</option>
<option value="strtoupper">strtoupper</option>
<option value="strtolower">strtolower</option>
<option value="ucfirst">ucfirst</option>
<option value="ucwords">ucwords</option>
<option value="str_repeat">str_repeat</option>
<option value="trim">trim</option>
</select>
<input type="submit" value="Manipulate_String" class="btn btn-Success" name="Manipulate String"></input>
</form>


<?php

   if(isset($_POST["Manipulate_String"]) && isset($_POST["stringname"]) && isset($_POST["string_function"]))
   {
	   $string_name=$_POST["stringname"];
	   $string_function=$_POST["string_function"]; 
		   
			  if($string_function=="strlen")
				   $result_string=strlen($string_name);
				  
			  elseif($string_function=="strrev")
					$result_string=strrev($string_name);
			  elseif($string_function=="strtoupper")
					$result_string=strtoupper($string_name);
			  elseif($string_function=="strtolower")
					$result_string=strtolower($string_name);
			  elseif($string_function=="ucfirst")
					$result_string=ucfirst($string_name);
			  elseif($string_function=="ucwords")
					$result_string=ucwords($string_name);
			  elseif($string_function=="str_repeat")
	                $result_string=str_repeat($string_name,3);
			  elseif($string_function=="trim")
	                $result_string=trim($string_name);
			   
		   
	 
   


?>

<h4><?php echo "The result of " . $string_function . " Input: " . $string_name . " Output: " . $result_string;?></h4>	


<?php
   } 
   
 ?>

</div>


</body>
</html>