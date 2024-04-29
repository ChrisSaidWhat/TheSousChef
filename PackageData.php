<?php

    class PackageData {
        //  properties
        public $recipeTitle;
        public $recipeImage;
        public $recipeServingSize;
        public $recipeTime;
        public $recipeDifficulty;
        public $ingredientTitles = [];
        public $ingredientQuantities = [];
        public $instructionHeadings = [];
        public $instructionBodies = [];

        //  setters and getters
        public function getRecipeTitle() {
            return $this->recipeTitle;
        }
        public function setRecipeTitle($recipeTitle) {
            $this->recipeTitle = $recipeTitle;
        }
        public function getRecipeImage() {
            return $this->recipeImage;
        }
        public function setRecipeImage($recipeImage) {
            $this->recipeImage = $recipeImage;
        }
        public function getRecipeServingSize() {
            return $this->recipeServingSize;
        }
        public function setRecipeServingSize($recipeServingSize) {
            $this->recipeServingSize = $recipeServingSize;
        }
        public function getRecipeTime() {
            return $this->recipeTime;
        }
        public function setRecipeTime($recipeTime) {
            $this->recipeTime = $recipeTime;
        }
        public function getRecipeDifficulty() {
            return $this->recipeDifficulty;
        }
        public function setRecipeDifficulty($recipeDifficulty) {
            $this->recipeDifficulty = $recipeDifficulty;
        }
        public function getIngredientTitles() {
            return $this->ingredientTitles;
        }
        public function setIngredientTitles($ingredientTitles) {
            $this->ingredientTitles = $ingredientTitles;
        }
        public function getIngredientQuantities() {
            return $this->ingredientQuantities;
        }
        public function setIngredientQuantities($ingredientQuantities) {
            $this->ingredientQuantities = $ingredientQuantities;
        }
        public function getInstructionHeadings() {
            return $this->instructionHeadings;
        }
        public function setInstructionHeadings($instructionHeadings) {
            $this->instructionHeadings = $instructionHeadings;
        }
        public function getInstructionBodies() {
            return $this->instructionBodies;
        }
        public function setInstructionBodies($instructionBodies) {
            $this->instructionBodies = $instructionBodies;
        }

        //  processing functions
        public function addIngredient($title, $quantity) {
            $this->ingredientTitles[] = $title;
            $this->ingredientQuantities[] = $quantity;
        }
        public function addInstruction($heading, $body) {
            $this->instructionHeadings[] = $heading;
            $this->instructionBodies[] = $body;
        }
    }