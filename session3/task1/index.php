<?php

// task of the day
// give an array of names print all names that have 5 character length
// write a function to take an array as a parameter and return a new array that has all names with 5 characters length
// output: ["osama", "eslam"]

$names= ['osama', 'ali', 'mohamed', 'eslam', 'khalid', 'Essam'];

for ($i=0; $i <sizeof($names) ; $i++) { 
    if(strlen($names[$i]) == 5){
        echo $names[$i]. '<br>';
    };
};
