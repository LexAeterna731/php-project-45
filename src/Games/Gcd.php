<?php

namespace Brain\Games\Games\Gcd;

use function Brain\Games\Engine\startGame;

function startGcd()
{
    $welcomeMessage = "Find the greatest common divisor of given numbers.";

    $questionAnswerPairs = [];
    for ($i = 0, $numberOfQuestions = 3; $i < $numberOfQuestions; $i += 1) {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        if ($firstNumber > $secondNumber) {
            $dividend = $firstNumber;
            $divisor = $secondNumber;
        } else {
            $dividend = $secondNumber;
            $divisor = $firstNumber;
        }

        do {
            $remainder = $dividend % $divisor;
            $dividend = $divisor;
            $divisor = $remainder;
        } while ($divisor > 0);

        $question = "{$firstNumber} {$secondNumber}";
        $answer = (string) $dividend;
        $questionAnswerPairs[] = [$question, $answer];
    }

    startGame($welcomeMessage, $questionAnswerPairs);
}
