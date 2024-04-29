<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>The Sous Chef - Recipe Archive</title>
        <link href="../../images/personalMonogramLogo.svg" rel="icon" type="image/x-icon">
        <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
              rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <script crossorigin="anonymous"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="dataHandling.js"></script>
        <script src="dynamicPresentation.js"></script>
        <link href="siteCSS/siteStyles.css" rel="stylesheet" type="text/css">

        <script>
            function pageSetup() {
                retrieveIds(callDatabaseArchive);
                populateArchive();
            }
        </script>
    </head>
    <body onload="pageSetup()">
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
        <div class="container-fluid my-5" id="contentLocation">
            <div class="row flex-column justify-content-end align-content-end mb-5">
                <div class="col-xs-10 col-sm-9 col-md-8 col-lg-7 col-xl-5 col-xxl-4">
                    <h2 class="display-2">Recipe Archive</h2>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 pe-0 mt-3 mb-4">
                    <img alt="A long table arrayed with food." class="img-cover"
                         src="sousChefImages/recipeArchiveEdited.jpg">
                </div>
                <div class="col-sm-8 col-md-8 col-lg-7 col-xl-5 col-xxl-4 d-flex align-self-end">
                    <p class="me-5">
                        At The Sous Chef&trade;, our team of culinary-trained chefs tirelessly search for and review the
                        best
                        recipes from restaurants and kitchens like yours from around the globe. Here you will find all
                        the
                        varied and wonderful recipes that our chefs have lovingly gathered over the years. Bon appétit!
                    </p>
                </div>
            </div> <!-- end of row 1 -->
            <template id="leftTemplate">
                <div class="row bg-success conform-row mb-5 py-5 justify-content-evenly to-column">
                    <div class="col-xs-10 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 ps-0">
                        <div class="card" id="leftCard1">
                            <img alt="" class="card-img-top"
                                 src="" id="leftCard1Img">
                            <div class="card-body">
                                <h5 class="card-title display-5 mb-4" id="leftCard1Title"></h5>
                                <button class="btn btn-secondary" onclick="" id="leftCard1Btn"></button>
                            </div>
                        </div> <!-- end card div -->
                    </div>
                    <div class="col-xs-10 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 align-cards">
                        <div class="card" id="leftCard2">
                            <img alt="" class="card-img-top"
                                 src="" id="leftCard2Img">
                            <div class="card-body">
                                <h5 class="card-title display-5 mb-4" id="leftCard2Title"></h5>
                                <button class="btn btn-secondary" onclick="callDatabase()" id="leftCard2Btn"></button>
                            </div>
                        </div> <!-- end card div -->
                    </div>
                </div> <!-- end of left row -->
            </template>

            <template id="rightTemplate">
                <div class="row flex-column justify-content-end">
                    <div class="row bg-success conform-row mb-5 py-5 justify-content-evenly conform-row-right to-column">
                        <div class="col-xs-10 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 ps-0">
                            <div class="card" id="rightCard1">
                                <img alt="" class="card-img-top"
                                     src="" id="rightCard1Img">
                                <div class="card-body">
                                    <h5 class="card-title display-5 mb-4" id="rightCard1Title"></h5>
                                    <button class="btn btn-secondary" onclick="callDatabase()" id="rightCard1Btn"></button>
                                </div>
                            </div> <!-- end card div -->
                        </div>
                        <div class="col-xs-10 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 align-cards">
                            <div class="card" id="rightCard2">
                                <img alt="" class="card-img-top"
                                     src="" id="rightCard2Img">
                                <div class="card-body">
                                    <h5 class="card-title display-5 mb-4" id="rightCard2Title"></h5>
                                    <button class="btn btn-secondary" onclick="callDatabase()" id="rightCard2Btn"></button>
                                </div>
                            </div> <!-- end card div -->
                        </div>
                    </div> <!-- end of inner row 1 -->
                </div> <!-- end of right row -->
            </template>
        </div> <!-- end of container-fluid -->
        <footer class="p-4 d-flex justify-content-end align-content-end">
            <p class="mb-0 copyright">&copy; <?php echo date("Y"); ?> All Rights Reserved, The Sous Chef Inc.</p>
        </footer>
    </body>
</html>