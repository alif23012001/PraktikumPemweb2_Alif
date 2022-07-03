<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Matakuliah</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Matakuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Sks</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $matkul -> id ?></td>
                <td><?php echo $matkul -> nama ?></td>
                <td><?php echo $matkul -> sks ?></td>
                <td><?php echo $matkul -> kode ?></td>

            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>