<?php
function infixToPostfix($expression)
{
    $precedence = ['+' => 1, '-' => 1, '*' => 2, '/' => 2];
    $stack = [];
    $output = [];
    $tokens = preg_split('/([+\-*\/()])/', $expression, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

    if (empty($tokens)) {
        return false; // Пустое выражение
    }

    foreach ($tokens as $token) {
        if (is_numeric($token)) {
            $output[] = $token;
        } elseif ($token === '(') {
            array_push($stack, $token);
        } elseif ($token === ')') {
            while (!empty($stack) && end($stack) !== '(') {
                $output[] = array_pop($stack);
            }
            if (empty($stack)) {
                return false; // Несбалансированные скобки
            }
            array_pop($stack);
        } else {
            while (!empty($stack) && end($stack) !== '(' && $precedence[end($stack)] >= $precedence[$token]) {
                $output[] = array_pop($stack);
            }
            array_push($stack, $token);
        }
    }

    while (!empty($stack)) {
        $output[] = array_pop($stack);
    }

    return $output;
}

function evaluatePostfix($postfix)
{
    $stack = [];

    if (empty($postfix)) {
        return false; // Пустое выражение
    }

    foreach ($postfix as $token) {
        if (is_numeric($token)) {
            array_push($stack, $token);
        } else {
            if (count($stack) < 2) {
                return false; // Недостаточно операндов
            }
            $right = array_pop($stack);
            $left = array_pop($stack);
            switch ($token) {
                case '+':
                    array_push($stack, $left + $right);
                    break;
                case '-':
                    array_push($stack, $left - $right);
                    break;
                case '*':
                    array_push($stack, $left * $right);
                    break;
                case '/':
                    if ($right == 0) {
                        return false; // Деление на ноль
                    }
                    array_push($stack, $left / $right);
                    break;
                default:
                    return false; // Неизвестный оператор
            }
        }
    }

    if (count($stack) !== 1) {
        return false; // Неожиданное количество операндов
    }

    return array_pop($stack);
}

function calculateExpression($expression)
{
    $postfix = infixToPostfix($expression);
    if ($postfix === false) {
        return "Ошибка: некорректное выражение";
    }
    $result = evaluatePostfix($postfix);
    if ($result === false) {
        return "Ошибка: невозможно вычислить выражение";
    }
    return $result;
}

$resultMessage = "";

if (isset($_POST['expression'])) {
    $expression = $_POST['expression'];
    if (!empty($expression)) {
        $resultMessage = calculateExpression($expression);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator by PHP</title>
</head>

<body>
    <form class="UI" method="post">
        <input type="text" name="expression" class="expression">
        <div class="result">=
            <?php echo $resultMessage; ?>
        </div>

        <button class="action">(</button>
        <button class="action">)</button>
        <!-- <button class="action">%</button> -->
        <button class="clear" onclick="clearAll()">Clear All</button>
        <button class="number">7</button>
        <button class="number">8</button>
        <button class="number">9</button>
        <button class="action">/</button>
        <button class="number">4</button>
        <button class="number">5</button>
        <button class="number">6</button>
        <button class="action">*</button>
        <button class="number">1</button>
        <button class="number">2</button>
        <button class="number">3</button>
        <button class="action">-</button>
        <button class="number">.</button>
        <button class="number">0</button>
        <input class="equal" value="=" type="submit">
        <button class="action">+</button>
    </form>

    <?php

    ?>
    <script src="index.js"></script>
</body>

</html>