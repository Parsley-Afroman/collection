<?php
require_once 'db.php';

foreach ($items as $item){
    echo   '<pre>';
    var_dump($item);
    echo   '/<pre>';
}