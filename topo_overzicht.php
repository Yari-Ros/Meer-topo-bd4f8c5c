  
<?php
$number = readline("How many countries would you like to add?" .PHP_EOL);
if (is_numeric($number)) {
  $countries =  array();
}
else {
  exit($number . " That is not a number.");
}
for ($i=0; $i <$number ; $i++) {
  $Country = readline("In which country is this city located? ") .PHP_EOL;
  $City = readline("What is the capital of '" . $Country . "' ?") .PHP_EOL;
$array = array(
  'Country' => $Country,
  'City' => $City
);
  array_push($countries, $array);
}
  print_r($countries);
?>