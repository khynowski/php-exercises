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
}
