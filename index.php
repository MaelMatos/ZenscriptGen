<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Tooltips.css">
</head>
<body>
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

<script src="Tooltips.js"></script>
</body>
</html>
