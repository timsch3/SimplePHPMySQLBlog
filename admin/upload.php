<?php
    # get last ID for image file names
    include '../api/connector.php';
    $conn = getConnection();
    $stmt = $conn->prepare('select * from entries order by id desc limit 1');
    $stmt->execute();
    $stmt->bind_result($lastID, $date, $title, $text, $images);
    $stmt->fetch();
    # upload and rename images
    if (isset($_FILES['imagesToUpload'])) {
        $filesCount = count(array_filter($_FILES['imagesToUpload']['name']));
        for ($i = 0; $i < $filesCount; $i++) {
            if ($_FILES['imagesToUpload']['name'][$i] !== "") {
                move_uploaded_file($_FILES['imagesToUpload']['tmp_name'][$i], 
                '../img/' . ($lastID + 1) . '-' . ($i + 1) . ".jpg");
            }
        }
    }
    $stmt->close();
?>