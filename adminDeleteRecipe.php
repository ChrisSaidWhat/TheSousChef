<?php
    //  protect access to admin pages
    session_start();

    if ($_SESSION["adminStatus"] == "admin") {

    }
    else {
        header("Location: login.php");
    }

    try {
        $recipeId = $_GET['recipeId'];

        require 'dbConnect.php';

        $sql = "DELETE FROM recipe WHERE recipe_id = :recipeId";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':recipeId', $recipeId);

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
        <title>Admin - Add Recipe</title>
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
                <svg class="size-lg z-0 position-relative">
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
            <h4 class="display-4">Recipe Successfully Deleted</h4>
            <div class="position-absolute back-widget">
                <a href="adminViewAllRecipes.php"><i class="bi bi-chevron-bar-left"></i></a>
            </div> <!-- end back widget -->
        </div>
    </body>
</html>