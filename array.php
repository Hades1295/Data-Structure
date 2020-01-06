<?php 
$arrays= array('a','b','c','d','e');

foreach($arrays as $array){
   echo "This is as $array \n" ;
}   

/*count Arrays in php for loop */
$count = 0 ;
for ($i=0; $i < count($arrays) ; $i++) { 
   
   $count ++;

}
echo $count;