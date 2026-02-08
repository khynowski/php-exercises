<?php
declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\InterfaceSegregation;

interface DepositableAtmInterface
{
    public function deposit(): void;
}