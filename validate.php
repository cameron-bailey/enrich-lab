<?php
/**
* less_than_equal_to
*/
$x = 50;
if (filter_var($x, FILTER_VALIDATE_FLOAT, ["options" => ["max_range" => 100]]) !== false) {
    echo "result : $x is less than OR equal to 100";
} else {
    echo "result : $x is NOT less than OR equal to 100";
}
?>

<br>
<?php
/**
* greater_than_equal_to
*/
$x = 50;
if (filter_var($x, FILTER_VALIDATE_FLOAT, ["options" => ["min_range" => 100]]) !== false) {
    echo "result : $x is greater than OR equal to 100";
} else {
    echo "result : $x is NOT greater than OR equal to 100";
}
?>

<br>
<?php
/**
* less_than_equal_to && greater_than_equal_to
*/
$x = 50;
if (filter_var($x, FILTER_VALIDATE_FLOAT, ["options" => ["min_range" => 0 , "max_range"=> 100]]) !== false) {
    echo "result : $x is in range of 0 to 100";
} else {
    echo "result : $x in NOT range of 0 to 100";
}

//FILTER_VALIDATE_DOMAIN
//FILTER_VALIDATE_EMAIL
//FILTER_VALIDATE_FLOAT
//
?>
