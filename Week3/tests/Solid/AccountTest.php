<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Hynkar\PhpStarter\Solid\LiskovSubstitution\DepositAccount;
use Hynkar\PhpStarter\Solid\LiskovSubstitution\StandardAccount;
use Hynkar\PhpStarter\Money;

class AccountTest  extends TestCase
{
    public function testStandardAccount(): void
    {
        // 1. Arrange (Przygotuj dane)
        $standard = new StandardAccount(new Money(100, 'PLN'));
        
        // 2. Act (Wykonaj akcję)
        $standardDepositResult = $standard->deposit(new Money(50, 'PLN'));  // saldo = 150
        $standardWithdrawResult = $standard->withdraw(new Money(20, 'PLN')); // saldo = 130

        // 3. assertTrue (Sprawdź wynik)
        $this->assertTrue(
            $standardDepositResult->equals(new Money(150, 'PLN')),
            'Saldo po depozycie powinno wynosić 150 PLN'
        );

        $this->assertTrue(
            $standardWithdrawResult->equals(new Money(130, 'PLN')),
            'Saldo po wypłacie powinno wynosić 130 PLN'
        );
    }

    public function testDepositAccount(): void
    {
        // 1. Arrange (Przygotuj dane)
        $deposit = new DepositAccount(new Money(100, 'PLN'));       

        // 2. Act (Wykonaj akcję)
        $depositResult = $deposit->deposit(new Money(50, 'PLN'));   // saldo = 150

        // 3. assertTrue (Sprawdź wynik)
        $this->assertTrue(
            $depositResult->equals(new Money(150, 'PLN')),
            'Saldo lokaty po depozycie powinno wynosić 150 PLN'
        );
    }
}