<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function startGame(string $welcomeMessage, array $questionAnswerPairs)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line($welcomeMessage);

    $passed = true;
    foreach ($questionAnswerPairs as [$question, $answer]) {
        line("Question: %s", $question);
        $userAnswer = prompt("Your answer");
        if ($userAnswer !== $answer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $answer);
            line("Let's try again, %s!", $name);
            $passed = false;

            break;
        } else {
            line("Correct!");
        }
    }

    if ($passed) {
        line("Congratulations, %s!", $name);
    }
}
