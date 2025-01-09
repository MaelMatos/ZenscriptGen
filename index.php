<?php
$materials = array(
    array('stone', 'minecraft:stone'),
    array('wood', 'minecraft:log'),
    array('dirt', 'minecraft:dirt'),
    array('grass', 'minecraft:grass')
);
foreach($materials as $material){
    echo "name:".$material[0]."<br>";
    echo "id:".$material[1]."<br>";
}

?>
