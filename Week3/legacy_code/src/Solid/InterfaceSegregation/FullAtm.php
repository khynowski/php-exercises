<?php
declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\InterfaceSegregation;

class FullAtm implements DepositableAtmInterface, PrintableAtmInterface, WithdrawableAtmInterface
{
    public function print(): void
    {}
    public function withdraw(): void
    {}
    public function deposit(): void
    {}
}