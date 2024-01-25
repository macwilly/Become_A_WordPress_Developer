<?php
function greet(string $name, string $color): string
{
    $greeting = "<p>Hi, my name is {$name} and my favorite color is {$color}.</p>";
    return $greeting;
}
    echo greet("John", "Blue");
    echo greet("Jane", "Green");
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description');?></p>