
<?php



if(isset($_POST['president'])) {
   $president = $_POST['president']; 
} else {
    $president= "No button selected";
}

$answer = 'Martin Van Buren';


?>


<!DOCTYPE html>

<html>
    
    <head>
        
        <meta charset ="UTF-8">
        <title> Question #2</title>
    
    
    <form action="question2.php" method="post">   
    <p> This president spoke Dutch as his first language</p>
    <br>
    <h1> Who is :</h1>
    
    
    <input type='radio' name="president" value="John Adams"> John Adams<br>
    <input type='radio' name="president" value="James K Polk"> James K Polk<br>
    <input type='radio' name="president" value="Martin Van Buren"> Martin Van Buren<br>
    <input type='radio' name="president" value="William Howard Taft"> William Howard Taft<br>
    <input type='radio' name="president" value="Grover Cleveland"> Grover Cleveland<br>
        
        
      <?php
        
      
          if(($president != $answer  )){
            echo "You Chose poorly, try again";
          }    else {
                  echo "You Chose....wisely";
              }
                    
                         
                      
                          
          
      ?>
    
    <input type="submit" name="submit" value="Do It!"/><br><br>
     
        
    </form>
    </head>
    
    
    
    
    
    
    
</html>





