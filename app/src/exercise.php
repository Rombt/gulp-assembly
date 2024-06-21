<?php
$text = 'Маленький прыгает котенок гуляет по уголок прыгает двору. Он прыгает прыгает гуляет уголок уютный через уголок луввжи  луввжи  луввжи  луввжи  луввжи  луввжи  луввжи  луввжи , нашел прыгает уголок уютный играя с листочками. нашел гуляет прыгает нашел Котенок нашел нашел прыгает уютный уголок нашел под прыгает деревом. гуляет прыгает гуляет В этом прыгает дворе много гуляет красивых растений, гуляет где котенок может  может  может  может  может  может отдыхать и развлекаться.гуляет Он мурлычет от удовольствия, когда его гладят.';

$res = select_words( $text, 'ау' );

echo "<pre>";
print_r( $res );
echo "</pre>";

function select_words( $text, $str, $min = 5, $max = 10 ) {

	$arr_words = [];
	$result = [];

	$pattern_1 = '/\b\w{' . $min . ',' . $max . '}\b/ui';
	$pattern_2 = '/[' . $str . ']/ui';

	preg_match_all( $pattern_1, $text, $matches );

	foreach ( $matches[0] as $value ) {
		if ( preg_match( $pattern_2, $value ) )
			$arr_words[] = $value;
	}

	foreach ( array_count_values( $arr_words ) as $word => $quat ) {
		if ( $quat >= 5 && $quat <= 10 )
			$result[] = $word;
	}

	return $result;
}