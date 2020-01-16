<!-- create a function that takes an array and turns it to a hash table -->

<?php
function arrayToHash($arr) {

  // $hash = array_flip($arr);

  // for($i=0; $i < count($arr); $i++){
  //   if (in_array($hash, $arr[$i]){
  //     $hash[$arr[$i]]++;
  //   } else {
  //     array_push($hash, $arr[$i]);
  //   }
  // }

  // return $hash;


  // OK, easy way to solve ->
  return array_count_values($arr);
}

$a = ['a', 'b', 'a', 'b', 'c', 'c', 'd', 'e'];
// // echo arrayToHash($a);

// $newArr = array();

// // foreach($flipped as $item){

// // }

// for($i=0; $i<count($a); $i++){
//   if(!in_array($a[$i], $newArr)){
//     array_push($newArr, $a[$i]);
//   }
// }


// print_r($newArr);

?>