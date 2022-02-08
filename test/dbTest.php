<?php
require '../db.php';
use PHPUnit\Framework\TestCase;
class dbTest extends TestCase {
    public function testSuccessLoop(){
        $array = [['name' => 'simon', 'designer' => 'versace', 'style' => 'bomber', 'year_released' => 2000, 'image' => 'image.jpg']];
        $expected = '<div><img src="image.jpg" alt="garment image"></div><div>simon</div><div>versace</div><div>bomber</div><div>2000</div>';
        $inputA = $array;
        $case = arraySplit($inputA);
        $this->assertEquals($expected, $case);
    }
    public function testFailureLoop(){
        $array = [['name' => 'simon', 'designer' => 'versace', 'style' => 'bomber', 'year_released' => 2035, 'image' => 'image.jpg']];
        $expected = 'select a year that isn\'t in the future';
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
}
?>