<?php

    //  form data variables
    $inRecipeId = $_POST['inRecipeId'];
    $inRecipeTitle = $_POST['inRecipeTitle'];
    $inRecipeImage = $_POST['inRecipeImage'];
    $inRecipeServingSize = $_POST['inRecipeServing'];
    $inRecipeTime = $_POST['inRecipeTime'];
    $inRecipeDifficulty = $_POST['inRecipeDifficulty'];
    $inIngredientTitle = $_POST['inIngredientTitle'];
    $inIngredientQuantity = $_POST['inIngredientQuantity'];
    $inInstructionHeading = $_POST['inInstructionHeading'];
    $inInstructionBody = $_POST['inInstructionBody'];
    $inSenderName = $_POST['inSenderName'];
    $inSenderEmail = $_POST['inSenderEmail'];
    $inSenderComments = $_POST['inSenderComments'];

    //  data for mailing to sender
    $toSender = $inSenderEmail;
    $subjectSender = "Recipe Request Received!";
    $headerSender = "From: christopher@christophersaid.com";
    $headerSender .= "MIME-Version: 1.0" . "\r\n";
    $headerSender .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $messageSender = "<h1>Thank You For Sharing Your Recipe Chef!</h1>";
    $messageSender .= "<p><strong>$inSenderName</strong>, Thank you for your submitted recipe request to The Sous Chef&trade;!</p>";
    $messageSender .= "<p>We have received the following answers and will keep you posted on where we are at in the process to decide on whether to accept your recipe.</p>";
    $messageSender .= "<ol><li>Recipe Title: $inRecipeTitle</li> <li>Recipe Image: $inRecipeImage</li> <li>Recipe Serving Size: $inRecipeServingSize</li>";
    $messageSender .= "<li>Recipe Time: $inRecipeTime</li> <li>Recipe Difficulty: $inRecipeDifficulty/5</li> <li>Ingredient Title: $inIngredientTitle</li> <li>Ingredient Quantity: $inIngredientQuantity</li>";
    $messageSender .= "<li>Instruction Heading: $inInstructionHeading</li> <li>Instruction Body: $inInstructionBody</li> <li>Additional Comments: $inSenderComments</li></ol>";
    $messageSender .= "<h3>- The Sous Chef&trade; Team</h3>";

    //  data for mailing to Sous Chef
    $toSC = "christopher@christophersaid.com";
    $subjectSC = "Recipe Request Received";
    $headerSC = "From: $inSenderEmail". "\r\n";
    $headerSC .= "MIME-Version: 1.0" . "\r\n";
    $headerSC .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $messageSC = "<ol><li>Recipe Title: $inRecipeTitle</li> <li>Recipe Image: $inRecipeImage</li> <li>Recipe Serving Size: $inRecipeServingSize</li>";
    $messageSC .= "<li>Recipe Time: $inRecipeTime</li> <li>Recipe Difficulty: $inRecipeDifficulty/5</li> <li>Ingredient Title: $inIngredientTitle</li> <li>Ingredient Quantity: $inIngredientQuantity</li>";
    $messageSC .= "<li>Instruction Heading: $inInstructionHeading</li> <li>Instruction Body: $inInstructionBody</li> <li>Sender Name: $inSenderName</li> <li>Sender Email: $inSenderEmail</li> <li>Additional Comments: $inSenderComments</li></ol>";

    if ((mail($toSender, $subjectSender, $messageSender, $headerSender) && mail($toSC, $subjectSC, $messageSC, $headerSC)) && !isset($inRecipeId)) {
        //  display positive response
        ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <title>The Sous Chef - Success</title>
                <link href="../../images/personalMonogramLogo.svg" rel="icon" type="image/x-icon">
                <link crossorigin="anonymous"
                      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
                      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                      rel="stylesheet">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
                      rel="stylesheet">
                <script crossorigin="anonymous"
                        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                <link href="siteCSS/siteStyles.css" rel="stylesheet" type="text/css">

                <style>
                    /*Element Styling Overrides*/
                    footer {
                        position: fixed;
                        bottom: 0;
                        left: 0;
                        right: 0;
                    }
                </style>
            </head>
            <body>
                <div>
                    <header class="position-relative z-1"><h1 class="display-1 m-0 pt-5 ps-3">The Sous Chef</h1>
                    </header>
                    <nav class="navbar navbar-expand-lg bg-warning z-0">
                        <div class="container-fluid justify-content-end">
                            <button aria-controls="navbarNavAltMarkup" aria-expanded="false"
                                    aria-label="Toggle navigation"
                                    class="navbar-toggler" data-bs-target="#navbarNavAltMarkup"
                                    data-bs-toggle="collapse" type="button">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a aria-current="page" class="nav-link active" href="home.php">Home</a>
                                    <a class="nav-link" href="recipes.php">Recipes</a>
                                    <a class="nav-link" href="recipeRequest.php">Request A Recipe</a>
                                    <a href="login.php">
                                        <button class="btn btn-outline-light push-over" type="button">Sign In <i
                                                    class="bi bi-person-badge"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div> <!-- end of header and nav div -->
                <div class="container-fluid my-5">
                    <div class="row flex-column justify-content-end align-content-end mb-5">
                        <div class="col-xs-10 col-sm-9 col-md-8 col-lg-7 col-xl-8 col-xxl-6">
                            <h2 class="display-2">Thank You, Chef!</h2>
                        </div>
                        <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 pe-0 mt-3 mb-4">
                            <img alt="A perfect souffle set elegantly." class="img-cover"
                                 src="sousChefImages/requestSuccessSouffleEdited.jpg">
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-7 col-xl-8 col-xxl-7 d-flex align-self-end">
                            <p class="me-5">
                                Thank you, Chef! Your recipe submission was successfully sent to our chefs. Now, your
                                recipe
                                will be
                                thoughtfully and thoroughly reviewed before a decision is made on whether or not it
                                meets our
                                stringent
                                criteria to be displayed on The Sous Chef&trade;. You should have already received an
                                email from
                                us
                                establishing contact and opening a means of communication through which updates and a
                                final
                                decision will
                                be sent to you. Make sure to check your spam and junk mail just in case! We wouldn't
                                want you to
                                miss a second
                                of this culinary journey!
                            </p>
                        </div>
                    </div> <!-- end of row 1 -->
                </div>
                <footer class="p-4 d-flex justify-content-end align-content-end">
                    <p class="mb-0 copyright">&copy; <?php echo date("Y"); ?> All Rights Reserved, The Sous Chef
                        Inc.</p>
                </footer>
            </body>
        </html>
        <?php
    }
    else {
        //  display negative response
        ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <title>The Sous Chef - Failure</title>
                <link href="../../images/personalMonogramLogo.svg" rel="icon" type="image/x-icon">
                <link crossorigin="anonymous"
                      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
                      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                      rel="stylesheet">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
                      rel="stylesheet">
                <script crossorigin="anonymous"
                        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                <link href="siteCSS/siteStyles.css" rel="stylesheet" type="text/css">

                <style>
                    /*Element Styling Overrides*/
                    footer {
                        position: fixed;
                        bottom: 0;
                        left: 0;
                        right: 0;
                    }
                </style>
            </head>
            <body>
                <div>
                    <header class="position-relative z-1"><h1 class="display-1 m-0 pt-5 ps-3">The Sous Chef</h1>
                    </header>
                    <nav class="navbar navbar-expand-lg bg-warning z-0">
                        <div class="container-fluid justify-content-end">
                            <button aria-controls="navbarNavAltMarkup" aria-expanded="false"
                                    aria-label="Toggle navigation"
                                    class="navbar-toggler" data-bs-target="#navbarNavAltMarkup"
                                    data-bs-toggle="collapse" type="button">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a aria-current="page" class="nav-link active" href="home.php">Home</a>
                                    <a class="nav-link" href="recipes.php">Recipes</a>
                                    <a class="nav-link" href="recipeRequest.php">Request A Recipe</a>
                                    <a href="login.php">
                                        <button class="btn btn-outline-light push-over" type="button">Sign In <i
                                                    class="bi bi-person-badge"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div> <!-- end of header and nav div -->
                <div class="container-fluid my-5">
                    <div class="row flex-column justify-content-end align-content-end mb-5">
                        <div class="col-xs-10 col-sm-9 col-md-8 col-lg-7 col-xl-8 col-xxl-6">
                            <h2 class="display-2">Uh Oh, Chef!</h2>
                        </div>
                        <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 pe-0 mt-3 mb-4">
                            <img alt="A failed souffle set elegantly." class="img-cover"
                                 src="sousChefImages/requestFailureSouffleEdited.jpg">
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-7 col-xl-8 col-xxl-7 d-flex align-self-end">
                            <p class="me-5">
                                Uh oh, Chef! Something went wrong in submitting your recipe. Our team is on the case!
                                Feel free to try again now
                                or wait until later. We apologize for the inconvenience and hope that you will share
                                that recipe with us just as
                                soon as we have done our temp checks and stirred the broth!
                            </p>
                        </div>
                    </div> <!-- end of row 1 -->
                </div>
                <footer class="p-4 d-flex justify-content-end align-content-end">
                    <p class="mb-0 copyright">&copy; <?php echo date("Y"); ?> All Rights Reserved, The Sous Chef
                        Inc.</p>
                </footer>
            </body>
        </html>
        <?php
    }
?>