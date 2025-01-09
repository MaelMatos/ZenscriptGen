<?php
function NameThis(){
    $name = sha1(random_int(00000,99999))
    return $name;
}
function AddCraftRecipe($cells,$name){
    $recipe = "recipes.addShaped('$name', $cells[0],
 [[$cells[1],$cells[2],$cells[3]],
  [$cells[4],$cells[5],$cells[6]],
  [$cells[7],$cells[8],$cells[9]]]);"
  return $recipe;
}
function AddCraftRecipeMirroed($cells,$name){
    $recipe = "recipes.addShapedMirrored('$name', $cells[0],
 [[$cells[1],$cells[2],$cells[3]],
  [$cells[4],$cells[5],$cells[6]],
  [$cells[7],$cells[8],$cells[9]]]);"
  return $recipe;
}
function AddCraftRecipeShapeless($cells,$name){
    $recipe = "recipes.addShapedMirrored('$name', $cells[0],
 [[$cells[1],$cells[2],$cells[3]],
  [$cells[4],$cells[5],$cells[6]],
  [$cells[7],$cells[8],$cells[9]]]);"
  return $recipe;
}





?>