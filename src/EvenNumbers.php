<?php
declare(strict_types=1);

namespace App;

class EvenNumbers
{
    /**
     * Filters even numbers using array_filter.
     *
     * @param array $table
     * @return array
     */
    public static function auto(array $table): array
    {
        $table = array_filter($table, 'is_int');

        return array_filter($table, function (int $value): bool {
            return !($value & 1); // szybsze niż modulo
        });
    }

    /**
     * Filters even numbers manually using foreach.
     *
     * @param array $table
     * @return array
     */
    public static function manual(array $table): array
    {
        $results = [];
        foreach ($table as $key => $value) {
            if (is_int($value) && $value % 2 === 0) {
                $results[$key] = $value;
            }
        }
        return $results;
    }
}
