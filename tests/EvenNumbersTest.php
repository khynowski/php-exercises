<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\EvenNumbers;

final class EvenNumbersTest extends TestCase
{
    public function testManualFiltersOnlyEvenIntegers(): void
    {
        $data = [10.2, 12.2, 2, 3, 4, 5, 6, 8, 10];
        $this->assertSame([2 => 2, 4 => 4, 6 => 6, 7 => 8, 8 => 10], EvenNumbers::manual($data));
    }

    public function testAutoFiltersOnlyEvenIntegers(): void
    {
        $data = [10.2, 12.2, 2, 3, 4, 5, 6, 8, 10];
        $this->assertSame([2,4,6,8,10], array_values(EvenNumbers::auto($data)));
    }
}
