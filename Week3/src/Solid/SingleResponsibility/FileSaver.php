<?php

declare(strict_types=1);
namespace Hynkar\PhpStarter\Solid\SingleResponsibility;

class FileSaver
{
    public function save(string $filename, string $content): void
    {
        echo file_put_contents($filename, $content);
    }
}