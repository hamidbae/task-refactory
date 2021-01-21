<?php
    function makeX($n) {
        $midNumber = round($n/2);

        if($n%2 == 0){
            $midSpace = 2;
        }else{
            $midSpace = 1;
        }

        for($i=1; $i<=$n; $i++){
            $decreaseNumber = $n-$i+1;

            if($i > $midNumber){
                $firstSpace = $n-$i;

                echo str_repeat(" ", $firstSpace);
                echo "$decreaseNumber";
                if($n%2 == 0){
                    echo str_repeat(" ", (($i-$midNumber-1)*2));
                }else{
                    echo str_repeat(" ", (($i-$midNumber-1)*2+$midSpace));
                }                
                echo "$decreaseNumber";
            }else if($decreaseNumber == $midNumber){
                echo str_repeat(" ", $i-1);
                echo "$i";
            }else{
                echo str_repeat(" ", $i-1);
                echo "$i";
                echo str_repeat(" ", (($midNumber-$i-1)*2+$midSpace));
                echo "$i";
            }

            echo "\n";
        }
    }

    echo "n = 9\n";
    makeX(9);
    echo "\n";
    echo "n = 10\n";
    makeX(10);

?>