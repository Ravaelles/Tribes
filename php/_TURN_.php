<?php

echo "START OF TURN<br />";

Generate::village();
Generate::village();
$village = Generate::village();
Generate::settlers();
Generate::settlers();

//$json =
foreach (Object::all(Village::class) as $object) {
    echo $object->json();
}

//var_dump(Village::$all);
//var_dump(Object::$all);
//exit;
