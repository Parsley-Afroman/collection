<?php
if (!$_POST['jacket_name'] && !$_POST['jacket_designer'] && !$_POST['jacket_style'] && !$_POST['jacket_year']){
    header('Location: index.php');
} elseif (!$_POST['jacket_designer'] && !$_POST['jacket_style']) {
    header('Location: index.php');
} else {
    $jacket_name = $_POST['jacket_name'];
    $jacket_designer = $_POST['jacket_designer'];
    $jacket_style = $_POST['jacket_style'];
    $jacket_year = $_POST['jacket_year'];
    $db = new PDO('mysql:host=db; dbname=sami-collection','root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("INSERT INTO `items` (`name`, `designer`, `style`, `year_released`) VALUES (:name, :designer, :style, :year);");
    $query->bindParam(':name', $jacket_name);
    $query->bindParam(':designer', $jacket_designer);
    $query->bindParam(':style', $jacket_style);
    $query->bindParam(':year', $jacket_year);
    $query->execute();
}
// I need to filter the input before passing into the above to be stored on the database -> see filter_var()