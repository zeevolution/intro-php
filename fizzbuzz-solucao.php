<?php

    function fizzbuzz($number) { 

        for($currentNumber = 0; $currentNumber <= $number; $currentNumber++) {
            if ($currentNumber % 3 === 0 && $currentNumber % 5 === 0) {
                echo "fizzbuzz"."<br />";
            } elseif ($currentNumber % 3 === 0) {
                echo "fizz"."<br />";
            } elseif ($currentNumber % 5 === 0) {
                echo "buzz"."<br />";
            } else {
                echo $currentNumber."<br />";
            }
        }
    }

    fizzbuzz(5);
?>