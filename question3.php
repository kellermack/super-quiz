<?php


if(isset($_POST['phobia'])) {
   $phobia = $_POST['phobia']; 
} else {
    $phobia= "No button selected";
}


$correct = "that a duck is watching you";

?>

<!DOCTYPE html>

<html>
    
     <head>
        <meta charset="UTF-8">
        
    </head>
    <body>
        <form action="question3.php" method="post">
            <p>Anatidaephobia is the fear of what?</p><br>
        
        
        <input type="checkbox" name="phobia" value="spiders"> spiders<br>
        <input type="checkbox" name="phobia" value="snakes"> snakes<br>
        <input type="checkbox" name="phobia" value="heights"> heights<br>
        <input type="checkbox" name="phobia" value="that a duck is watching you"> that a duck is watching you<br>
        <input type="checkbox" name="phobia" value="tight spaces"> tight spaces<br>
        
        
        
        
        </form>
        
        
    </body>
    
    
    
    
    
    
    
    
    
    
</html>








<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

