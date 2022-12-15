<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $value) {
        echo "$value <br>";
        }

        // associative array
        $student = array("Ruma" => 500, "Sohana" => 1000, "Sharmin" =>2000, "Armin" =>5000, "Amena" => 11);
        // echo $student[0] 
        foreach ($student as $name => $tk){
            echo $name ." : ". $tk;
            echo "<br>";

        }
        // function
        function Sum($x, $y){
            return $x + $y;
        }

        $v = Sum(4,5);
        echo $v . "<br>";

        $v2 = Sum(10,20);
        echo $v2 . "<br>";

        //simple

        function Simple($x, $y){
            $z = $x*$x + 3*$x + 9*$y + 6*($y*$y) + 32*$x + 7*($y*$y*$y);
            return $z;
        }
        
        $v = Simple(4,6);
        echo $v. "<br>";

        $val = Simple(10,1);
        echo $val . "<br>";

        // indexed array

        $cars = array("VOLVO", "BMW", "Toyta");
        $arrlength = count($cars);

        for($x = 0; $x < $arrlength; $x++){
            echo $cars[$x];
            echo "<br>";
        }
    ?>
</body>
</html>