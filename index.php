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
    array('none', 'null'),
    array('stone', 'minecraft:stone'),
    array('wood', 'minecraft:log'),
    array('dirt', 'minecraft:dirt'),
    array('grass', 'minecraft:grass')
);
function GenerateMaterial($materials){
    $mod = "minecraft";
    foreach($materials as $material){
        if (!(explode(':',$material[1])[0] == $mod)){
            $mod = explode(':',$material[1])[0];
            echo '<optgroup label="'.$mod.'" class="tooltip" style="color: blue;"></optgroup>';
        }
        echo '<option value="'.$material[1].'" class="tooltip">'.$material[0].'</option>';
    }
}
/* foreach($materials as $material){
    echo "name:".$material[0]."<br>";
    echo "id:".$material[1]."<br>";
} */
?>
<div class="crafting">
    <select name="1" id="" class="invslot">
        <?php GenerateMaterial($materials);?>
    </select>
    <select name="2" id="" class="invslot">
        <?php
        foreach($materials as $material){
            echo '<option value="'.$material[1].'">'.$material[0].'</option>';
        }
        ?>
    </select>
    <select name="3" id="" class="invslot">
        <?php
        foreach($materials as $material){
            echo '<option value="'.$material[1].'">'.$material[0].'</option>';
        }
        ?>
    </select>
    <br>
    <select name="4" id="" class="invslot">
        <?php
        foreach($materials as $material){
            echo '<option value="'.$material[1].'">'.$material[0].'</option>';
        }
       ?>
    </select>
    <select name="5" id="" class="invslot">
        <?php
        foreach($materials as $material){
            echo '<option value="'.$material[1].'">'.$material[0].'</option>';
        }
       ?>
    </select>
    <select name="6" id="" class="invslot">
        <?php
        foreach($materials as $material){
            echo '<option value="'.$material[1].'">'.$material[0].'</option>';
        }
       ?>
    </select>
    <br>
    <select name="7" id="" class="invslot">
        <?php
        foreach($materials as $material){
            echo '<option value="'.$material[1].'">'.$material[0].'</option>';
        }
       ?>
    </select>
    <select name="8" id="" class="invslot">
        <?php
        foreach($materials as $material){
            echo '<option value="'.$material[1].'">'.$material[0].'</option>';
        }
       ?>
    </select>
    <select name="9" id="" class="invslot">
        <?php
        foreach($materials as $material){
            echo '<option value="'.$material[1].'">'.$material[0].'</option>';
        }
       ?>
    </select>
</div>
<script src="Tooltips.js"></script>
</body>
</html>
