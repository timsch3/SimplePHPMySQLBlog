<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <?php include 'admin/data.php' ?>
    <title><?php echo $blogTitle ?></title>
</head>

<body>
    <div id="adminLink"><a href="admin">Admin</a></div>
    <h1><?php echo $blogTitle ?></h1>
    <?php        
        include 'api/routes.php';

        $entries = $GLOBALS['entries'];

        foreach ($entries as $entry) {
            $imagesArr = explode(' | ', $entry['images']);
            $imagesHTML = "";
            
            if ($imagesArr !== null) {
                for($i = 0; $i < count($imagesArr); $i++) {
                    $imagesHTML .= '<a href="img/' . $imagesArr[$i] . '" target="_blank">'
                     . '<img src="img/' . $imagesArr[$i] . '"></a>';
                }
            }

            echo "<div class='entry'>" 
            . "<h2>" . $entry['title'] . "</h2>"
            . "<div class='date'>" . $entry['date'] . "</div class='date'>"
            . "<div id='line'></div>"
            . ($entry['text'] !== null ? 
                "<p>" . $entry['text'] . "</p>" 
                : "")
            . $imagesHTML
        . "</div>";}
    ?>

</body>

</html>