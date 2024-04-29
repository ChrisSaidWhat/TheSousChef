<?php

    require 'PackageData.php';

    $package = new PackageData();

    $recipeId = $_REQUEST["recipeId"];

    try {

        require 'dbConnect.php';

        $sql = "SELECT recipe_id, recipe_title, recipe_image, recipe_serving_size, recipe_time, recipe_difficulty, recipe_ingredient_title, 
                recipe_ingredient_quantity, recipe_instruction_heading, recipe_instruction_body FROM recipe WHERE recipe_id = :recipeId";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':recipeId', $recipeId);

        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $row = $stmt->fetch();

        $package->setRecipeTitle($row['recipe_title']);
        $package->setRecipeImage($row['recipe_image']);
        $package->setRecipeServingSize($row['recipe_serving_size']);
        $package->setRecipeTime($row['recipe_time']);
        $package->setRecipeDifficulty($row['recipe_difficulty']);
        $package->setIngredientTitles(json_decode($row['recipe_ingredient_title']));
        $package->setIngredientQuantities(json_decode($row['recipe_ingredient_quantity']));
        $package->setInstructionHeadings(json_decode($row['recipe_instruction_heading']));
        $package->setInstructionBodies(json_decode($row['recipe_instruction_body']));

    }
    catch (PDOException $e) {
        $errMsg = "There has been a problem. The system administrator has been contacted. Please try again later.";

        error_log($e->getMessage());
        error_log($e->getLine());
        error_log(var_dump(debug_backtrace()));

        echo $errMsg;
    }

    echo json_encode($package);