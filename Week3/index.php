<?php

declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';
use Hynkar\PhpStarter\Money;
use Hynkar\PhpStarter\Service\StaticExchangeRateProvider;
use Hynkar\PhpStarter\Service\FakeProvider;

$provider = new StaticExchangeRateProvider();
$money3 = new Money(51, 'USD');
$moneyConverted = $money3->convert('PLN', $provider);
echo $money3->getAmount() . ' ' . $money3->getCurrency() . ' to po przeliczeniu ' . $moneyConverted->getAmount() . ' ' . $moneyConverted->getCurrency();

echo "</br>";

$fakeProvider = new FakeProvider();
$money4 = new Money(51, 'USD');
$moneyConverted = $money4->convert('PLN', $fakeProvider);
echo $money4->getAmount() . ' ' . $money4->getCurrency() . ' to po przeliczeniu ' . $moneyConverted->getAmount() . ' ' . $moneyConverted->getCurrency();