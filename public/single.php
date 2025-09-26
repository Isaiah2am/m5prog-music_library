
<!doctype html>
<html lang="en">
<?php
include_once __DIR__ . '/../views/header.php';

include_once __DIR__ . '/../views/navigation.php';

?>
  <div class="container my-5">
    <h1>Singles</h1>

    
    <div class="flex-card">
    
 <?php
    for ($i = 1; $i <= 5; $i++){
 
 include __DIR__ . '/../views/singles-card.php';

    }   
 ?>   

    </div>


</div>
<?php

include_once __DIR__ . '/../views/footer.php';


