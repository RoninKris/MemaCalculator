<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operator = $_POST['operator'];
    $result;
    switch($operator){
        case '+':
            $result = $n1 + $n2;
            break;
        case '−':
            $result = $n1 - $n2;
            break;
        case '×':
            $result = $n1 * $n2;
            break;
        case '/':
            $result = $n1 / $n2;
            break;
    }
    echo "
    <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='style.css'>
    <title>Calculator</title>
</head>
<body>
        <div class='result' id='result'>
            <h1>$result</h1>
            <a href='index.php'>TRY AGAIN</a>
        </div>
    </div>
</body>
</html>
    ";
?>