<?php

namespace Brain\Games\Even;

use function Brain\Games\Games\startGame;

function startEven()
{
    $welcomeMessage = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

    $questionAnswerPairs = [];
    for ($i = 0, $numberOfQuestions = 3; $i < $numberOfQuestions; $i += 1) {
        $question = rand();
        $answer = $question % 2 === 0 ? "yes" : "no";
        $questionAnswerPairs[] = [$question, $answer];
    }

    startGame($welcomeMessage, $questionAnswerPairs);
}
