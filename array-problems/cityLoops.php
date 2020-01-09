<!-- Write a fx that takes an array of cities and returns a sorted list including population (in millions) -->

<?php
  $cities = ['Tokyo' => '37', 'Mexico City' => '21', 'New York City' => '8', 'Mumbai' => '25', 'Seoul' => '9', 'Shanghai' => '27', 'Lagos' => '14', 'Buenos Aires' => '15', 'Cairo' => '20', 'London' => '9'];
  $otherCities = ['Los Angeles' => '4', 'Delhi' => '29', 'Osaka' => '19', 'Beijing' => '20'];
  $allCities = array_merge($cities, $otherCities);

  function getCities($arr){
    arsort($arr);
    $index = 1;
    $list = '';

    foreach($arr as $city => $pop){
      $list .= "{$index}. {$city} - {$pop} \n";
      $index++;
    }

    return $list;
  }

  echo getCities($allCities);
?>