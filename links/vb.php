<?php echo("hello world") ?>
<?php
$t=time();
echo($t . "<br>");
echo (date("Y-m-d",$t));

   include_once('connection.php');
   $username = $_GET['$username'];
   $password = $_GET['$password'];
   $result = mysqli_query($con,"SELECT *  FROM events");
 #  $row = mysqli_fetch_array($result);
#foreach($row as $value){
#	echo $value;
#}
   #$data = $row[0];

   #if($data){
   #   echo $data;
  # }
?>

<!DOCTYPE html>
<html>
   <body>
      <table> 
         <tr>
            <th>page</th>
            <th>title</th>
            <th>description</th>
            <th>date</th>
            <th>place</th>
            <th>going</th>
         </tr>
         <?php 
         while($rows=mysqli_fetch_array($result))
         {
         ?>
            <tr>
               <td> <?php echo $rows['page']; ?> </td>
               <td> <?php echo $rows['title']; ?> </td>
               <td> <?php echo $rows['description']; ?> </td>
               <td> <?php echo $rows['date']; ?> </td>
               <td> <?php echo $rows['place']; ?> </td>
               <td> <?php echo $rows['going']; ?> </td>
            </tr>
            <?php
         }
   mysqli_close($con);

         ?>
      </table>
   </body>
</html>