<?php

declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

/*
use Hynkar\PhpStarter\Service\NotifySms;
use Hynkar\PhpStarter\Service\NotifyEmail;
use Hynkar\PhpStarter\Service\NotificationSender;
use Hynkar\PhpStarter\Repository\InMemoryUserRepository;
use Hynkar\PhpStarter\User;
use Hynkar\PhpStarter\Factory\MoneyFactory;
use Hynkar\PhpStarter\User;
use Hynkar\PhpStarter\Observer\UserRegisterService;
use Hynkar\PhpStarter\Observer\EmailNotifier;
use Hynkar\PhpStarter\Observer\AdminAlerter;
use Hynkar\PhpStarter\Singleton\Database;
*/
use  Hynkar\PhpStarter\Facade\NotificationFacade;
/*
$kasa = MoneyFactory::createFromFloat(100.25, 'EUR');
var_dump($kasa);

$adminAlert = new AdminAlerter();
$emailNotifier = new EmailNotifier();

$rejestracja = new UserRegisterService();
$rejestracja->attach($adminAlert);
$rejestracja->attach($emailNotifier);
$rejestracja->register(new User("Karol","test@test.te"));


$db1 = Database::getInstance();
$db2 = Database::getInstance();
var_dump($db1 === $db2);
*/

NotificationFacade::registerAndNotify("Jan", "jan@test.pl");