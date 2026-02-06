<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\SingleResponsibility;

class HtmlFormatter
{
    public function format(ReportData $report): string
    {
        return "<h1>Raport z dnia ". $report->getDate() ."</h1><p>Kwota: ".$report->getAmount()." PLN</p>";
    }
}