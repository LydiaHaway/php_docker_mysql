<?php

$name = "Lydia";
$age = 28; 
$eyeColor = "brown";
$familyMember = [
    "Yannick", "Yves", "Jordan", "Lydia"
]; 
$areYouHungry = false; 
    
?>



<html>
    <body>
        <p> 
            Hi my name is <?php echo $name ?>.
        </p>
        <p>
            I am <?php echo $age ?> years old.
        </p>
        <p>
            My eyes are <?php echo $eyeColor ?>. 
        </p>
        <p>
            The first member of my family is <?php echo $familyMember[0] ?> 
        </p>

    </body>
</html>