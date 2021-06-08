<?php

    $error = "";
    $x = "";
    $y = "";
    $result = "";




    if(isset($_GET['operation'])){
        $x = $_GET['num1'];
        $y = $_GET['num2'];
        $op = $_GET['operation'];

        if(is_numeric($x) && is_numeric($y)){
            switch($op){
            case 'Add' : $result = $x + $y;
                break;
             case 'Sub' : $result = $x - $y;
                 break;
             case 'Pro' : $result = $x * $y;
                 break;
             case 'Div' : $result = $x / $y;
                 break;
        }


        }else{
            $error= "Enter a Number first";
        }


        

    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>calculator</title>
   <link rel="stylesheet" href="style.css"> 
</head>
<body>
      <h1>Simple Calculator</h1> 
    <form action="<?= $_SERVER['PHP_SELF']  ?>" method="get" >
    <!-- number 1 -->
    <div>
        <label for="num1">number 1</label>
        <input type="number" name="num1" id="num1" value="<?= $x ?>">
    </div>

     <!-- number 2 -->
    <div>
        <label for="num2">number 2</label>
        <input type="number" name="num2" id="num2" value="<?= $y ?>">
    </div>

    <!-- Result -->
     <div>
        <label for="result">Result</label>
        <input type="number"  id="result" value="<?= $result ?>" disabled>
    </div>
    <!-- operation -->
    <div>
        <input type="submit" value="Add" name="operation" class="button">
        <input type="submit" value="Sub" name="operation" class="button">
        <input type="submit" value="Pro" name="operation" class="button">
        <input type="submit" value="Div" name="operation" class="button">
    </div>

</form>
<footer> Created By Ehueriken  </footer>
</body>
</html>