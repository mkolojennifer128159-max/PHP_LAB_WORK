<?php
//Index Arrays
//Single Dimentional Array
$array_one = array("one",' two', "three");
$array_two = array("four","five",6,7.5)

//traverse the arrays
//data extractions

foreach($array_one as $key => $one)
{
    echo "$key => $one !";
    echo "<br>";
}

echo "<pre>";
print_r($array_one);    //shows data of array elements
echo "</pre>" ;

//array functions
echo "<pre>";   
print_r(array_push($array_one,"four"));     //adds element 
echo "</pre>" ;

echo "<pre>";  
print_r($array_one);    
echo "</pre>" ;

echo "<>";   
print_r(array_pop($array_one,));    //removes element
echo "</pre>" ;

echo "<pre>";  
print_r($array_one);    
echo "</pre>" ;

echo "<pre>";  
$array_three = array_merge($array_one, $array_two);   //merging 2 arrays
print_r($array_three);
echo "</pre>" ;

echo "<pre>";     
print_r(array_keys($array_one));
echo "</pre>" ;

echo "<pre>";     
print_r(array_flip($array_one));
echo "</pre>" ;

echo "<pre>";     
print_r(array_values($array_one));
echo "</pre>" ;
?>
