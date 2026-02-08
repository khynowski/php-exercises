<?php
declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\InterfaceSegregation;

class SimpleDepository implements DepositableAtmInterface
{
    public function deposit(): void
    {}
}