<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>計算アプリ</h1>

    <?
    switch ($comp) {
        case 'addition':
            echo $num1 + $num2;
            break;
        case 'subtraction':
            echo $num1 - $num2;
            
            break;
        case 'multiplication':
            echo $num1 * $num2;
            break;
        case 'division':
            echo $num1 / $num2;
            break;
        default:
            echo 'なんかちがうよ';
            break;
    }
    
    ?>
    
</body>
</html>