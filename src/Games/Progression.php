<?php

namespace Brain\Games\Games\Progression;

use function Brain\Games\Engine\startGame;

function startProgression()
{
    $welcomeMessage = "What number is missing in the progression?";

    $questionAnswerPairs = [];
    for ($i = 0, $numberOfQuestions = 3; $i < $numberOfQuestions; $i += 1) {
        $progression = [];
        $currentNumber = rand(1, 30);
        $step = rand(1, 10);
        $progressionLength = rand(5, 15);
        $unknownNumberPosition = rand(0, $progressionLength - 1);
        for ($j = 0; $j < $progressionLength; $j += 1) {
            $progression[] = $currentNumber;
            $currentNumber += $step;
        }

        $answer = (string) $progression[$unknownNumberPosition];
        $progression[$unknownNumberPosition] = "..";
        $question = implode(" ", $progression);
        $questionAnswerPairs[] = [$question, $answer];
    }

    startGame($welcomeMessage, $questionAnswerPairs);
}
