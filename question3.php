

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

if(isset($_POST['phobia'])) {
$phobia = $_POST['phobia']; 
} 

$definitions = [
    "spiders" => "That's Arachnophobia",
    "snakes" => "That's Ophidiophobia",
    "heights" => "No, that's Acrophobia",
    "tight spaces" => "Nope, that is claustrophobia",
    "that a duck is watching you" => "Yessssssssssssss"
];

$correctAnswer = 'spiders';
if($phobia == $correctAnswer) {
    $message = "That's Arachnophobia";
} else {
    $message = $definitions[$phobia];
}

echo $message;

?>
      
    
        
        </form>
        
        <br>
         <a href="http://localhost/guessingGame/question4.php"> Onward! </a>
    </body>
    
    
    
    
    
    
    
    
    
    
</html>







 
