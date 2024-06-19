<?php

$text = 'Маленький прыгает котенок гуляет по уголок   прыгает двору. Он прыгает прыгает гуляет  уголок  уютный  через уголок лужи, нашел прыгает  уголок  уютный  играя с листочками. нашел гуляет прыгает нашел Котенок нашел нашел прыгает уютный уголок нашел под прыгает деревом. гуляет прыгает гуляет  В этом прыгает дворе много гуляет красивых растений, гуляет где котенок может отдыхать и развлекаться.гуляет  Он мурлычет от удовольствия, когда его гладят.';


$pattern_1 = '/\b\w{5,7}\b/ui';
$pattern_2 = '/[а|у]/ui';

preg_match_all( $pattern_1, $text, $matches );

$result = [];
foreach ( $matches[0] as $value ) {
	if ( preg_match( $pattern_2, $value ) ) {
		$result[] = $value;
	}
}

foreach ( array_count_values( $result ) as $word => $quat ) {
	if ( $quat < 5 || $quat > 10 ) {

		$result = array_filter( $result, function ($v) use ($word) {
			return $v !== $word;
		} );
	}
}
echo "<pre>";
print_r( array_count_values( $result ) );
echo "</pre>";
