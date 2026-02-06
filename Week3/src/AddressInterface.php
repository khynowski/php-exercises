<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter;

interface AddressInterface
{
    public function getFullString(): string;
}