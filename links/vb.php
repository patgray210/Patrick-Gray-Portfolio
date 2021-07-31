
<?php
   include_once('connection.php');
   $username = $_GET['$username'];
   $password = $_GET['$password'];
   $result = mysqli_query($con,"SELECT *  FROM events");
   $row = mysqli_fetch_array($result);
 #  foreach($row as $value){
#	echo $value;
#}
   #$data = $row[0];

   #if($data){
   #   echo $data;
  #}
?>

<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href='vb.css' rel="stylesheet" type="text/css">
   </head>
   <body>
   <nav id="top-navbar" class='navbar fixed-top navbar-expand-lg navbar-dark bg-dark'>
            <a class='navbar-brand' href="#section-showcase"><strong>Nola BVB</strong></a> 
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#menu'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='menu'>
            <ul class='nav navbar-nav ml-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href="index.html"> Home</a>
                </li>
            </ul>
            </div>
        </nav>
      <section id="section-table" class='container-fluid'>
        <div class="container">
      <table class="table table-bordered table-striped table-hover table-primary"> 
         <thread class="thread-dark">
         <tr>
            <th>PAGE</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>DATE</th>
            <th>PLACE</th>
            <th>GOING</th>
         </tr>
   </thread>
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
         </section>
            <?php
         }
   mysqli_close($con);

         ?>
      </table>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
      </div>
</html>