
 <!-- Truncate a string
 write a function that takes a string and num, then returns the string
 limited to the characters of num followed by ellipsis  -->

 <?php 
  
  function truncate($str, $n) {

    if(strlen($str) <= $n){
      return $str;
    }

    return substr($str, 0, $n) . "...";
  }

 ?>