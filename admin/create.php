<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <?php include 'data.php' ?>
    <title><?php echo $blogTitle ?> Admin</title>
</head>

<body>
    <h1><?php echo $blogTitle ?> Admin</h1>

    <?php
        # images upload
        include 'upload.php';

        $date = date("Y-m-d G:i");
        $title = $_POST['title'];
        $text = $_POST['text'];

        $mysqlStmt = 'insert into entries (date, title, text';
        if ($filesCount > 0) {
            $mysqlStmt .= ', images) values (' . "\"$date\"" . ', ' 
                . "\"$title\"" . ', ' . "\"$text\"" . ', ' . "\"";
            for ($i = 1; $i <= $filesCount; $i++) {
                if ($i !== $filesCount) {
                    $mysqlStmt .= $lastID + 1 . '-' . $i . '.jpg' . ' | ';
                } else {
                    $mysqlStmt .= $lastID + 1 . '-' . $i . '.jpg' . "\"" . ')';
                }
            }
        } else {
            $mysqlStmt .= ') values (' . "\"$date\"" . ', ' 
            . "\"$title\"" . ', ' . "\"$text\"" . ')';
        }
        
        # insert data and date into database
        $conn = getConnection();
        $stmt = $conn->prepare($mysqlStmt);
        $stmt->execute();
    ?>

    <h2>Entry successfully created!</h2>
    <?php echo "<h3>\"{$title}\"</h3>" ?>
    <br><br>
    <a href="../index.php">Go back to blog</a>
    <a href="../admin/form.php">Create another entry</a>

</body>

</html>