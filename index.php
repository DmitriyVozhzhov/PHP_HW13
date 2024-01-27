<?php

declare(strict_types=1);

require_once './classes/BankAccount.php';


try {
    $bankAccount = new BankAccount('dmitr1111',0);
    echo "Початковий баланс " . $bankAccount->getBalance() . PHP_EOL;
    $bankAccount->deposit(100);
    echo "Баланс після внесення коштів " .  $bankAccount->getBalance() . PHP_EOL;
    $bankAccount->withdrawal(51);
    echo "Баланс після зняття коштів " .  $bankAccount->getBalance() . PHP_EOL;
} catch (Exception $e){
    echo "Помилка: " . $e->getMessage() . PHP_EOL;
}
