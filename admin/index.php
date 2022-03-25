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
    <h2>Enter password:</h2>
    <form action="formforward.php" method="post" enctype="multipart/form-data">
        <input type="password" name="password">
        <input type="submit">
    </form>
    <br><br>
    <a href="../index.php">Go back to blog</a>
</body>

</html>