<?php
const LEFT_PARENTHESIS = "(";
const RIGHT_PARENTHESIS = ")";
$expression1 = "s * (s – a) * (s – b) * (s – c)";
$expression2 = "s * (s – a) * s – b) * (s – c)";
function checkParenthesis($expression)
{
    $stack = new SplStack();
    $i = 0;
    while ($i < strlen($expression)) {
        if ($expression[$i] == LEFT_PARENTHESIS) {
            $stack->push($expression[$i]);
        } else if ($expression[$i] == RIGHT_PARENTHESIS) {
            if ($stack->isEmpty()) {
                return false;
            } else {
                $stack->pop();
            }
        }
        $i++;
    }
    if ($stack->isEmpty()) {
        $result = true;
    } else $result = false;

    return $result;
}

var_dump(checkParenthesis($expression1));
var_dump(checkParenthesis($expression2));
