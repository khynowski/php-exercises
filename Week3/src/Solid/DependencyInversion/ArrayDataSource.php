<?php
declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\DependencyInversion;

class ArrayDataSource implements DataSourceInterface
{
    public function getData(): string
    {
        return "Dane z tablicy";
    }
}