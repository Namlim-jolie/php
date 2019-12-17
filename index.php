<?php

$imgCat=array('animals','architecture','nature','people'.'tech');
echo 'I like' .$imgCat[3].".";
for ($x=0;$x<10;$x++)
{
    $imgUrl="https://placeimg.com/60".($x%10)."/300/nature".$imgCat[rand(0,4)];
    echo "<img src='" . $imgUrl . "'>".PHP_EOL;
}

?>
