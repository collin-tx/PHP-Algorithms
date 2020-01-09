<!-- write a fx that returns a paragraph long weather report where conditions are injected into a string -->

<?php
  
  
  function getWeather($array) {

    $report = "We've had all kinds of weather this week.";

    if (count($array) > 1) {
      $report .= " Including " . $array[0] . " and " . $array[1] . ". ";
    }

    if(count($array) > 3) {
      $report .= "From " . $array[2] . " to " . $array[3] . "! ";
    }

    if (count($array) > 4) {
      $report .= "Looks like next week will see " . $array[4];
      if (count($array) < 6) $report .= ".";
      if (count($array) >= 6) $report .= " but we'll also get some " . $array[5] . ". ";
    }

    $report .= "Be safe out there and stay classy, San Diego!";
    
    return $report;
  }

  $conditions = ['snow', 'wind', 'sunshine', 'rain', 'thunderstorms', 'blue skies'];
  echo getWeather($conditions);

?>