<?php
$tech = array('shreyash','swarup','Gauri','acx','tecsh' );
echo count($tech);
foreach ($tech as $value) {
    echo "Value is $value <br />";
}

$tech[0] = "Developer";
$tech[1] = "Developer";
$tech[2] = "Tester";
$tech[3] = "Random";
$tech[4] = "CEO";


foreach ($tech as $value) {
    echo "Value is $value  \n";
}
exit;
