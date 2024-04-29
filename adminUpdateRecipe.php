<?php

    //  protect access to admin pages
    session_start();

    if ($_SESSION["adminStatus"] == "admin") {

    }
    else {
        header("Location: login.php");
    }

    $recipeId = $_GET["recipeId"];

    $display = "";

    $errMsg = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //  form has been submitted
        $display = "success";
        $validForm = true;
        //  get the data from the POST variable that came from the form
        $honeypot = $_POST['inRecipeId'];
        if (!empty($honeypot)) {
            header("Location: adminAddRecipe.php");
            exit();
        }

        $numberOfIngredients = $_POST['ingredientCount'];
        $numberOfInstructions = $_POST['instructionCount'];

        $recipeTitle = $_POST["inRecipeTitle"];
        $recipeImage = $_FILES["inRecipeImage"]["name"];

        //  image upload processing

        $target_directory = "uploadedImages/";
        $target_file = $target_directory . basename($_FILES["inRecipeImage"]["name"]);
        $uploadOk = 1;
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//        //  check that image file is an image
//
//        if (isset($_POST["submit"])) {
//            $check = getimagesize($_FILES["inRecipeImage"]["tmp_name"]);
//            if ($check !== false) {
//                $uploadOk = 1;
//            }
//            else {
//                $errMsg = "ERROR: File is not an image.";
//                $uploadOk = 0;
//                $validForm = false;
//                $display = "form";
//            }
//        }
//
//        //  check if image already exists
//
//        if (file_exists($target_file)) {
//            $errMsg = "ERROR: The file already exists.";
//            $uploadOk = 0;
//            $validForm = false;
//            $display = "form";
//        }
//
//        //  check file size
//
//        if ($_FILES["inRecipeImage"]["size"] > 5000000) {
//            $errMsg = "ERROR: File is too large.";
//            $uploadOk = 0;
//            $validForm = false;
//            $display = "form";
//        }
//
//        //  check and limit image file types
//
//        if ($image_file_type != "jpg" && $image_file_type != "jpeg" && $image_file_type != "png") {
//            $errMsg = "ERROR: Only JPG, JPEG, & PNG files can be uploaded.";
//            $uploadOk = 0;
//            $validForm = false;
//            $display = "form";
//        }

        //  check if file is acceptable for upload

        if ($uploadOk == 0) {
            $errMsg = "ERROR: File was not uploaded.";
            $display = "form";
        }
        else {
            if (move_uploaded_file($_FILES["inRecipeImage"]["tmp_name"], $target_file)) {
//                echo "The file " . htmlspecialchars(basename($_FILES["inRecipeImage"]["name"])) . " has been successfully uploaded.";
            }
            else {
                $errMsg = "ERROR: There was an error uploading the file.";
                $display = "form";
            }
        }

        $recipeServingSize = $_POST["inRecipeServing"];
        $recipeTime = $_POST["inRecipeTime"];
        $recipeDifficulty = $_POST["inRecipeDifficulty"];
        $ingredientTitles = $_POST["inIngredientTitle"];
        $ingredientQuantities = $_POST["inIngredientQuantity"];
        $instructionHeadings = $_POST["inInstructionHeading"];
        $instructionBodies = $_POST["inInstructionBody"];
        $senderName = $_POST['inSenderName'];
        $senderEmail = $_POST['inSenderEmail'];
        $senderComments = $_POST['inSenderComments'];

        if($validForm) {
            $ingredientTitles = json_encode($ingredientTitles);
            $ingredientQuantities = json_encode($ingredientQuantities);
            $instructionHeadings = json_encode($instructionHeadings);
            $instructionBodies = json_encode($instructionBodies);
            try {
                require 'dbConnect.php';

                $sql = "UPDATE recipe SET recipe_title = :recipeTitle, recipe_image = :recipeImage, recipe_serving_size = :recipeServingSize, recipe_time = :recipeTime, recipe_difficulty = :recipeDifficulty,
                  recipe_ingredient_title = :ingredientTitles, recipe_ingredient_quantity = :ingredientQuantities, recipe_instruction_heading = :instructionHeadings, recipe_instruction_body = :instructionBodies,
                  sender_name = :senderName, sender_email = :senderEmail, sender_comments = :senderComments WHERE recipe_id = :recipeId";

                $stmt = $conn->prepare($sql);

                $stmt->bindParam(':recipeId', $recipeId);
                $stmt->bindParam(':recipeTitle', $recipeTitle);
                $stmt->bindParam(':recipeImage', $recipeImage);
                $stmt->bindParam(':recipeServingSize', $recipeServingSize);
                $stmt->bindParam(':recipeTime', $recipeTime);
                $stmt->bindParam(':recipeDifficulty', $recipeDifficulty);
                $stmt->bindParam(':ingredientTitles', $ingredientTitles);
                $stmt->bindParam(':ingredientQuantities', $ingredientQuantities);
                $stmt->bindParam(':instructionHeadings', $instructionHeadings);
                $stmt->bindParam(':instructionBodies', $instructionBodies);
                $stmt->bindParam(':senderName', $senderName);
                $stmt->bindParam(':senderEmail', $senderEmail);
                $stmt->bindParam(':senderComments', $senderComments);

                $stmt->execute();

            }
            catch (PDOException $e) {
                $display = "form";
                $errMsg = "There has been a problem. The system administrator has been contacted. Please try again later.";

                error_log($e->getMessage());
                error_log($e->getLine());
                error_log(var_dump(debug_backtrace()));
            }
        }
    }
    else {
        $display = "form";

        try {

            require 'dbConnect.php';

            $sql = "SELECT recipe_id, recipe_title, recipe_image, recipe_serving_size, recipe_time, recipe_difficulty, recipe_ingredient_title, 
                recipe_ingredient_quantity, recipe_instruction_heading, recipe_instruction_body, sender_name, sender_email, sender_comments FROM recipe WHERE recipe_id = :recipeId";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':recipeId', $recipeId);

            $stmt->execute();

            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $row = $stmt->fetch();

            $recipeTitle = $row['recipe_title'];
            $recipeServingSize = $row['recipe_serving_size'];
            $recipeTime = $row['recipe_time'];
            $recipeDifficulty = $row['recipe_difficulty'];
            $recipeIngredientTitles = $row['recipe_ingredient_title'];
            $recipeIngredientTitles = json_decode($recipeIngredientTitles);
            $recipeIngredientQuantities = $row['recipe_ingredient_quantity'];
            $recipeIngredientQuantities = json_decode($recipeIngredientQuantities);
            $recipeInstructionHeadings = $row['recipe_instruction_heading'];
            $recipeInstructionHeadings = json_decode($recipeInstructionHeadings);
            $recipeInstructionBodies = $row['recipe_instruction_body'];
            $recipeInstructionBodies = json_decode($recipeInstructionBodies);
            $senderName = $row['sender_name'];
            $senderEmail = $row['sender_email'];
            $senderComments = $row['sender_comments'];

            $numberOfIngredients = sizeof($recipeIngredientTitles);
            $numberOfInstructions = sizeof($recipeInstructionHeadings);
        }
        catch (PDOException $e) {
            $display = "form";
            $errMsg = "There has been a problem. The system administrator has been contacted. Please try again later.";

            error_log($e->getMessage());
            error_log($e->getLine());
            error_log(var_dump(debug_backtrace()));
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Admin - Update Recipe</title>
        <link href="../../images/personalMonogramLogo.svg" rel="icon" type="image/x-icon">
        <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
              rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <script crossorigin="anonymous"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="dynamicPresentation.js"></script>
        <script src="dataHandling.js"></script>
        <link href="siteCSS/siteStyles.css" rel="stylesheet" type="text/css">
        <style>
            /*Custom CSS Styling*/
            .info {
                display: none;
            }
        </style
    </head>
    <body>
        <header class="py-3 d-flex flex-column flex-md-row justify-content-between">
            <div class="ms-5">
                <svg class="size-lg z-0 position-relative svg-effect">
                    <rect class="size-lg"/>
                </svg>
                <h3 class="display-3 z-1 position-relative mb-0"><span class="admin-a">A</span>dmin</h3>
            </div>
            <div aria-label="Basic outlined example" class="btn-group align-self-center me-sm-0 me-md-5" role="group">
                <a href="adminAddRecipe.php">
                    <button class="btn btn-outline-light admin-btn" type="button">Add Recipe</button>
                </a>
                <a href="adminViewAllRecipes.php">
                    <button class="btn btn-outline-light admin-btn" type="button">View All Recipes</button>
                </a>
                <a href="logout.php">
                    <button class="btn btn-outline-light admin-btn" type="button">Log Out</button>
                </a>
            </div>
        </header>
        <div class="container mb-5 py-5">
            <template id="ingredientSetTemplate">
                <div class="ingredient-set d-flex flex-column createdDynamicallyIngredient">
                    <div class="input-group mb-3 me-4">
                        <span class="input-group-text" id="ingredientTitle">Ingredient Title: </span>
                        <input aria-describedby="ingredientTitle" aria-label="Ingredient Title"
                               class="form-control"
                               placeholder="Ingredient Title" type="text" id="inIngredientTitle"
                               name="inIngredientTitle" required>
                    </div>
                    <div class="input-group mb-3">
                                        <span class="input-group-text"
                                              id="ingredientQuantity">Ingredient Quantity: </span>
                        <input aria-describedby="ingredientQuantity" aria-label="Ingredient Quantity"
                               class="form-control"
                               placeholder="#"
                               type="number" id="inIngredientQuantity" name="inIngredientQuantity" required>
                        <span class="input-group-text"><i
                                    class="bi bi-receipt"></i></span>
                    </div>
                </div> <!-- end of ingredient set -->
            </template>

            <template id="instructionSetTemplate">
                <div class="instruction-set createdDynamicallyInstruction">
                    <div class="input-group mb-3 me-4">
                        <span class="input-group-text" id="instructionHeading">Instruction Heading: </span>
                        <input aria-describedby="instructionHeading" aria-label="Instruction Heading"
                               class="form-control"
                               placeholder="Instruction Heading" id="inInstructionHeading" type="text"
                               name="inInstructionHeading" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="instructionBody">Instruction Body: </span>
                        <textarea aria-describedby="instructionBody" aria-label="Instruction Body"
                                  class="form-control" placeholder="Write Directions Here..." id="inInstructionBody"
                                  name="inInstructionBody" required></textarea>
                    </div>
                </div> <!-- end of instruction set -->
            </template>
            <?php
                if ($display == "success") {
                    ?>
                    <h4 class="display-4">Recipe Id: <?php echo $recipeId ?> Successfully Updated</h4>
                    <div class="position-absolute back-widget">
                        <a href="adminViewAllRecipes.php"><i class="bi bi-chevron-bar-left"></i></a>
                    </div> <!-- end back widget -->
                    <?php
                }
                else {
                    ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?recipeId=' . $recipeId; ?>" enctype="multipart/form-data" method="post" id="formSubmit">
                        <div class="row bg-success py-5 justify-content-evenly to-column">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="info">
                                    <label for="recipeId">Recipe Id: </label>
                                    <input type="text" id="recipeId" name="inRecipeId">

                                    <label for="ingredientCount">Ingredient Count: </label>
                                    <input type="text" id="ingredientCount" name="ingredientCount" value="<?php echo $numberOfIngredients; ?>">

                                    <label for="instructionCount">Instruction Count: </label>
                                    <input type="text" id="instructionCount" name="instructionCount" value="<?php echo $numberOfInstructions; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="recipeTitle">Recipe Title: </span>
                                    <input aria-describedby="recipeTitle" aria-label="Recipe Title" class="form-control"
                                           placeholder="Recipe Title" type="text" name="inRecipeTitle"
                                           value="<?php
                                               if(isset($row['recipe_title'])){
                                                   echo $row['recipe_title'];
                                               }
                                               else {
                                                   if(isset($recipeTitle)) {
                                                       echo $recipeTitle;
                                                   }
                                               }
                                           ?>" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="recipeImg">Recipe Image: </span>
                                    <input aria-describedby="recipeImg" aria-label="Recipe Image" class="form-control"
                                           placeholder="Recipe Image" type="file" name="inRecipeImage" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="servingSizeLabel">Serving Size: </span>
                                    <select aria-describedby="servingSizeLabel"
                                            aria-label="Floating label select example"
                                            class="form-select form-select-md" id="servingSize" name="inRecipeServing"
                                            required>
                                        <option selected value="">Select Serving Size...</option>
                                        <option value="half" <?php
                                            if(isset($row['recipe_serving_size'])){
                                                echo ($row['recipe_serving_size'] == "half") ? 'selected' : '';
                                            }
                                            else {
                                                if(isset($recipeServingSize)) {
                                                    echo ($recipeServingSize == "half") ? 'selected' : '';;
                                                }
                                            }
                                            ?>>Half</option>
                                        <option value="single" <?php
                                            if(isset($row['recipe_serving_size'])){
                                                echo ($row['recipe_serving_size'] == "single") ? 'selected' : '';
                                            }
                                            else {
                                                if(isset($recipeServingSize)) {
                                                    echo ($recipeServingSize == "single") ? 'selected' : '';;
                                                }
                                            }
                                            ?>>Single</option>
                                        <option value="double" <?php
                                            if(isset($row['recipe_serving_size'])){
                                                echo ($row['recipe_serving_size'] == "double") ? 'selected' : '';
                                            }
                                            else {
                                                if(isset($recipeServingSize)) {
                                                    echo ($recipeServingSize == "double") ? 'selected' : '';;
                                                }
                                            }
                                            ?>>Double</option>
                                        <option value="triple" <?php
                                            if(isset($row['recipe_serving_size'])){
                                                echo ($row['recipe_serving_size'] == "triple") ? 'selected' : '';
                                            }
                                            else {
                                                if(isset($recipeServingSize)) {
                                                    echo ($recipeServingSize == "triple") ? 'selected' : '';
                                                }
                                            }
                                            ?>>Triple</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="recipeTimeLabel">Recipe Time: </span>
                                    <input aria-describedby="recipeTimeLabel" aria-label="Recipe Time"
                                           class="form-control"
                                           placeholder="00:00:00"
                                           type="text" name="inRecipeTime" value="<?php
                                        if(isset($row['recipe_time'])){
                                            echo $row['recipe_time'];
                                        }
                                        else {
                                            if(isset($recipeTime)) {
                                                echo $recipeTime;
                                            }
                                        }
                                    ?>" required>
                                    <span class="input-group-text" id="recipeTimeImg"><i class="bi bi-clock"></i></span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="recipeDiffLabel">Recipe Difficulty: </span>
                                    <input aria-describedby="recipeDiffLabel" aria-label="Recipe Difficulty"
                                           class="form-control"
                                           max="5"
                                           min="1" placeholder="#" type="number" name="inRecipeDifficulty"
                                           value="<?php
                                               if(isset($row['recipe_difficulty'])){
                                                   echo $row['recipe_difficulty'];
                                               }
                                               else {
                                                   if(isset($recipeDifficulty)) {
                                                       echo $recipeDifficulty;
                                                   }
                                               }
                                           ?>" required>
                                    <span class="input-group-text" id="recipeDiffMax">/5</span>
                                    <span class="input-group-text" id="recipeDiffImg"><i class="bi bi-star"></i></span>
                                </div>
                            </div>
                        </div> <!-- end of inner row 1 -->
                        <div class="row bg-success py-5 justify-content-evenly to-column">
                            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8" id="ingredientSetDestination">
                        <?php
                            for($i = 0; $i < $numberOfIngredients; $i++) {
                                ?>
                                <div class="ingredient-set d-flex flex-column createdDynamicallyIngredient">
                                    <div class="input-group mb-3 me-4">
                                        <span class="input-group-text" id="<?php echo "ingredientTitle" . $i ?>">Ingredient Title: </span>
                                        <input aria-describedby="<?php echo "ingredientTitle" . $i ?>" aria-label="Ingredient Title"
                                               class="form-control"
                                               placeholder="Ingredient Title" type="text" id="<?php echo "inIngredientTitle" . $i ?>"
                                               name="<?php echo "inIngredientTitle" . "[" . $i . "]"?>" value="<?php
                                            if(isset($recipeIngredientTitles[$i])) {
                                                echo $recipeIngredientTitles[$i];
                                            }
                                            else {
                                                if(isset($ingredientTitles[$i])) {
                                                    echo $ingredientTitles[$i];
                                                }
                                            }
                                        ?>" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"
                                              id="ingredientQuantity">Ingredient Quantity: </span>
                                        <input aria-describedby="ingredientQuantity" aria-label="Ingredient Quantity"
                                               class="form-control"
                                               placeholder="#"
                                               type="number" id="inIngredientQuantity" name="<?php echo "inIngredientQuantity" . "[" . $i . "]"?>" value="<?php
                                            if(isset($recipeIngredientQuantities[$i])) {
                                                echo $recipeIngredientQuantities[$i];
                                            }
                                            else {
                                                if(isset($ingredientQuantities[$i])) {
                                                    echo $ingredientQuantities[$i];
                                                }
                                            }
                                        ?>" required>
                                        <span class="input-group-text"><i
                                                    class="bi bi-receipt"></i></span>
                                    </div>
                                </div> <!-- end of ingredient set -->
                        <?php
                            }
                        ?>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center align-content-center m-auto">
                                <button class="btn btn-outline-light btn-xl" id="addIngredientSet" type="button" disabled
                                        onclick="addIngredient(document.querySelector('#ingredientSetTemplate'), document.querySelector('#ingredientSetDestination'))">
                                    <i class="bi bi-plus-circle"></i>
                                </button>
                            </div>
                        </div> <!-- end of inner row 2 -->
                        <div class="row bg-success py-5 justify-content-evenly to-column">
                            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8" id="instructionSetDestination">
                                <?php
                                    for($i = 0; $i < $numberOfInstructions; $i++) {
                                ?>
                                <div class="instruction-set">
                                    <div class="input-group mb-3 mt-3 me-4">
                                        <span class="input-group-text"
                                              id="<?php echo "instructionHeading" . $i ?>">Instruction Heading: </span>
                                        <input aria-describedby="<?php echo "instructionHeading" . $i ?>" aria-label="Instruction Heading"
                                               class="form-control"
                                               placeholder="Instruction Heading" type="text" id="<?php echo "inInstructionHeading" . $i ?>"
                                               name="<?php echo "inInstructionHeading" . "[" . $i . "]"?>"
                                               value="<?php echo $recipeInstructionHeadings[$i] ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"
                                              id="<?php echo "instructionBody" . $i ?>">Instruction Body: </span>
                                        <textarea aria-describedby="<?php echo "instructionBody" . $i ?>" aria-label="Instruction Body"
                                                  class="form-control"
                                                  placeholder="Write Directions Here..." id="<?php echo "inInstructionBody" . $i ?>"
                                                  name="<?php echo "inInstructionBody" . "[" . $i . "]"?>"><?php echo $recipeInstructionBodies[$i] ?></textarea>
                                    </div>
                                </div> <!-- end of instruction set -->
                                        <?php
                                    }
                                ?>
                            </div>
                            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center align-content-center m-auto">
                                <button class="btn btn-outline-light btn-xl" id="addInstructionSet" type="button" disabled
                                        onclick="addInstruction(document.querySelector('#instructionSetTemplate'), document.querySelector('#instructionSetDestination'))">
                                    <i class="bi bi-plus-circle"></i>
                                </button>
                            </div>
                        </div> <!-- end of inner row 3 -->
                        <div class="row bg-success py-5 to-column">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="nameLabel">Name: </span>
                                    <input aria-describedby="nameLabel" aria-label="Name" class="form-control"
                                           placeholder="Name"
                                           type="text" name="inSenderName" value="<?php echo $senderName; ?>" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="emailAddressLabel">Email Address: </span>
                                    <input aria-describedby="emailAddressLabel" aria-label="Email Address"
                                           class="form-control"
                                           placeholder="username@example.com" type="email" name="inSenderEmail"
                                           value="<?php echo $senderEmail; ?>" required>
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text"
                                              id="additionalComments">Additional Comments: </span>
                                    <textarea aria-describedby="additionalComments" aria-label="Additional Comments"
                                              class="form-control"
                                              placeholder="Write Additional Comments Here..." id="senderComments"
                                              name="inSenderComments"
                                              required><?php echo $senderComments; ?></textarea>
                                </div>
                            </div>
                        </div><!-- end of inner row 4 -->
                        <div class="row bg-success py-5 justify-content-evenly to-column">
                            <div class="d-flex justify-content-start">
                                <div aria-label="Basic outlined example" class="btn-group" role="group">
                                    <button class="btn btn-outline-light" type="submit">Update
                                        Recipe
                                    </button>
                                    <button class="btn btn-outline-light" type="reset" onclick="clearPage()">Clear
                                        Fields
                                    </button>
                                </div>
                            </div>
                            <?php
                                if(!$errMsg == "") {
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade hidden mt-3" role="alert" id="errMsg">
                                        <strong>ERROR!</strong> Problems were detected in the form. Please fix and resubmit.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                    </div>
                            <?php
                                }
                            ?>
                            <div class="alert alert-danger alert-dismissible fade hidden mt-3" role="alert" id="errMsg">
                                <strong>ERROR!</strong> Problems were detected in the form. Please fix and resubmit.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        </div><!-- end of inner row 5 -->
                    </form>
                    <?php
                }
            ?>
        </div>
    </body>
</html>