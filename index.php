<?php
require_once 'db.php';
foreach ($results as $result){
    echo '<div class="item">';
    echo '<h3>' . $result['name'] . '</h3>';
    echo '<h3>' . $result['designer'] . '</h3>';
    echo '<h3>' . $result['style'] . '</h3>';
    echo '<h3>' . $result['year_released'] . '</h3>';
    echo '</div>' . '<br>';
}