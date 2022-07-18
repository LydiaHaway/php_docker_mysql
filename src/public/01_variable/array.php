<?php

$familyMember = [
    "Yannick", "Yves", "Jordan", "Lydia"
];

$ramen = ["Ramen Noodles", "Dashi Stock", "Miso Paste", "Mirin", "Shoyu", "Nori"];
$areYouHungry = false;
$faveMovies = ["Belfast", "Dunkirk", "King's speech", "Big Fish", "Trainspotting", "1917"];

$me = [
    "firstname" => "Lydia",
    "lastname" => "Haway",
    "age" => 28,
    "favourite_season" => "Autumn",
    "like_soccer" => false,
    "hobbies" => array("Writing", "reading", "music", "movies", "video games", "History"),
];

$mother = [
    "firstname" => "Yannick",
    "lastname" => "Gauthier",
    "age" => 58,
    "favourite_season" => "summer",
    "like_soccer" => true,
    "hobbies" => array("shopping", "music", "talking")
];

$me += [
    "mother" => $mother
];

$me["hobbies"][] = "taxidermy";

$me["lastname"] = "Durand";

$soulmate = [
    "firstname" => "soulmate",
    "lastname" => "Who",
    "age" => 30,
    "favourite_season" => "summer",
    "like_soccer" => false,
    "hobbies" => array("Adventure", "reading", "music"),
];

$possibleHobbies = array_intersect($me["hobbies"], $soulmate["hobbies"]);
$possibleHobbiesAll = array_merge($me['hobbies'], $soulmate['hobbies']);

$web_development = [];

$frontend = [];
$backend = [];

array_push($frontend, "xhtml");
array_push($backend, "Ruby on Rails");
array_push($frontend, "CSS");
array_push($backend, "flash");
array_push($frontend, "JavaScript");
$frontend[0] = "HTML";
unset($backend[1]);


$web_development += [
    "frontend" => $frontend,
    "backend" => $backend
]




?>

<pre>
    <?php echo print_r($me) ?>
    <?php echo print_r($soulmate) ?>
    <?php echo print_r($web_development) ?>
</pre>

<html>

<body>
    <p>
        Family members : <?php echo print_r($familyMember) ?>
    </p>

    <p>
        Ramen : <?php echo print_r($ramen) ?>
    </p>

    <p>
        Favourite movie : <?php echo $faveMovies[2] ?>
    </p>

    <p>
        My mother has <?php echo count($mother["hobbies"])  ?> hobbies.
    </p>

    <p>
        I have <?php echo count($me["hobbies"]) ?> hobbies.
    </p>

    <p>
        We have <?php echo (count($me["hobbies"])) + (count($mother["hobbies"])) ?> hobbies.
    </p>

    <p>
        Our future child's hobbies might be <?php echo print_r($possibleHobbies) ?>

        or <br /> <?php echo print_r($possibleHobbiesAll) ?>
    </p>

</body>

</html>