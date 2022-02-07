<?php
$db = new PDO ('mysql:host=db; dbname=sami-collection','root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query =  $db->prepare("SELECT `name`, `designer`, `style`, `year_released` FROM `items` ORDER BY `id`;");
$query->execute();
$results = $query->fetchAll();
?>