<?php
include 'Functions.php';
$cells = array($_POST['result'], $_POST['1'], $_POST['2'], $_POST['3'], $_POST['4'], $_POST['5'], $_POST['6'], $_POST['7'], $_POST['8'], $_POST['9']);
$name = NameThist();
if ($_POST['mirrored']){
    $recipe = AddCraftRecipeMirroed($cells,$name);
}
if ($_POST['shapeless']){
    if (isset($recipe)){
        $recipe = AddCraftRecipeShapeless($cells,$name)."\n".$recipe;
    }
    else{
        $recipe = AddCraftRecipeShapeless($cells,$name);
    }
}
else{
    $recipe = AddCraftRecipe($cells,$name);
}
?>