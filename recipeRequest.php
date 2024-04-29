<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>The Sous Chef - Recipe Request</title>
        <link href="../../images/personalMonogramLogo.svg" rel="icon" type="image/x-icon">
        <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
              rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <script crossorigin="anonymous"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="dynamicPresentation.js"></script>
        <script src="Request.js"></script>
        <script src="dataHandling.js"></script>
        <link href="siteCSS/siteStyles.css" rel="stylesheet" type="text/css">

        <style>
            /*Custom CSS Styling*/
            .info {
                display: none;
            }

            /*Bootstrap Styling Override*/
            @media screen and (max-width: 576px) {
                .adjust-sm-padding {
                    padding-right: 0;
                }

                .row {
                    margin-right: 0;
                }
            }

        </style>
    </head>
    <body>
        <div>
            <header class="position-relative z-1"><h1 class="display-1 m-0 pt-5 ps-3">The Sous Chef</h1>
            </header>
            <nav class="navbar navbar-expand-lg bg-warning z-0">
                <div class="container-fluid justify-content-end">
                    <button aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"
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

            <div class="row flex-column justify-content-end align-content-end mb-5">
                <div class="col-xs-10 col-sm-9 col-md-8 col-lg-7 col-xl-7 col-xxl-6">
                    <h2 class="display-2">Request A Recipe</h2>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 pe-0 mt-3 mb-4">
                    <img alt="An old, weathered envelope with a red wax seal." class="img-cover"
                         src="sousChefImages/oldTimeRequestEdited.jpg">
                </div>
                <div class="col-sm-8 col-md-8 col-lg-7 col-xl-5 col-xxl-5 d-flex align-self-end">
                    <p class="me-5">
                        At The Sous Chef&trade;, our team of culinary-trained chefs tirelessly search for and review the
                        best
                        recipes from restaurants and kitchens like yours from around the globe. Here you have the
                        opportunity
                        to play a pivotal role in that process. We encourage you to scour your family recipes and
                        favorite food memories
                        to share with our community of culinary creatives!
                    </p>
                </div>
            </div> <!-- end of row 1 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 adjust-sm-padding">
                    <form class="container justify-content-center py-5 px-0" method="post" action="requestResponse.php"
                          id="formSubmit">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-center mb-5">
                            <div>
                                <svg class="size-lg z-0 position-relative svg-effect">
                                    <rect class="size-lg"/>
                                </svg>
                                <h3 class="display-3 z-1 position-relative mb-0"><span class="salt-r">R</span>ecipe
                                    <span class="salt-i">I</span>nformatio<span class="salt-n">n</span></h3>
                            </div>
                        </div> <!-- end of form heading -->
                        <div class="row bg-success conform-row mb-5 py-5 justify-content-evenly conform-row-right to-column">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="info">
                                    <label for="recipeId">Recipe Id: </label>
                                    <input type="text" id="recipeId" name="inRecipeId">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="recipeTitle">Recipe Title: </span>
                                    <input aria-describedby="recipeTitle" aria-label="Recipe Title" class="form-control"
                                           placeholder="Recipe Title" type="text" name="inRecipeTitle" required>
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
                                        <option value="half">Half</option>
                                        <option value="single">Single</option>
                                        <option value="double">Double</option>
                                        <option value="triple">Triple</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="recipeTimeLabel">Recipe Time: </span>
                                    <input aria-describedby="recipeTimeLabel" aria-label="Recipe Time"
                                           class="form-control"
                                           placeholder="00:00:00"
                                           type="text" name="inRecipeTime" required>
                                    <span class="input-group-text" id="recipeTimeImg"><i class="bi bi-clock"></i></span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="recipeDiffLabel">Recipe Difficulty: </span>
                                    <input aria-describedby="recipeDiffLabel" aria-label="Recipe Difficulty"
                                           class="form-control"
                                           max="5"
                                           min="1" placeholder="#" type="number" name="inRecipeDifficulty" required>
                                    <span class="input-group-text" id="recipeDiffMax">/5</span>
                                    <span class="input-group-text" id="recipeDiffImg"><i class="bi bi-star"></i></span>
                                </div>
                            </div>
                        </div> <!-- end of inner row 1 -->
                        <div class="row bg-success conform-row ms-0 mb-5 py-5 justify-content-evenly to-column">
                            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8" id="ingredientSetDestination">
                                <div class="ingredient-set">
                                    <div class="input-group mb-3 me-4">
                                        <span class="input-group-text" id="ingredientTitle0">Ingredient Title: </span>
                                        <input aria-describedby="ingredientTitle0" aria-label="Ingredient Title"
                                               class="form-control"
                                               placeholder="Ingredient Title" type="text" id="inIngredientTitle0"
                                               name="inIngredientTitle0" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"
                                              id="ingredientQuantity0">Ingredient Quantity: </span>
                                        <input aria-describedby="ingredientQuantity0" aria-label="Ingredient Quantity"
                                               class="form-control"
                                               placeholder="#"
                                               type="number" id="inIngredientQuantity0" name="inIngredientQuantity0"
                                               required>
                                        <span class="input-group-text"><i
                                                    class="bi bi-receipt"></i></span>
                                    </div>
                                </div> <!-- end of ingredient set -->
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center align-content-center m-auto">
                                <button class="btn btn-outline-light btn-xl" id="addIngredientSet" type="button"
                                        onclick="addIngredient(document.querySelector('#ingredientSetTemplate'), document.querySelector('#ingredientSetDestination'))">
                                    <i class="bi bi-plus-circle"></i>
                                </button>
                            </div>
                        </div> <!-- end of inner row 2 -->
                        <div class="row bg-success conform-row mb-5 py-5 justify-content-evenly conform-row-right to-column">
                            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center align-content-center m-auto">
                                <button class="btn btn-outline-light btn-xl" id="addInstructionSet" type="button"
                                        onclick="addInstruction(document.querySelector('#instructionSetTemplate'), document.querySelector('#instructionSetDestination'))">
                                    <i class="bi bi-plus-circle"></i>
                                </button>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8" id="instructionSetDestination">
                                <div class="instruction-set">
                                    <div class="input-group mb-3 mt-3 me-4">
                                        <span class="input-group-text"
                                              id="instructionHeading0">Instruction Heading: </span>
                                        <input aria-describedby="instructionHeading0" aria-label="Instruction Heading"
                                               class="form-control"
                                               placeholder="Instruction Heading" type="text" id="inInstructionHeading0"
                                               name="inInstructionHeading0" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"
                                              id="instructionBody0">Instruction Body: </span>
                                        <textarea aria-describedby="instructionBody0" aria-label="Instruction Body"
                                                  class="form-control"
                                                  placeholder="Write Directions Here..." id="inInstructionBody0"
                                                  name="inInstructionBody0" required></textarea>
                                    </div>
                                </div> <!-- end of instruction set -->
                            </div>
                        </div> <!-- end of inner row 3 -->
                        <div class="row bg-success conform-row ms-0 py-5 justify-content-evenly to-column">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="ms-4">
                                    <svg class="size-lg z-0 position-relative svg-effect">
                                        <rect class="size-lg"/>
                                    </svg>
                                    <h3 class="display-3 z-1 position-relative mb-0"
                                        style="font-weight: 700 !important;">Yes, Chef!</h3>
                                </div>
                                <p>
                                    You are just about ready to send your recipe on its journey to culinary recognition!
                                    All that's left is for you
                                    to give us your name, email, and any background or story you want us to know about
                                    the recipe. Then you can hit that submit
                                    button and our chefs will eagerly pour over it. We will send you a response
                                    confirming that it is in our chefs' capable hands
                                    once the recipe is successfully submitted. Thank you for taking the time to share
                                    your passion with us! Chef's kiss!
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="nameLabel">Name: </span>
                                    <input aria-describedby="nameLabel" aria-label="Name" class="form-control"
                                           placeholder="Name"
                                           type="text" name="inSenderName" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="emailAddressLabel">Email Address: </span>
                                    <input aria-describedby="emailAddressLabel" aria-label="Email Address"
                                           class="form-control"
                                           placeholder="username@example.com" type="email" name="inSenderEmail"
                                           required>
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text"
                                              id="additionalComments">Additional Comments: </span>
                                    <textarea aria-describedby="additionalComments" aria-label="Additional Comments"
                                              class="form-control"
                                              placeholder="Write Additional Comments Here..." id="senderComments"
                                              name="inSenderComments" required></textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div aria-label="Basic outlined example" class="btn-group" role="group">
                                        <button class="btn btn-outline-light" type="button" name="sub"
                                                onclick="compileRequestObject(ingredientCounter, instructionCounter)">
                                            Submit Recipe
                                        </button>
                                        <button class="btn btn-outline-light" type="reset" onclick="clearPage()">Clear
                                            Fields
                                        </button>
                                    </div>
                                </div>
                                <div class="alert alert-danger alert-dismissible fade hidden mt-3" role="alert"
                                     id="errMsg">
                                    <strong>ERROR!</strong> Problems were detected in the form. Please fix and resubmit.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                            </div>
                        </div> <!-- end of inner row 4 -->
                    </form>
                </div>
            </div> <!-- end of row 2 -->
        </div>
        <footer class="p-4 d-flex justify-content-end align-content-end">
            <p class="mb-0 copyright">&copy; <?php echo date("Y"); ?> All Rights Reserved, The Sous Chef Inc.</p>
        </footer>
    </body>
</html>