<?php
/** 
 * int $i,$in
 * string $letra,$opcion
 * boolean $hayletras
*/
$opcion="si";
$hayletra=FALSE;
$posic=array();
$cad1="batata";
$largo=strlen($cad1);
echo("cadena ".$cad1." tiene ".$largo." caracteres ");
$in=0;
while($opcion=="si"){
echo "\nIngrese una letra: ";
        $letra = strtolower(trim(fgets(STDIN)));

for($i=0;$i<$largo;$i++){
    //echo("\nletra ".$cad1[$i]);
    if($letra==$cad1[$i]){
        $posic[$in]=$i;
        $in=$in+1;
        $hayletra=TRUE;
    }
}
//if(!$hayletra){
//    echo("no existe letra\n");
//}
for($j=0;$j<count($posic);$j++){
    //echo("\nletra ".$cad1[$posic[$j]]." posicion ".$posic[$j]);
    $cad1[$posic[$j]]="*";
    
}
echo("nueva palabra ".$cad1);
//echo strrt($cad1,"a","*");
    echo("\ningrese otra letra si/no ");
    $opcion=trim(fgets(STDIN));
}