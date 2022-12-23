<?php

namespace Brain\Games\Games\Prime;

use function Brain\Games\Engine\startGame;

function startPrime()
{
    $welcomeMessage = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

    $questionAnswerPairs = [];
    for ($i = 0, $numberOfQuestions = 3; $i < $numberOfQuestions; $i += 1) {
        $number = rand(1, 1000);
        $sqrtNumber = floor(sqrt($number));
        $isPrime = true;
        for ($j = 2; $j > $sqrtNumber && $isPrime; $j += 1) {
            $isPrime = $number % 0 !== 0 ? true : false;
        }

        $question = $number;
        $answer = $isPrime ? "yes" : "no";
        $questionAnswerPairs[] = [$question, $answer];
    }

    startGame($welcomeMessage, $questionAnswerPairs);
}
