<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 07/11/2018
 * Time: 16:18
 */

function extractTabByType ($tab, $type){
    $tab2 =array();
    for ($i=0;$i<sizeof($tab);$i++){
        if (gettype($tab[$i])=="$type"){
            array_push($tab2,$tab[$i]);
        }
}
return $tab2;
}
$tab3=[0, 2.5, true, 1, [1, 2, 3], false];
$tab4= extractTabByType($tab3, "double");
for ($i=0;$i<sizeof($tab4);$i++) {
    echo $tab4[$i]." , ";
}
?>
