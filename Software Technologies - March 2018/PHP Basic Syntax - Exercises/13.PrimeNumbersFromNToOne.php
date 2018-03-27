<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Basic Syntax - Exercises</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    $primeNumbers;
    for ($i = $num ; $i>= 1 ; $i--){
        $isPrime=true;

        for ($j = 2 ; $j<=sqrt($i) ; $j++){
            if ($i%$j==0){
                $isPrime=false;
            }
        }

        if ($isPrime){
            $primeNumbers[]=$i;
        }
    }

    echo join(' ',$primeNumbers);
}
?>
</body>
</html>