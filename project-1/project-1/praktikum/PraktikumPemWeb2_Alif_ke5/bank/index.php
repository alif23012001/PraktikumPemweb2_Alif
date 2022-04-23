<?php
require_once './account_bank.php';
require_once './daftar_account.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTransfer)
    {
        Account::withdraw($uangTransfer, false);
        $destination->deposit($uangTransfer, false);

        echo "Transfer sejumlah " .  number_format($uangTransfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$alif = new AccountBank('C001', 'alif', 500000);
$afgan = new AccountBank('C002', 'afgan', 0);
$ajis = new AccountBank('C003', 'ajis', 0);

$alif->deposit(1000000);

$alif->doTransfer($ajis, 1500000);

$alif->doTransfer($afgan, 500000);

$afgan->deposit(-2500000);
?>