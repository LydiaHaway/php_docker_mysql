<?php

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
$lines = 1;

$startup = ["Homelander", "Billy", "Travis", "Arthur"];

$countries = ["UK" => "United Kingdom", 
"SCT" => "Scotland",
"WLS" => "Wales", 
"BE" => "Belgium", 
"PL" => "Poland", 
"FR" => "France", 
"ES" => "Spain",
"IE" => "Ireland", 
"JP" => "Japan",
"us" => "United States"]; 


?>

<pre>
    <?php 

    foreach($pronouns as $value){
        if($value == "He/She"){
            echo "$value codes \n ";
        } else
        echo "$value code \n ";
    }

    ?>

    <?php  

while($lines <= 120)
     {echo $lines;
     $lines ++;  } 

for($lines = 0; $lines <= 120; $lines ++ ){
    echo "$lines <br/>"; 
}

foreach($startup as $values){
    echo "$values <br/>"; 
}

    ?>

</pre>

<html>
    <body>
        <select>
            <?php 
            
            foreach($countries as $iso => $valuesCountry){
                echo " <option value = $iso> $valuesCountry </option>"; 
            }
            
            ?>
        </select>
    </body>
</html>