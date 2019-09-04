<?php


$number = "";
if(isset($_POST['number_entered'])){
    $number = $_POST['number_entered'];

  }




$randomNumber = 34;

?>





<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>The Guessing Game</title>
    </head>
    <body>
        
        <form action ="index.php" method="POST">
        <p> In this game you will guess a number from 1-100. If the guess is not 
        correct a hint will be displayed.</p>
        <input type="text" name="number_entered" value=''/> <br><br>
        
        
        
        <?php
        
   
          if(($number <= 33)){
              echo "Go higher";
          } else if(($number >= 35)){
                     echo "Go lower";
          } else if (($number = 34)) {
                echo "You have guessed correctly!";
          }
             
             
          
      
        
        ?>
        
        <br><br>
<input type="submit" name="submit" value="Search"/><br><br>


<br>

<a href="http://localhost/guessingGame/question2.php">Go to the next Question</a>

        </form>
    </body>
</html>



