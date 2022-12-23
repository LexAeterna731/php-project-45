<?php

namespace Brain\Games\Games\Calc;

use function Brain\Games\Engine\startGame;

function startCalc()
{
    $welcomeMessage = "What is the result of the expression?";

    $questionAnswerPairs = [];
    for ($i = 0, $numberOfQuestions = 3; $i < $numberOfQuestions; $i += 1) {
        $firstOperand = rand(1, 100);
        $secondOperand = rand(1, 100);
        $operationId = rand(1, 3);
        switch ($operationId) {
            case 1:
                $question = "{$firstOperand} + {$secondOperand}";
                $answer = $firstOperand + $secondOperand;
                break;
            case 2:
                $question = "{$firstOperand} - {$secondOperand}";
                $answer = $firstOperand - $secondOperand;
                break;
            case 3:
                $question = "{$firstOperand} * {$secondOperand}";
                $answer = $firstOperand * $secondOperand;
                break;
        }
        $questionAnswerPairs[] = [$question, $answer];
    }

    startGame($welcomeMessage, $questionAnswerPairs);
}
