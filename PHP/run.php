<?php

###################################
###  NO NEED TO EDIT THIS FILE  ###
###################################

// import functions
require "functions.php";

// read from "input.json" and return as an array
$input_array = load_input_file_into_php_array();
// convert array to match structure in "correct-output.json"
$output_array = convert_array_to_output_format($input_array);
// save the array to file named "my-output.json" 
save_php_array_to_output_file($output_array);

// print done
print "Done.\n";

########################################################################
###  Note: Final "my-output.json" file should match structure of     ###
###  "correct-output.json" - but, whitespace does NOT have to match. ###
########################################################################

########################################################################
###  Suggestion: Run this file from the command line.                ###
###  > php run.php                                                   ###
########################################################################