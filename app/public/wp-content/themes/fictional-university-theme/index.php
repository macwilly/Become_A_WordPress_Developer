<?php
    $names = array("Brad", "Jane", "John", "Meowsalot");
    $namesCount = count($names);

    //smart way to do this.
    foreach ($names as $name){
        echo "<p>Hi, my name is {$name}!</p>";
    }
    echo "<hr>";
    //Wordpress uses a while loop to go through things like Posts and
    // other content.
    $count = 0;
    while ($count < $namesCount){
        echo "<li>Hi my name is {$names[$count]}.</li>";
        $count++;
    }
?>