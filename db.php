<?php
function getDb(): object {
    return new PDO ('mysql:host=db; dbname=sami-collection','root', 'password');
}
function getItems(object $db): array {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query =  $db->prepare("SELECT `name`, `designer`, `style`, `year_released`, `image` FROM `items` ORDER BY `id`;");
    $query->execute();
    return $query->fetchAll();
}
function arraySplit(array $items) : string{
    $result = '';
    foreach ($items as $item){
        $result .= '<div><img src="'. $item['image'] . '" alt="garment image" width="500" height="500"></div>';
        $result .= '<div>' . $item['name'] . '</div>';
        $result .= '<div>' . $item['designer'] . '</div>';
        $result .= '<div>' . $item['style'] . '</div>';
        if($item['year_released'] <= date("Y")) {
            $result .= '<div>' . $item['year_released'] . '</div>';
        } else { $result = 'select a year that isn\'t in the future';}
    }
    return $result;
}


$db = getDb();
$array = getItems($db);
$items = arraySplit($array);
?>