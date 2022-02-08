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
        $result .= '<div class = "empty">' . 'there aren\'t any database items to present' . '</div>';
    } else {
        foreach ($items as $item) {
            $result .= '<div class="item">';
            if (!isset($item['image'])){
                $result .= '<div class = "empty">' . 'no image' . '</div>';
            } else {
                if (!$item['image']) {
                    $result .= '<div> class = "empty"' . 'there is no image to present at this time' . '</div>';
                } else {
                    $result .= '<div class = "image_wrap"><img class= "image" src="'. $item['image'] . '" alt="garment image"></div>';
                }
            }
            if (!isset($item['name'])){
                $result .= '<div class = "empty">' . 'no name' . '</div>';
            } else {
                if (!$item['name']) {
                    $result .= '<div class = "empty">' . 'there isn\'t a name for this item' . '</div>';
                } else {
                    $result .= '<div class = "name">' . $item['name'] . '</div>';
                }
            }
            if (!isset($item['designer'])){
                $result .= '<div class = "empty">' . 'no designer' . '</div>';
            } else {
                if (!$item['designer']) {
                    $result .= '<div class = "empty">' . 'the designer of this garment is not yet known' . '</div>';
                } else {
                    $result .= '<div class="designer">' . $item['designer'] . '</div>';
                }
            }
            if (!isset($item['style'])){
                $result .= '<div class = "empty">' . 'no style' . '</div>';
            } else {
                if (!$item['style']) {
                    $result .= '<div class = "empty">' . 'the style of this garment is not yet known' . '</div>';
                } else {
                    $result .= '<div class = "style">' . $item['style'] . '</div>';
                }
            }
            if (!isset($item['year_released'])){
                $result .= '<div class = "empty">' . 'no year' . '</div>';
            } else {
                if($item['year_released'] <= date("Y")) {
                    $result .= '<div class="year">' . $item['year_released'] . '</div>' . '</div>';
                } else {
                    $result .= '<div class = "empty">' . 'select a year that isn\'t in the future' . '</div>';
                }
            }
        }
    }
    return $result;
}


?>