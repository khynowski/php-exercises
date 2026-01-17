<?php
declare(strict_types=1);

class Validator
{
    /**
     * Sprawdza, czy podany email jest poprawny
     *
     * @param string $email
     * @return bool
     */
    public static function email(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    public static function validatePhone(int $number): string
    {
        $numberAsString = (string) $number;
        if (str_starts_with($numberAsString, '48')) {
            return 'Polska';
        }
        if (str_starts_with($numberAsString, '1')) {
            return 'USA';
        }
        return 'Nieznany kraj';
    }
}
