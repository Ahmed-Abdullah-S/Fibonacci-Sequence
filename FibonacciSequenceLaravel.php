<?php

use Illuminate\Support\Facades\Route;

// Laravel Route to generate Fibonacci sequence
Route::get('/fibonacci/{length}', function ($length) {
    return generateFibonacci($length);
});

function generateFibonacci($length)
{
    $sequence = [0, 1];

    // Iteratively generate the Fibonacci sequence
    for ($i = 2; $i < $length; $i++) {
        $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
    }

    return $sequence;
}

// Example URL: /fibonacci/10
// Output: [0, 1, 1, 2, 3, 5, 8, 13, 21, 34]
