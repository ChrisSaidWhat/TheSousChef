<?php
    session_start();

    $display = "";
    $errMsg = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inUsername = $_POST['inUsername'];
        $inPassword = $_POST['inPassword'];

        try {
            require "dbConnect.php";

            $sql = "SELECT COUNT(*) username, password FROM user_auth WHERE username = :user AND password = :password";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':user', $inUsername);
            $stmt->bindParam(':password', $inPassword);

            $stmt->execute();

            $rowCount = $stmt->fetchColumn();

            if ($rowCount == 1) {
                $display = "admin";
                $_SESSION["adminStatus"] = "admin";
            }
            else {
                $display = "error";
                $errMsg = "Invalid Username or Password";
            }
        }
        catch (PDOException $e) {
            $message = "There has been a problem. The system administrator has been contacted. Please try again later.";

            error_log($e->getMessage());
            error_log($e->getLine());
            error_log(var_dump(debug_backtrace()));

            echo "<h1>$message</h1>";
        }
    }
?>
<?php
    if ($display == "admin") {
        //  admin content
        ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <title>The Sous Chef - Admin</title>
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
                    body {
                        height: 100dvh !important;
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
                    <div aria-label="Basic outlined example" class="btn-group align-self-center me-sm-0 me-md-5"
                         role="group">
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
            </body>
        </html>

        <?php
    }
    else {
        // display form and error message

        ?>

        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <title>The Sous Chef - Login</title>
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
                    /*Override Site Styling*/
                    img {
                        height: 100vh !important;
                        object-fit: cover;
                    }

                    form {
                        background-color: transparent;
                    }
                </style>
            </head>
            <body>
                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ps-0 no-pad-sm">
                            <img alt="Two chefs looking over a dish they are preparing." class="img-fluid"
                                 src="sousChefImages/loginChefs.jpg">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-flex flex-column justify-content-center align-content-center pt-sm-3 pt-md-0 mb-sm-3 mb-md-0">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <svg class="size-xl z-0 position-relative svg-effect">
                                        <rect class="size-xl"/>
                                    </svg>
                                    <h2 class="display-2 z-1 position-relative mb-0">Log In</h2>
                                </div>
                            </div>
                            <div class="d-flex align-content-center justify-content-center">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="w-50"
                                      method="post">
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input aria-describedby="username" class="form-control" id="username"
                                               type="text" name="inUsername">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input class="form-control" id="password" type="password" name="inPassword">
                                    </div>
                                    <div>
                                        <button class="btn btn-success" type="submit">Log In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end of row 1 -->
                    <div class="position-absolute back-widget">
                        <a href="home.php"><i class="bi bi-chevron-bar-left"></i></a>
                    </div> <!-- end back widget -->
                </div> <!-- end of container -->
            </body>
        </html>
        <?php
    }
?>