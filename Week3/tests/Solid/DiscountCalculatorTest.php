<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Hynkar\PhpStarter\Solid\OpenClosed\DiscountCalculator;
use Hynkar\PhpStarter\Solid\OpenClosed\SummerDiscount;
use Hynkar\PhpStarter\Solid\OpenClosed\WinterDiscount;

class DiscountCalculatorTest  extends TestCase
{
    public function testAppliesSummerDiscount(): void
    {
        // 1. Arrange (Przygotuj dane)
        $calculator = new DiscountCalculator();
        $price = 1000;

        // 2. Act (Wykonaj akcję)
        $summerPriceResult = $calculator->calculate($price, new SummerDiscount());
        

        // 3. Assert (Sprawdź wynik)
        $expectedValue = 900;

        $this->assertEquals($expectedValue, $summerPriceResult);
    }

    public function testAppliesWinterDiscount(): void
    {
        // 1. Arrange (Przygotuj dane)
        $calculator = new DiscountCalculator();
        $price = 1000;

        // 2. Act (Wykonaj akcję)
        $winterPriceResult = $calculator->calculate($price, new WinterDiscount());

        // 3. Assert (Sprawdź wynik)
        $expectedValue = 800;

        $this->assertEquals($expectedValue, $winterPriceResult);
    }
}