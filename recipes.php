<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>The Sous Chef - Recipes</title>
        <link href="../../images/personalMonogramLogo.svg" rel="icon" type="image/x-icon">
        <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
              rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <script crossorigin="anonymous"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="dataHandling.js"></script>
        <link href="siteCSS/siteStyles.css" rel="stylesheet" type="text/css">
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
            <div class="row flex-column justify-content-end align-content-end mb-5">
                <div class="col-xs-10 col-sm-9 col-md-8 col-lg-7 col-xl-5 col-xxl-4">
                    <h2 class="display-2">Top Recipes</h2>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 pe-0 mt-3 mb-4">
                    <img alt="A long table arrayed with food." class="img-cover"
                         src="sousChefImages/familyRecipesEdited.jpg">
                </div>
                <div class="col-sm-8 col-md-8 col-lg-7 col-xl-5 col-xxl-4 d-flex align-self-end">
                    <p class="me-5">
                        At The Sous Chef&trade;, our team of culinary-trained chefs tirelessly search for and review the
                        best
                        recipes from restaurants and kitchens like yours from around the globe. Here you will find those
                        recipes that our chefs found the crème de la crème!
                    </p>
                </div>
            </div> <!-- end of row 1 -->
            <div class="row justify-content-center mb-5">
                <div class="carousel slide" id="carouselExampleCaptions">
                    <div class="carousel-indicators">
                        <button aria-current="true" aria-label="Slide 1" class="active"
                                data-bs-slide-to="0" data-bs-target="#carouselExampleCaptions" type="button"></button>
                        <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleCaptions"
                                type="button"></button>
                        <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleCaptions"
                                type="button"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" onclick="callDatabase(48)">
                            <img alt="Crab cakes on a gilded golden platter." class="d-block w-100"
                                 src="sousChefImages/crabCakesEdited.jpg">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h5">Crab Cakes</h5>
                            </div>
                        </div>
                        <div class="carousel-item" onclick="callDatabase(50)">
                            <img alt="Eggs Benedict on a plate in a bright kitchen." class="d-block w-100"
                                 src="sousChefImages/eggsBenedictEdited.jpg">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h5">Eggs Benedict</h5>
                            </div>
                        </div>
                        <div class="carousel-item" onclick="callDatabase(51)">
                            <img alt="Steak sirloin with seasoning and herbs on a wood block." class="d-block w-100"
                                 src="sousChefImages/steakSirloinEdited.jpg">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h5">Steak Sirloin</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleCaptions"
                            type="button">
                        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleCaptions"
                            type="button">
                        <span aria-hidden="true" class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div> <!-- end of row 2 -->
            <div class="row bg-success conform-row mb-5 py-5 justify-content-evenly to-column">
                <div class="col-xs-10 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 ps-0">
                    <div class="card">
                        <img alt="Crab cakes on a gilded golden platter." class="card-img-top"
                             src="sousChefImages/crabCakes.jpg">
                        <div class="card-body">
                            <h5 class="card-title display-5 mb-4">Crab Cakes</h5>
                            <button class="btn btn-secondary" onclick="callDatabase(48)">View Recipe</button>
                        </div>
                    </div> <!-- end card div -->
                </div>
                <div class="col-xs-10 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 align-cards">
                    <div class="card">
                        <img alt="Eggs Benedict on a plate in a bright kitchen." class="card-img-top"
                             src="sousChefImages/eggsBenedict.jpg">
                        <div class="card-body">
                            <h5 class="card-title display-5 mb-4">Eggs Benedict</h5>
                            <button class="btn btn-secondary" onclick="callDatabase(50)">View Recipe</button>
                        </div>
                    </div> <!-- end card div -->
                </div>
            </div> <!-- end of row 3 -->
            <div class="row flex-column justify-content-end">
                <div class="row bg-success conform-row mb-5 py-5 justify-content-evenly conform-row-right to-column">
                    <div class="col-xs-10 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 ps-0">
                        <div class="card">
                            <img alt="Steak sirloin with seasoning and herbs on a wood block." class="card-img-top"
                                 src="sousChefImages/steakSirloin.jpg">
                            <div class="card-body">
                                <h5 class="card-title display-5 mb-4">Steak Sirloin</h5>
                                <button class="btn btn-secondary" onclick="callDatabase(51)">View Recipe</button>
                            </div>
                        </div> <!-- end card div -->
                    </div>
                    <div class="col-xs-10 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 align-cards">
                        <div class="card">
                            <img alt="Traditional dumplings served in an antique Japanese bowl." class="card-img-top"
                                 src="sousChefImages/traditionalDumplings.jpg">
                            <div class="card-body">
                                <h5 class="card-title display-5 mb-4">Traditional Dumplings</h5>
                                <button class="btn btn-secondary" onclick="callDatabase(52)">View Recipe</button>
                            </div>
                        </div> <!-- end card div -->
                    </div>
                </div> <!-- end of inner row 1 -->
            </div> <!-- end of row 4 -->
            <div class="row flex-column bg-success conform-row">
                <div class="col-sm-11 col-md-10 col-lg-9 col-xl-9 col-xxl-9 pt-5">
                    <h4 class="display-4 position-relative z-1 push-down">Recipe Archive</h4>
                </div>
                <div class="col-sm-11 col-md-10 col-lg-9 col-xl-9 col-xxl-9 ps-0 position-relative z-0">
                    <img alt="Sushi on arranged fancifully on a wooden platter."
                         class="img-fluid" src="sousChefImages/assortedArrangedHerbsSpicesEdited.jpg">
                    <a href="archive.php">
                        <button class="btn btn-outline-light z-1 position-absolute btnImg" type="button">View All
                            Recipes <i class="bi bi-journal-bookmark-fill"></i></button>
                    </a>
                </div>
            </div> <!-- end of row 5 -->
        </div> <!-- end of container-fluid -->
        <footer class="p-4 d-flex justify-content-end align-content-end">
            <p class="mb-0 copyright">&copy; <?php echo date("Y"); ?> All Rights Reserved, The Sous Chef Inc.</p>
        </footer>
    </body>
</html>