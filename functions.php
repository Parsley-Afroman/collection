<?php
/**This is a function that takes a database as an object and returns an array based on the search criteria
 *
 * @return array of database entries with an associated values
 */
function getDb(): array {
    $db = new PDO ('mysql:host=db; dbname=sami-collection','root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query =  $db->prepare("SELECT `name`, `designer`, `style`, `year_released`, `image` FROM `items` ORDER BY `id`;");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}
/**This function receives an array from the database selection and outputs a string that will receive styling.
 *
 * @param array $jackets is an array list of the selected criteria from the database query.
 * @return string for each array entry a string is output that will be displayed in HTML.
 */
function jacketMarkup(array $jackets) : string{
    $result = '';
    if (!count($jackets)) {
        $result .= '<div class = "empty">' . 'there aren\'t any database items to present' . '</div>';
    }
        foreach ($jackets as $jacket) {
            $result .= '<div class="item">';
                if (!$jacket['image']) {
                    $result .= '<div class = "empty">' . 'there is no image to present at this time' . '</div>';
                } else {
                    $result .= '<div class = "image_wrap"><img class= "image" src="' . $jacket['image'] . '" alt="garment image"></div>';
                }
                if (!$jacket['name']) {
                    $result .= '<div class = "empty">' . 'there isn\'t a name for this item' . '</div>';
                }
                $result .= '<div class = "name">' . $jacket['name'] . '</div>';
                if (!$jacket['designer']) {
                    $result .= '<div class = "empty">' . 'the designer of this garment is not yet known' . '</div>';
                }
                $result .= '<div class="designer">' . $jacket['designer'] . '</div>';
                if (!$jacket['style']) {
                    $result .= '<div class = "empty">' . 'the style of this garment is not yet known' . '</div>';
                }
                $result .= '<div class = "style">' . $jacket['style'] . '</div>';
            if (!isset($jacket['year_released'])){
                $result .= '<div class = "empty">' . 'no year' . '</div>';
            } else {
                if($jacket['year_released'] <= date("Y")) {
                    $result .= '<div class="year">' . $jacket['year_released'] . '</div>' . '</div>';
                } else {
                    $result .= '<div class = "empty">' . 'select a year that isn\'t in the future' . '</div>';
                }
            }
        }
    return $result;
}
?>