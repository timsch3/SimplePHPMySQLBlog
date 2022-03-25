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
    <h2>Create a new blog entry</h2>
    <form action="create.php" method="post" enctype="multipart/form-data">
        Title:<br>
        <input type="text" name="title" id="title" maxlength="255" size="50" required> <br><br>
        Text:<br>
        <textarea name="text" id="text" cols="50" rows="10"></textarea><br><br>
        Select image(s) to upload:<br>
        <input type="file" name="imagesToUpload[]" multiple><br><br>
        <input type="submit" value="Create blog post" name="submit"> <br>
    </form>
    <br><br>
    <a href="../index.php">Go back to blog</a>
</body>

</html>