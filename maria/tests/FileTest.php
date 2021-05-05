<?php
namespace TDD\Test;  // specify source - see composer.json autoload-dev

// declare(strict_types=1); 
/*  If enabled type juggling must be reported as a fatal error 
    e.g. if a number for a calculation given as a string will throw error.
    Can also use error_reporting() to set level of errors
    https://www.php.net/manual/en/function.error-reporting.php */

use PHPUnit\Framework\TestCase;     // import TestCase Framework

use TDD\Calculation;                // specify class to be tested

class FileTest extends TestCase {

   public function testSum() {

       $obj = new Calculation(); 

       $input = [0, 2, 5, 8];
       $output = $obj->getSum($input);
       $this->assertEquals( 15, $output, 
           'When summing the total should equal 15' 
       );

       $input = [0, 2, 5, 8, 10];
       $output = $obj->getSum($input);
       $this->assertEquals( 25, $output, 
           'When summing the total should equal 20' 
       );
   }

   public function testAgeCalc() {
       $obj = new Calculation(); 
       $output = $obj->getAge(2021, 1987);
       $this->assertEquals(34, $output,
           'Wrong age calculated, expected: 34'   
       );
   }

   public function testAverageCalc() {

        $obj = new Calculation(); 
        $input = [2, 10, 1, 15];
        $output = $obj->getAverage($input);
        $this->assertEquals( 7, $output, 
            'The Average should be 7' 
        );
    }
}