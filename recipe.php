<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>The Sous Chef - Recipe</title>
        <link href="../../images/personalMonogramLogo.svg" rel="icon" type="image/x-icon">
        <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
              rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <script crossorigin="anonymous"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="dynamicPresentation.js"></script>
        <link href="siteCSS/siteStyles.css" rel="stylesheet" type="text/css">

        <style>
            /*Custom Styling*/
            .no-btm-border {
                border-bottom: none;
            }

            /*Bootstrap Styling Overrides*/

            @media screen and (max-width: 992px) {
                .form-select {
                    width: unset;
                }
            }
        </style>

    </head>
    <body onload="populateRecipe()">
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
                            <a href="login.php"><button class="btn btn-outline-light push-over" type="button">Sign In <i
                                    class="bi bi-person-badge"></i>
                            </button></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div> <!-- end of header and nav div -->
        <div class="container-fluid my-5" id="contentLocation">
            <template id="firstRowTemplate">
                <div class="row mb-5">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 ps-0">
                        <img class="img-fluid w-50 ps-0" alt="" src="" id="recipeImage">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column justify-content-center">
                        <div>
                            <div>
                                <svg class="size-xl z-0 position-relative svg-effect">
                                    <rect class="size-xl"/>
                                </svg>
                                <h2 class="recipe-title z-1 position-relative mb-0" id="recipeTitle"></h2>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-end recipe-controls">
                            <div class="form-floating me-3">
                                <select aria-label="Floating label select example" class="form-select" id="servingSize" onchange="updateIngredientQuantities()">
                                    <option value="half" id="halfServing">Half</option>
                                    <option value="single" id="singleServing">Single</option>
                                    <option value="double" id="doubleServing">Double</option>
                                    <option value="triple" id="tripleServing">Triple</option>
                                </select>
                                <label for="servingSize">Serving Size</label>
                            </div>
                            <div class="input-group ig-sm me-3">
                                <input aria-describedby="basic-addon1" aria-label="Recipe Time" class="form-control"
                                       placeholder="00:00:00"
                                       type="text" readonly id="recipeTime">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-clock"></i></span>
                            </div>
                            <div class="input-group ig-sm">
                                <input aria-describedby="basic-addon2" aria-label="Recipe Time" class="form-control"
                                       placeholder="3/5"
                                       type="text" readonly id="recipeDifficulty">
                                <span class="input-group-text" id="basic-addon2"><i class="bi bi-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row 1-->
            </template>

            <template id="secondRowTemplate">
                <div class="row">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button aria-controls="flush-collapseOne" aria-expanded="false" class="accordion-button collapsed"
                                        data-bs-target="#flush-collapseOne" data-bs-toggle="collapse"
                                        type="button">
                                    <div>
                                        <div>
                                            <svg class="size-lg z-0 position-relative svg-effect">
                                                <rect class="size-lg"/>
                                            </svg>
                                            <h3 class="display-3 z-1 position-relative mb-0"><span class="salt-i">I</span>ngredient<span
                                                        class="salt-s">s</span></h3>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample"
                                 id="flush-collapseOne">
                                <div class="accordion-body row" id="ingredientLocation">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" id="ingredientContainer1">

                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" id="ingredientContainer2">

                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" id="ingredientContainer3">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button aria-controls="flush-collapseTwo" aria-expanded="false" class="accordion-button collapsed"
                                        data-bs-target="#flush-collapseTwo" data-bs-toggle="collapse"
                                        type="button">
                                    <div>
                                        <div>
                                            <svg class="size-lg z-0 position-relative svg-effect">
                                                <rect class="size-lg"/>
                                            </svg>
                                            <h3 class="display-3 z-1 position-relative mb-0"><span class="salt-i">I</span>nstruction<span
                                                        class="salt-s">s</span></h3>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample"
                                 id="flush-collapseTwo">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush" id="instructionLocation">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row 2 -->
            </template>

            <template id="ingredientContainerTemplate">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

                </div>
            </template>

            <template id="ingredientItemTemplate">
                <div class="d-flex align-items-baseline ingredient ingredient-effect">
                    <i class="bi bi-receipt me-2"></i>
                    <p></p>
                    <span class="badge bg-warning ms-2"></span>
                </div>
            </template>

            <template id="instructionItemTemplate">
                <li class="list-group-item"></li>
                <p class="list-group-item no-btm-border"></p>
            </template>
        </div>
        <footer class="p-4 d-flex justify-content-end align-content-end">
            <p class="mb-0 copyright">&copy; <?php echo date("Y"); ?> All Rights Reserved, The Sous Chef Inc.</p>
        </footer>
    </body>
</html>