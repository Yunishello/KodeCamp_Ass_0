<?php 
    //geting operand and oprator from value from console
    $operand_a = (int)readline("Enter Your First Value: ");
    $operand_b = (int)readline("Enter Your Second Value: ");
    echo("Enter Value Of Operator The Follow Options: \n 1 for + \n 2 for - \n 3 for * \n 4 for / \n");
    $operator = readline("Enter The Operator To Calculate With: ");
    if ($operator == "1") {
        $result = $operand_a + $operand_b;
        echo("The sum of ".$operand_a. " and ".$operand_b. " = ". $result);
    }elseif($operator == "2") {
        $result = $operand_a - $operand_b;
        echo("The subtitution of ".$operand_a. " and ".$operand_b. " = ". $result);
    }elseif ($operator == "3") {
        $result = $operand_a * $operand_b;
        echo("The multiplication of ".$operand_a. " and ".$operand_b. " = ". $result);
    }elseif ($operator == "4") {
        $result = $operand_a / $operand_b;
        echo("The division of ".$operand_a. " and ".$operand_b. " = ". $result);
    }else {
        echo("Please Enter An Operator");
    }
?>