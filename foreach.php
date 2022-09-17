<?php
$nabi = array("Muhammad", "isa", "Musa", "Daud", "Ibrahim", "Ilyas", "Idris");
// // $i = 1;
// // foreach ($nabi as $row){
// //     echo $i++ .". $row <br>"; 
// }

$panjangArray = count($nabi);
for($i = 0; $i < $panjangArray; $i++){
    echo $i+1 . ". ".$nabi[$i];
    echo "<br>";
}

?>