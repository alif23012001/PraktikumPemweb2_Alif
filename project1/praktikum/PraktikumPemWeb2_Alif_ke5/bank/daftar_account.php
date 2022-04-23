<?php
require_once './account_bank.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Account Bank</title>
</head>

<body>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>No. Account</th>
                <th>Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;

            $arrAccount = [
                $alif = new Account('C001', 'Alif', 6000000),
                $afgan = new Account('C002', 'Afgan', 5350000),
                $ajis = new Account('C003', 'Ajis', 2500000)
            ];

            foreach ($arrAccount as $valueAccount) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $valueAccount->getProperties('nomor'); ?></td>
                    <td><?= $valueAccount->getProperties('nama'); ?></td>
                    <td><?= number_format($valueAccount->getProperties('saldo'), 2, ',', '.'); ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>