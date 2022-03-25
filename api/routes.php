<?php

    $GLOBALS['entries'] = [];

    include 'connector.php';

    if (isset($_GET['action'])) { # check for endpoints and call according function
        if (function_exists($_GET['action'])) {
            call_user_func($_GET['action']);
        }
    } else {
        getAll(); # show initially
    }

    function getAll() {
        $conn = getConnection();
        $stmt = $conn->prepare('select * from entries order by id desc');
        $stmt->execute();
        $stmt->bind_result($id, $date, $title, $text, $images);
        while($stmt->fetch()) {
            array_push($GLOBALS['entries'], [
                "id" => $id,
                "date" => $date,
                "title" => $title,
                "text" => $text,
                "images" => $images
            ]);
        }
    }
?>