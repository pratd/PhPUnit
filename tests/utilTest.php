<?php
use \PHPUnit\Framework\TestCase;

class UtilTest extends TestCase
{ //convert to slug as  required by the project
    public function test_convertToSlug()
    {
        //$this->assertTrue(false);
        $upOneLevel = dirname(__DIR__,1); //directory level
        $directory = $upOneLevel . '/app/Util.php';
        require_once $directory;
        $util = new  Util(); //instantiating the casd
        $output = $util->spaceConverter('Hi im a new url');
        $realOutput = 'Hi-im-a-new-url';
        //testing the assertion
        $this->assertEquals($output, $realOutput, 'Error');
    }


    public function test_convertLower()
    {
        $upOneLevel = dirname(__DIR__,1);
        $directory = $upOneLevel . '/app/Util.php';
        require_once $directory;
        $util = new Util(); //instantiating
        $output = $util->convertLower('Hi im a new url');
        $realOutput = 'hi im a new url';
        //test the assertion
        $this->assertEquals($output, $realOutput, 'actual value not equal to the original');
    }
}