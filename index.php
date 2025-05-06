<?php

    
    $sport = array("Football" , "Voleyball" , "Basketball" , "Handball");

    array_push($sport, "Golf");
    array_unshift($sport, 'Tennis');
    $output1 = array_slice($sport , 2);
    $output2 = array_slice($sport, 0.3);
    array_shift($sport);


    $len = count($sport);
    for($i=0; $i<$len;$i++){
        echo $sport[$i], "\n";
    }
    echo "<br>";
    echo $sport[0];
    echo "<br>";
    echo end($sport);
    echo "<br>";
    echo count($sport);



    $myvalues = array(12,24,36,48,52);
    echo(array_sum($myvalues));

    $weekly_temperature = array(25,25,34,30,31,32,32);
    $sum = array_sum($weekly_temperature ) /7;
    echo $sum;
  

?>