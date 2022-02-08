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
    if (COUNT($items) <= 0) {
        echo 'there aren\'t any database items to present';
    } else {
        foreach ($items as $item) {
            if (!$item['image']) {
                $result .= 'there is no image to present at this time';
            } else {
                $result .= '<div><img src="'. $item['image'] . '" alt="garment image" width="500" height="500"></div>';
            }
            if (!$item['name']) {
                $result .= 'there isn\'t a name for this item';
            } else {
                $result .= '<div>' . $item['name'] . '</div>';
            }
            if (!$item['designer']) {
                echo 'the designer of this garment is not yet known';
            } else {
                $result .= '<div>' . $item['designer'] . '</div>';
            }
            if (!$item['style']) {
                echo 'the style of this garment is not yet known';
            } else {
                $result .= '<div>' . $item['style'] . '</div>';
            }
            if($item['year_released'] <= date("Y")) {
                $result .= '<div>' . $item['year_released'] . '</div>';
            } else { $result .= 'select a year that isn\'t in the future';}
        }
    }
    return $result;
}


//$db = getDb();
//$array = getItems($db);
//$items = arraySplit($array);
?>