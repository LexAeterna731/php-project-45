<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function startGame($welcomeMessage, $questionAnswerPairs)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line($welcomeMessage);

    $rigthAnswer = true;
    for ($i = 0, $questionsCount = count($questionAnswerPairs); $i < $questionsCount && $rigthAnswer; $i += 1) {
        $question = $questionAnswerPairs[$i][0];
        $answer = $questionAnswerPairs[$i][1];
        line("Question: %s", $question);
        $userAnswer = prompt("Your answer");
        if ($userAnswer === $answer) {
            line("Correct!");
        } else {
            $rigthAnswer = false;
        }
    }

    if ($rigthAnswer) {
        line("Congratulations, %s!", $name);
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $answer);
        line("Let's try again, %s!", $name);
    }
}
