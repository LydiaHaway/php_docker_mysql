<?php

$text = "According to a researcher (sic) at Cambridge University , 
it doesn't matter in what order the letters in a word are, the only important thing is that the first 
and last letter be at the right place. The rest can be a total mess and you can still read it without problem. 
This is because the human mind does not read every letter by itself but the word as a whole .";

$text = explode(" ", $text);



/*function cap ($name){
    return ucfirst($name); 
}; */

function mb_ucfirst($name)
{
    return mb_strtoupper(mb_substr($name, 0, 1)) . mb_substr($name, 1);
}

$year = date("l jS \of F Y h:i:s A");

function sum($num1, $num2)
{
    if (is_numeric($num1) && is_numeric($num2)) {
        return $num1 + $num2;
    } else {
        echo "Error: argument is the not a number.";
    }
};

function acro($expression)
{
    $ret = '';
    foreach (explode(' ', $expression) as $word)
        $ret .= strtoupper($word[0]);
    return $ret;
};

function replace($word)
{
    return strtr($word, ["ae" => "æ"]);
};

function unreplace($word)
{
    return strtr($word, ["æ" => "ae"]);
}


?>

<html>

<body>
    <p>
        <?php
        foreach ($text as $word) {

            echo str_shuffle($word) . " ";
        };
        ?>
    </p>

    <p>
        <?php
        echo mb_ucfirst("émile");
        ?>
    </p>

    <p>
        <?php
        echo $year
        ?>
    </p>

    <p>
        <?php
        echo sum(5, 6);
        ?>
    </p>

    <p>
        <?php

        echo acro("In Code We Trust")

        ?>
    </p>

    <p>
        <?php
        echo replace("microsphaera")
        ?>
    </p>

    <p>
        <?php
        echo unreplace("microsphæra")
        ?>
    </p>


</body>

</html>