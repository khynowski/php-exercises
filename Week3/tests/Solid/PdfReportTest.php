<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Hynkar\PhpStarter\Solid\DependencyInversion\ArrayDataSource;
use Hynkar\PhpStarter\Solid\DependencyInversion\PdfReport;

class PdfReportTest extends TestCase
{
    public function testPdfGenerate(): void
    {
        // 1. Arrange (Przygotuj dane)
        $data = new ArrayDataSource();
        $pdfReport = new PdfReport($data);

        // 2. Act (Wykonaj akcję)
        $result = $pdfReport->generate();
        // 3. Assert (Sprawdź wynik)
        $expectedResult = 'PDF: Dane z tablicy';

        $this->assertEquals($expectedResult, $result);
    }
}