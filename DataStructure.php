
<?php 
$arr = array(24, 48, 95, 100, 120); 


$result = $arr[count($arr)-1];
unset($arr[count($arr)-1]);
echo $result;
print_r($arr);
array_push($arr, "apple", "raspberry");
array_pop($arr);
print_r($results);
print_r($arr);
?> 

