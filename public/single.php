
<!doctype html>
<html lang="en">
<?php


   echo $_GET['singleid'];  
   $single_id = $_GET['singleid'];



require_once('../source/database.php');


$query = 'SELECT * FROM songs Where id=?';


$stmt = $connection->prepare($query);

$stmt->bind_param('i', $single_id);


$stmt->execute();

$result = $stmt->get_result();




include_once __DIR__ . '/../views/header.php';

include_once __DIR__ . '/../views/navigation.php';

?>
  <div class="container my-5">
    <h1>Singles</h1>

    
 <?php

$single = mysqli_fetch_assoc($result);
print_r( $single );

   $single = mysqli_fetch_assoc($result);

    $stmt->bind_param('i', $single_id);



      if ( ! isset($_GET['singleid']) ) {
          die( 'Geen single gevonden' );
      }
      print_r($single_id);
      $single_id = $_GET['singleid'];
            
    
   

 ?>   

    </div>


</div>
<?php

include_once __DIR__ . '/../views/footer.php';


