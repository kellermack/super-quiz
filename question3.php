<?php


if(isset($_POST['phobia'])) {
   $phobia = $_POST['phobia']; 
} else {
    $phobia = "That a duck is watching you";
}




$spiders = "spiders";
$snakes = "snake";
$heights = "heights";
$tightSpaces = "tight spaces";
?>

<!DOCTYPE html>

<html>
    
     <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" href="newcss.css" />
        
    </head>
    <body>
        <form action="question3.php" method="post">
            <p>Anatidaephobia is the fear of what?</p><br>
        
        
        <input type="radio" name="phobia" value="spiders"> spiders<br>
        <input type="radio" name="phobia" value="snakes"> snakes<br>
        <input type="radio" name="phobia" value="heights"> heights<br>
        <input type="radio" name="phobia" value="that a duck is watching you"> that a duck is watching you<br>
        <input type="radio" name="phobia" value="tight spaces"> tight spaces<br>
        
        
        <br>
        <input type="submit" name="submit" value="Do It!"/><br><br>
        
        
        
        
         <?php
        
      
        if ($spiders != $phobia){
              echo "That's Arachnophobia"; 
          } else if ($snakes != $phobia){
              echo "That's Ophidiophobia"; 
          } else if ($heights != $phobia){
              echo "No, that's Acrophobia";
          } else if ($tightSpaces != $phobia){
              echo "Nope, that is claustrophobia";
          } else {
              echo "Quack, You are right";
          }
        ?>
        
        </form>
        
        <br>
         <a href="http://localhost/guessingGame/question4.php"> Onward! </a>
    </body>
    
    
    
    
    
    
    
    
    
    
</html>







 
