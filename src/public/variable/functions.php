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
};


function feedback($message, $class)
{
    $newClass = mb_ucfirst($class);
    if ($class === "") {
        echo "<div class = 'info' > Info:  $message </div> ";
    } else {
        echo "<div class = '$class' > $newClass :  $message </div> ";
    }
};

function generatorWords()
{
    $string = '';
    $string2 = "";
    $letters = array(
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m",
        "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
    );

    for ($i = 1; $i <= rand(1, 5); $i++) {
        $string .= $letters[rand(0, 24)];
    }

    for ($i = 1; $i <= rand(7, 15); $i++) {
        $string2 .= $letters[rand(0, 24)];
    }

    echo   "<p> $string  $string2 </p>";
};

if (isset($_GET['words'])) {
    generatorWords();
};

$yelling = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";

function calculate_cone_volume($r, $h)
{
    return round($r * $r * 3.14 * $h * (1 / 3));
};

$r = 5;
$h = 2;

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

    <?php
    feedback("Incorrect email adress", "error")
    ?>


    <p>
    <h3>Generate a new word</h3>

    <a href='functions.php?words=true'>
        <button>Generate words</button>
    </a>


</html>

</p>

<p>
    <?php
    echo mb_strtolower($yelling)
    ?>
</p>

<p>
    The volume of a cone which ray is <?php echo $r ?> and height is <?php echo $h ?> is :
    <?php echo calculate_cone_volume($r, $h) ?>
</p>


</body>

</html>