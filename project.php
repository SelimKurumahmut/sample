<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-1</title>
</head>
<body>
    

    <?php
        $elements=[
            'Rock',
            'Paper',
            'Scissors'
        ];
        $countA=0;
        $countB=0;
        $countDraw=0;
        for($i=1;$i<=10;$i++)
        {
            //global $countA, $countB, $countDraw;
            echo '<b>Round '.$i.'</b>';
            echo "<br>";
            $A_element=$elements[rand(0,2)];
            $B_element=$elements[rand(0,2)];
            echo '<r>Player A: '.$A_element;
            echo "<br>";
            echo 'Player B: '.$B_element;
            echo "<br>";
            if($A_element==$B_element)
            {
                echo "Same choice. It is a draw";
                $countDraw++;
            }
            switch($A_element){
                case "Rock":
                    if($B_element==$elements[1])
                    {
                        echo 'Paper covers rock. Player B wins';
                        $countB++;
                    }
                    else if($B_element==$elements[2])
                    {
                        echo 'Rock crushes scissors. Player A wins';
                        $countA++;
                    }
                    break;
                case "Paper":
                    if($B_element==$elements[0])
                    {
                        echo 'Paper covers rock. Player A wins';
                        $countA++;
                    }
                    else if($B_element==$elements[2])
                    {
                        echo 'Scissors cut paper. Player B wins';
                        $countB++;
                    }
                    break;
                 case "Scissors":
                        if($B_element==$elements[0])
                        {
                            echo 'Rock crushes scissors. Player B wins';
                            $countB++;
                        }
                        else if($B_element==$elements[1])
                        {
                            echo 'Scissors cut paper. Player A wins';
                            $countA++;
                        }
                        break;
            }
            /*else if($A_element>$B_element)
            {
                echo "A büyük B";

            }*/
            echo "<br>";
            echo "<br>";
        }
        echo 'Player A: '.$countA.' wins <br>';
        echo 'Player B: '.$countB.' wins <br>';
        echo $countDraw.' Games were a draw';
    ?>
</body>
</html>