<?php
require '../db.php';
use PHPUnit\Framework\TestCase;
class dbTest extends TestCase {
    public function testSuccessLoop(){
        $array = [['name' => 'simon', 'designer' => 'versace', 'style' => 'bomber', 'year_released' => 2000, 'image' => 'image.jpg']];
        $expected = '<div><img src="image.jpg" alt="garment image" width="500" height="500"></div><div>simon</div><div>versace</div><div>bomber</div><div>2000</div>';
        $inputA = $array;
        $case = arraySplit($inputA);
        $this->assertEquals($expected, $case);
    }
    public function testFailureLoop(){
        $array = [['name' => '', 'designer' => '', 'style' => '', 'year_released' => 2035, 'image' => '']];
        $expected = '<div>there is no image to present at this time<div><div>there isn\'t a name for this item<div><div>the designer of this garment is not yet known<div><div>the style of this garment is not yet known<div><div>select a year that isn\'t in the future<div>'
        ;
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
        $expected = '<div>there aren\'t any database items to present<div>';
        $case = arraySplit($array);
        $this->assertEquals($expected, $case);
    }
}
?>