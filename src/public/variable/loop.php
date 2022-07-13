<?php

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');


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
</pre>