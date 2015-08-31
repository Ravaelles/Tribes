<?php

echo "START OF TURN<br />";

Generate::village();
Generate::village();
Generate::village();
Generate::settlers();
Generate::settlers();

$json = MapPainter::paint();
echo "<br />Dzejson: ";
var_dump($json);
exit;

echo $json;

//var_dump(Village::$all);
//var_dump(Object::$all);
//exit;
