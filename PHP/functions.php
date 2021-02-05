<?php

########################
###  EDIT THIS FILE  ###
########################


// read from "input.json" and return as an array
function load_input_file_into_php_array()
{

  $strJsonFileContents = file_get_contents("data/input.json");
  $input_array = json_decode($strJsonFileContents, true);

  return $input_array;

  print "Loading...\n";
}


// convert array to match structure in "correct-output.json"
function convert_array_to_output_format($input_array)
{
  $input_array = load_input_file_into_php_array();
  $arr = json_encode($input_array);
  $newKeys  = array('birds' => null, 'bird' => null, 'EnglishName' => 'name', 'Species' => 'latin', 'Lifespan' => 'lifespan');

  $tmp_arr =  array_map(function ($k) {
    return '/\b' . $k . '\b/u';
  }, array_keys($newKeys));

  $output_array =  preg_replace($tmp_arr, array_values($newKeys), $arr);
  return $output_array;
  print "Converting...\n";
}
// save the array to file named "my-output.json" 
function save_php_array_to_output_file($output_array)
{
  $inp = file_get_contents('data/my-output.json');
  $output = convert_array_to_output_format($output_array);
  return file_put_contents($output, $inp);

  print "Saving...\n";
}



########################################################################
###  Note: Final "my-output.json" file should match structure of     ###
###  "correct-output.json" - but, whitespace does NOT have to match. ###
########################################################################

########################################################################
###  Tip - Look at these built-in PHP functions:                     ###
###  json_encode, json_decode, c, file_get_contents  ###
########################################################################