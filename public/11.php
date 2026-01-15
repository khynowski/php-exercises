<?php
declare(strict_types=1);

/**
 *  11. Filtrowanie liczb parzystych
 *  Cel: Ćwiczenie filtrowania danych w tablicy. Zakładamy możliwosć filtrowania tylko liczb całkowitych
 *  Podstawowa wersja: Zwróć nową tablicę tylko z liczbami parzystymi.
 *  Rozszerzona wersja: Napisz filtr ręcznie bez użycia wbudowanej funkcji.
 *  Keywordy: array_filter, pętla foreach, instrukcje warunkowe
**/

/**
 * Filters even numbers from an array using built-in functions.
 *
 * @param array $numbers The array containing numeric values.
 * @return array The array of even numbers.
 */
 
function evenNumbersAuto(array $table): array
{
    $table = array_filter($table, 'is_int');

    return array_filter($table, function (int $value): bool {
        // Bitwise AND with 1 checks LSB: 0 for even, 1 for odd
        // Faster than modulo but less readable
        return !($value & 1);
    });
}

function evenNumbersManual(array $table): array
{	
	$results = [];
	$i = 0;
	foreach($table as $element) {
		if(is_int($element)){
			if($element % 2 === 0) {
				$results[] = $element;
			}
		}
	}
	return $results;
}

// --- Test Execution ---
$testData = [10.2, 12.2, 2, 3, 4, 5, 6, 8, 10];
echo "Input array: " . print_r($testData, true) . PHP_EOL;

$result = evenNumbersManual($testData);  // Wywołaj RAZ
echo "The new even array looks like: " . print_r($result,true) . PHP_EOL;

$result = evenNumbersAuto($testData);
echo "The new even array (auto) looks like: " . print_r($result,true) . PHP_EOL;