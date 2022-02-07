<?php
function getDb(): object {
    return new PDO ('mysql:host=db; dbname=sami-collection','root', 'password');
}
function getItems(object $db): array {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query =  $db->prepare("SELECT `name`, `designer`, `style`, `year_released` FROM `items` ORDER BY `id`;");
    $query->execute();
    return $query->fetchAll();
}
$db = getDb();
$items = getItems($db);
?>