<?php

/*
 * Removes html and other characters from a string (representing a number, e.g. "<td>4.5%</td>") extracted from html
 * Arguments: numberUnsanitized = string (representing a number) with html tags, percent sign, and whitespace
 * Returns: floating-point number
 */
function htmlToNumber($numberUnsanitized) {
	$number = strip_tags($numberUnsanitized);
	$number = trim($number);
	$number = preg_replace('/,/', '', $number);
	$number = preg_replace('/%/', '', $number);
	$number = floatval($number);
	return $number;
}
	
?>
