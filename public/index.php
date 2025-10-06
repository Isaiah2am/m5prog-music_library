
<!doctype html>
<html lang="en">
<?php

require_once('../source/database.php');

$query = 'SELECT * FROM songs ORDER BY title';

$stmt = $connection->prepare($query);

$stmt->execute();

$result = $stmt->get_result();

var_dump( $_SERVER['REQUEST_URI'] );

$request_url = explode('/', $_SERVER['REQUEST_URI']);

$mijn_pagina = end($request_url);

echo 'ik bekijk nu het bericht: ' . $mijn_pagina;

include_once __DIR__ . '/../views/header.php';

include_once __DIR__ . '/../views/navigation.php';

?> 
  <div class="container my-5">
    <h1>Home</h1>

    
    <div class="flex-card">
      
    
 <?php
   while( $single = mysqli_fetch_assoc($result) ) {

    

   include __DIR__ . '/../views/singles-card.php';

      
    
   
}
 ?>   

    </div>

    <?php

include_once __DIR__ . '/../views/footer.php';


