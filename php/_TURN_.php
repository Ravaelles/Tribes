<?php

Generate::village();
Generate::village();
$village = Generate::village();
Generate::settlers();
Generate::settlers();


$jsonMapUnits = GameToJson::allToJson();

//echo "<br />All for map: ";
//var_dump(json_decode($jsonMapUnits, TRUE));
echo $jsonMapUnits;
