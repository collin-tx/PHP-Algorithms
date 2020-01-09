<!-- write a fx that gets the time, day and date using date() -->

<?php
  
  function getDateNow(){  
    $date = date('g:i a, l, F jS, Y');
    return $date;
  }

  echo getDateNow();
?>