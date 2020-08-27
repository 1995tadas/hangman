<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Word;
use Faker\Generator as Faker;

$factory->define(Word::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'word' => $word,
        'length' => strlen($word)
    ];
});
