<?php
declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\DependencyInversion;

class PdfReport
{
    private DataSourceInterface $data;
    public function __construct(DataSourceInterface $data)
    {
        $this->data = $data;
    }

    public function generate(): string
    {
        return "PDF: " . $this->data->getData();
    }
}