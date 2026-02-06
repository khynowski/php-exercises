<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Hynkar\PhpStarter\Solid\SingleResponsibility\ReportData;
use Hynkar\PhpStarter\Solid\SingleResponsibility\HtmlFormatter;

class ReportTest extends TestCase
{
    public function testItFormatsReportToHtml(): void
    {
        // 1. Arrange (Przygotuj dane)
        $data = new ReportData('2026-01-30', 500);
        $formatter = new HtmlFormatter();  

        // 2. Act (Wykonaj akcję)
        $result = $formatter->format($data);

        // 3. Assert (Sprawdź wynik)
        $expectedHtml = '<h1>Raport z dnia 2026-01-30</h1><p>Kwota: 500 PLN</p>';

        $this->assertEquals($expectedHtml, $result);
    }
}