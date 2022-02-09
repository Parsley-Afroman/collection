<?php
require_once 'functions.php';
$db = getDb();
$items = jacketMarkup($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link href="normalize.css" type="text/css" rel="stylesheet"/>
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <title>Sami's Collection</title>
</head>
<body>
    <header>
        <h1>Jacket Collection</h1>
    </header>
    <main>
        <?php echo $items;
        ?>
    </main>
</body>
</html>
