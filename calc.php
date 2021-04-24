
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="num1" placeholder="number1">
        <input type="text" name="num2" placeholder="number2">

        <select name="operator" id="">
            <option value="None">None</option>
            <option value="Add">Add</option>
            <option value="Subtract">Subtract</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option>
            <option value="isPositive">isPositive</option>
            <option value="isPositive">isPositive</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>

    </form>


<?php

    //math functions
    function add ($num1 , $num2){
        return $num1+$num2;
    }
    function subtract ($num1 , $num2){
        return $num1-$num2;
    }
    function multiply ($num1 , $num2){
        return $num1*$num2;
    }
    function divide ($num1 , $num2){
        return $num1/$num2;
    }


    //getting data from browser
    if ( isset($_GET['submit']) ){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operator = $_GET['operator'];

        //deciding on which function to execute
        switch($operator){
            case None:
                    echo "You need to select an operator";
                    break;
            case Add:
                    echo add($num1,$num2);
                    break;
            case Subtract:
                    echo subtract($num1,$num2);
                    break; 
            case Multiply:
                    echo multiply($num1,$num2);
                    break;
            case Divide:
                echo divide($num1,$num2);
                break;                
        }


    }


?>

</body>
</html>