<?php
require '../functions.php';
use PHPUnit\Framework\TestCase;
class dbTest extends TestCase {
    public function testSuccessLoop(){
        $array = [['name' => 'simon', 'designer' => 'versace', 'style' => 'bomber', 'year_released' => 2000, 'image' => 'image.jpg']];
        $expected = '<div class="item"><div class = "image_wrap"><img class= "image" src="image.jpg" alt="garment image"></div><div class = "name">simon</div><div class="designer">versace</div><div class = "style">bomber</div><div class="year">2000</div></div>';
        $inputA = $array;
        $case = arraySplit($inputA);
        $this->assertEquals($expected, $case);
    }
    public function testFailureLoop(){
        $array = [['name' => '', 'designer' => '', 'style' => '', 'year_released' => 2035, 'image' => '']];
        $expected = '<div class="item"><div class = "empty">there is no image to present at this time</div><div class = "empty">there isn\'t a name for this item</div><div class = "empty">the designer of this garment is not yet known</div><div class = "empty">the style of this garment is not yet known</div><div class = "empty">select a year that isn\'t in the future</div>';
        $inputA = $array;
        $case = arraySplit($inputA);
        $this->assertEquals($expected, $case);
    }
    public function testMalfunctionLoop(){
        $array = 'simon versace bomber 2035';
        $inputA = $array;
        $this->expectException(TypeError::class);
        arraySplit($inputA);
    }
    public function testNoContent(){
        $array = [];
        $expected = '<div class = "empty">there aren\'t any database items to present</div>';
        $case = arraySplit($array);
        $this->assertEquals($expected, $case);
    }
}
?>