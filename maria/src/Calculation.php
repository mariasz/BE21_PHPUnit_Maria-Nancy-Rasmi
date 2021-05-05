<?php
namespace TDD;

class Calculation {
   public function getSum(array $numbers = []) {
       return array_sum($numbers);
   }

   public function getAge($current, $birth) {
       return ($current - $birth);
   }

   public function getAverage(array $numbers = []) {
        return array_sum($numbers) / count($numbers);
}
}