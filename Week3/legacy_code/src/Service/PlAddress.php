<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Service;
use Hynkar\PhpStarter\AddressInterface;

class PlAddress implements AddressInterface
{
    private string $miasto;
    private string $ulica;
    private string $kodMiasta;
    public function __construct(string $miasto, string $ulica, string $kodMiasta)
    {
        $this->miasto = $miasto;
        $this->ulica = $ulica;
        $this->kodMiasta = $kodMiasta;
    }
    public function getFullString() :string
    {
        return $this->kodMiasta . ", " . $this->miasto . " ," . $this->ulica;
    }
}