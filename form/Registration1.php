<?php
include("connection1.php");
error_reporting(0);
?>
<html>
<head>
<title>Registraion</title>
<link rel="stylesheet" type="text/css" href="style7.php">
</head>
<body style="background:gray;">
<div class="first">
<center>
   <form>
   <h1>Registration form</h1>
   <label>Username:</label><br>
   <input type="text" name="username" placeholder="Enter Your Name"><br>
   <label>Gmail:</label><br>
   <input type="text" name="Gmail" placeholder="Enter Your Gmail"><br>
   <label>Password:</label><br>
   <input type="password" name="password" placeholder="Enter Your Password"><br>
   <label>Phone No:</label><br>
   <input type="text" name="Phone" placeholder="Enter Your Phone No"><br>
  <!-- <p>Select Your Gender</p>
   <input type="radio" name="gender">Male
   <input type="radio" name="gender">Female<br>-->
   <label>Birthday:</label><br>
   <input type="date" name="Birthday" placeholder="Enter Your Birthday"><br>
   <label>Address</label><br>
   <textarea type="textarea" name="Address"  placeholder="Enter Your Address"></textarea><br><br>
   <button type="submit" name="submit">Submit</button>
   </form>
   </center>
   </div>

   
</body>
</html>

<?php
$us=$_GET['username'];
$Gm=$_GET['Gmail'];
$pa=$_GET['password'];
$Ph=$_GET['Phone'];
$Bi=$_GET['Birthday'];
$Ad=$_GET['Address'];

/**echo "$us";
echo "$Gm";
echo "$pa";
echo "$Ph";
echo "$Bi";
echo "$su";**/

$fill="INSERT ANYONE VALUE('$us','$Gm','$pa','$Ph','$Bi','Ad')";
$data=mysqli_query($conn,$fill);
if($data)
/**{
	echo"Data inserted into Database";
	
}
else
{
	echo"Failed to insert data into database";
}**/

?>