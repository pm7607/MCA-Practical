<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $amount<br>";
        }
    }

    public function withdraw($amount) {
        if ($amount >= 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn: $amount<br>";
        } else {
            echo "Insufficient balance!<br>";
        }
    }
}

$acc = new BankAccount("123456789", 1000);
echo "Account Number: " . $acc->getAccountNumber() . "<br>";
echo "Balance: " . $acc->getBalance() . "<br>";
$acc->deposit(500);
$acc->withdraw(300);
echo "Final Balance: " . $acc->getBalance();
?>
