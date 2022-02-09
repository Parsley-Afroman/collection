<?php
require_once 'db.php';
$db = getDb();
$array = getItems($db);
$items = arraySplit($array);
?>
<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link href="normalize.css" type="text/css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Sami's Collection</title>
</header>
<body>
    <main>
        <?php echo $items;
        ?>
    </main>
</body>
</html>
