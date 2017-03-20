<?php

// Number Comparison Answer from PHP: A Primer by Joe Casabona

function compare($a, $b) {
	if ( $a > $b ) {
		echo "$a is  greater than $b";
	} else if ( $a < $b ) {
			echo "$a is  less than $b";
	} else {
		echo '$a and $b are equal to ' . $a;	
	}
}


$base = 13;

$numbers = array( 0, 4, 27, 109, 3, 5, 87, 23, 13 );

foreach( $numbers as $num ) {
	// $base will always be the second argument.
	compare( $num, $base );
	echo '<br/>';
}

?>
