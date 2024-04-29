<?php

    //  protect access to admin pages
    session_start();

    if ($_SESSION["adminStatus"] == "admin") {

    }
    else {
        header("Location: login.php");
    }

    try {
        require 'dbConnect.php';

        $sql = "SELECT recipe_id, recipe_title, recipe_image, recipe_serving_size, recipe_time, recipe_difficulty, recipe_ingredient_title, 
                recipe_ingredient_quantity, recipe_instruction_heading, recipe_instruction_body, sender_name, sender_email, sender_comments FROM recipe";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e) {
        $message = "There has been a problem. The system administrator has been contacted. Please try again later.";

        error_log($e->getMessage());
        error_log($e->getLine());
        error_log(var_dump(debug_backtrace()));

        echo "<h1>$message</h1>";
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Admin - All Recipes</title>
        <link href="../../images/personalMonogramLogo.svg" rel="icon" type="image/x-icon">
        <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
              rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <script crossorigin="anonymous"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="siteCSS/siteStyles.css" rel="stylesheet" type="text/css">

        <style>
            /*Bootstrap Style Overrides*/
            @media screen and (max-width: 992px) {
                .alert {
                    opacity: 1 !important;
                }
            }
        </style>

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
        <div class="flex-container mb-5 py-5">
            <div class="alert alert-success alert-dismissible fade" role="alert">
                <strong>Top Tip!</strong> To see all columns, scroll to the right.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="table-responsive ps-5 pe-5">
                <table class="table table-striped-columns">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Recipe Title</th>
                        <th scope="col">Recipe Img</th>
                        <th scope="col">Serving Size</th>
                        <th scope="col">Recipe Time</th>
                        <th scope="col">Recipe Difficulty</th>
                        <th scope="col">Ingredient Titles</th>
                        <th scope="col">Ingredient Quantities</th>
                        <th scope="col">Instruction Headings</th>
                        <th scope="col">Instruction Bodies</th>
                        <th scope="col">Sender Name</th>
                        <th scope="col">Sender Email</th>
                        <th scope="col">Sender Comments</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        while ($row = $stmt->fetch()) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $row["recipe_id"]; ?></th>
                                <td><?php echo $row["recipe_title"]; ?></td>
                                <td><?php echo $row["recipe_image"]; ?></td>
                                <td><?php echo $row["recipe_serving_size"]; ?></td>
                                <td><?php echo $row["recipe_time"]; ?></td>
                                <td><?php echo $row["recipe_difficulty"]; ?></td>
                                <td><?php echo $row["recipe_ingredient_title"]; ?></td>
                                <td><?php echo $row["recipe_ingredient_quantity"]; ?></td>
                                <td><?php echo $row["recipe_instruction_heading"]; ?></td>
                                <td><?php echo $row["recipe_instruction_body"]; ?></td>
                                <td><?php echo $row["sender_name"]; ?></td>
                                <td><?php echo $row["sender_email"]; ?></td>
                                <td><?php echo $row["sender_comments"]; ?></td>
                                <td class="d-flex justify-content-evenly"><a
                                            href="adminUpdateRecipe.php?recipeId=<?php echo $row['recipe_id'] ?>"
                                            class="icon-link"><i class="bi bi-input-cursor-text"></i></a><a
                                            href="adminDeleteRecipe.php?recipeId=<?php echo $row['recipe_id'] ?>"
                                            class="icon-link"><i class="bi bi-trash"></i></a></td>
                            </tr>
                            <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>