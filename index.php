



<html>
<body>
<P>ITS NEWw</P>
<head>
<style>
.city {
  width: 150px;
  hight: 100px;
  background-color: tomato;
  color: Green;
  border: 5px solid black;
  margin: 20px;
  padding: 20px;

}
</style>
</head>
<!--
<style type=text/css>
 
p{
  background-color:gray;
  margin: 10px;
}
 
div
{
  color: white;
  background-color: 009900;
  margin: 2px;
  font-size: 25px;
}
</style>
-->
<html>

    <head>
        <title>Receiving data from ESP8266</title>
		</head>
		<p>Volt</p>
		<div class="city">
		
		<?php
            if(isset($_GET['name'])){
           $em = $_GET["name"]; 
           echo "Name    ". $em ;
           echo "</br>";
               
 } 

				else
				{
				echo(" ");echo "</br>";
				
				}
       ?> 
	   </iframe>
	   </div>
	   
	   <p>Amp</p>
	   		<div class="city">
		
		<?php
            if(isset($_GET['email'])){
echo("wow");
               
 } 
else
				{
				echo(" ");echo "</br>";
				
				}
       ?> 
	   </iframe>
	  
	   </div>

	   
 
 <!-- get example
<form action="welcome.php" method="get">
  <input type="text" id="nam" name="name"><br><br>
  <input type="text" id="eml" name="email"><br><br>
  <input type="submit" value="Submit">
</form>

<a href="welcome.php?email=PHP&name=W3schools.com">Test $GET</a>

<!-- Post example-->

<form action="index.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">

</form>


</body>
</html>
