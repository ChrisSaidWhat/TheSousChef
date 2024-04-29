<?php
    try {

        require 'dbConnect.php';

        $sql = "SELECT recipe_id FROM recipe";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_NUM);

        $row = $stmt->fetchAll();

        echo json_encode($row);

    }
    catch (PDOException $e) {
        $errMsg = "There has been a problem. The system administrator has been contacted. Please try again later.";

        error_log($e->getMessage());
        error_log($e->getLine());
        error_log(var_dump(debug_backtrace()));

        echo $errMsg;
    }