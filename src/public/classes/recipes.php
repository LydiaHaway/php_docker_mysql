<?php

declare(strict_types=1);

class Recipe
{
    private $title;
    private $ingredients = array();
    private $instructions = array();
    private $yield;
    private $tags = array();
    private $source = "The crazy cooker";

    //________________________________________________

    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }

    public function getTitle()
    {
        return $this->title;
    }

    //_________________________________________________

    private $measurements = array(
        "liter",
        "g",
        "kg",
        "cup",
        "soup spoon",
        "coffee spoon",
        "ounce"
    );

    public function addIngredient($item, $amount = null, $measure = null)
    {
        if ($amount != null && !is_float($amount) && !is_int($amount)) {
            exit("The amount must be a float: " . gettype($amount) . " $amount given.");
        }

        if ($measure != null && !in_array(strtolower($measure), $this->measurements)) {
            exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
        }

        $this->ingredients[] = array(
            "item"         => ucwords($item),
            "amount"     => $amount,
            "measure"     => $measure,
        );
    }

    //__________________________________________

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function addInstruction($string)
    {
        $this->instructions[] = $string;
    }

    public function getInstructions()
    {
        return $this->instructions;
    }

    public function addTag($tag)
    {
        $this->tags[] = strtolower($tag);
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setYield($yield)
    {
        $this->yield = $yield;
    }

    public function getYield()
    {
        return $this->yield;
    }

    public function setSource($source)
    {
        $this->source = ucwords($source);
    }

    public function getSource()
    {
        return $this->source;
    }

    //_________________________________

    public function __construct($title)
    {
        $this->setTitle($title);
    }

    public function __toString()
    {
        $output = "Your are calling a " . __CLASS__ . " object with the title \"";
        $output .= $this->getTitle() . "\".";
        $output .= " It is stored in " . basename(__FILE__) . " at " . __DIR__ . ".";
        $output .= " This display from line " . __LINE__ . " in method " . __METHOD__ . "<br/>";
        $output .= " The following methods are available for objects in this class: ";
        $output .= implode("<br/>", get_class_methods(__CLASS__));
        return $output;
    }
};

//$recipe1 = new Recipe();

//echo $recipe1->displayRecipe();

//$recipe1->setTitle("Boulets liégeois");

//echo $recipe1->title;

//echo $recipe1->getTitle();
