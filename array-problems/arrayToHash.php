<!-- create a function that takes an array and turns it to a hash table -->

<!-- doesn't work, needs revision -->


<?php
function arrayToHash($arr) {

  $hash;

  for($i=0; $i < count($arr); $i++){
    if (in_arr($hash, $arr[$i]){
      $hash[$arr[$i]]++;
    } else {
      array_push($hash, $arr[$i]);
    }
  }

  return $hash;
}

$a = ['a', 'b', 'a', 'b', 'c', 'c', 'd', 'e'];
echo arrayToHash($a);

?>