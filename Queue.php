<?php
// <!-- Demo for Stack and Queue -->


$arr = array(24, 48, 95, 100, 120);

//FIFO
$queue = array_shift($arr);
$push = array_push($arr,130);
//FIFO


// LIFO{
    try{
    $pop = array_pop($arr);
    print_r($arr);
    }catch(Exception $e){
        throw new Exception("Error Processing Request", 1);        
    }
// LIFO

function pop($arr){
    print_r($arr);
    $array_pop = array_pop($arr);
    return $array_pop;
}





function push(){
    
}
