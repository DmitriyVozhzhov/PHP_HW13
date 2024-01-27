<?php


class BankAccount
{
 private string $accountID;
 private float $balance;


    /**
     * @throws Exception
     */
    public function __construct(string $accountID, float $balance){
     $this->setAccountID($accountID);
     $this->setBalance($balance);
 }

    /**
     * @throws Exception
     */
    public function deposit(int $sum):void
    {
        if ($sum <= 0){
            throw new Exception('Сума поповнення повинна бути більше нуля');
        }
        $this->balance += $sum;
    }

    /**
     * @throws Exception
     */
    public function withdrawal(int $sum):void
    {
        if ($sum < 0){
            throw new Exception('Сума зняття повинна бути більше нуля');
        }

        if ($sum > $this->balance){
            throw new Exception('Неможна зняти більше коштів ніж у тебе є на рахунку');
        }

        $this->balance -= $sum;
    }
    /**
     * @param string $accountID
     */
    public function setAccountID(string $accountID): void
    {
        $this->accountID = $accountID;
    }

    /**
     * @return string
     */
    public function getAccountID(): string
    {
        return $this->accountID;
    }

    /**
     * @param float $balance
     * @throws Exception
     */
    public function setBalance(float $balance): void
    {
        if ($balance < 0){
            throw new Exception('Баланс не може бути менше нуля');
        }
        $this->balance = $balance;

    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }
}