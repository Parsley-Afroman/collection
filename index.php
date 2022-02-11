<?php
require_once 'functions.php';
$db = getDb();
$array = getAllJackets($db);
$items = jacketMarkup($array);
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
        <footer>
        <form name="add_jacket" method="post" action="directory.php">
            <input name="jacket_name" type="text" placeholder="Jacket Name"> . <br>
            <input name="jacket_designer" type="text" placeholder="Jacket Designer"> . <br>
            <input name="jacket_style" type="text" placeholder="Jacket Style"> . <br>
            <input name="jacket_year" type="number" placeholder="Jacket Year"> . <br>
            <input type="submit" value="Add Jacket">
        </form>
    </footer>
</body>
</html>
