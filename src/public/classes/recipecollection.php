<?php

class RecipeCollection
{
    private $title;
    private $recipes = array();


    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function addRecipe($recipes)
    {
        $this->recipes[] = $recipes;
    }

    public function getRecipe()
    {
        return $this->recipes;
    }


    public function __construct($title)
    {
        $this->setTitle($title);
    }

    //_______________________

    public function getRecipeTitles()
    {
        $titles = array();
        foreach ($this->recipes as $recipe) {
            $titles[] = $recipe->getTitle();
        }
        return array_values($titles);
    }

    //__________________________

    public function filterByTag($tag)
    {
        $taggedRecipes = array();
        foreach ($this->recipes as $recipe) {
            if (in_array(strtolower($tag), $recipe->getTags())) {
                $taggedRecipes[] = $recipe;
            }
        }
        return $taggedRecipes;
    }
}
