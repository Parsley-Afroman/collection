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
    if (!count($items)) {
        $result .= '<div>' . 'there aren\'t any database items to present' . '<div>';
    } else {
        foreach ($items as $item) {
            if (!isset($item['image'])){
                $result .= '<div>' . 'no image' . '<div>';
            } else {
                if (!$item['image']) {
                    $result .= '<div>' . 'there is no image to present at this time' . '<div>';
                } else {
                    $result .= '<div><img src="'. $item['image'] . '" alt="garment image" width="500" height="500"></div>';
                }
            }
            if (!isset($item['name'])){
                $result .= '<div>' . 'no name' . '<div>';
            } else {
                if (!$item['name']) {
                    $result .= '<div>' . 'there isn\'t a name for this item' . '<div>';
                } else {
                    $result .= '<div>' . $item['name'] . '</div>';
                }
            }
            if (!isset($item['designer'])){
                $result .= '<div>' . 'no designer' . '<div>';
            } else {
                if (!$item['designer']) {
                    $result .= '<div>' . 'the designer of this garment is not yet known' . '<div>';
                } else {
                    $result .= '<div>' . $item['designer'] . '</div>';
                }
            }
            if (!isset($item['style'])){
                $result .= '<div>' . 'no style' . '<div>';
            } else {
                if (!$item['style']) {
                    $result .= '<div>' . 'the style of this garment is not yet known' . '<div>';
                } else {
                    $result .= '<div>' . $item['style'] . '</div>';
                }
            }
            if (!isset($item['year_released'])){
                $result .= '<div>' . 'no year' . '<div>';
            } else {
                if($item['year_released'] <= date("Y")) {
                    $result .= '<div>' . $item['year_released'] . '</div>';
                } else {
                    $result .= '<div>' . 'select a year that isn\'t in the future' . '<div>';
                }
            }
        }
    }
    return $result;
}


?>