<html>
   <title>html in php </title>
</html>
<?php echo("hello world") ?>
<?php
$t=time();
echo($t . "<br>");
echo (date("Y-m-d",$t));

   $con=mysqli_connect("127.0.0.1","root","Billybob1","event_crawler");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $username = $_GET['$username'];
   $password = $_GET['$password'];
   $result = mysqli_query($con,"SELECT *  FROM events");
   $row = mysqli_fetch_array($result);
foreach($row as $value){
	echo $value;
}
   $data = $row[0];

   if($data){
      echo $data;
   }
   mysqli_close($con);
?>
