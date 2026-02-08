<?php
declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\DependencyInversion;

interface DataSourceInterface
{
    public function getData(): string;
}