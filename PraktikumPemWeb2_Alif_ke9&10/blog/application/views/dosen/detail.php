<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail dosen</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggil Lahir</th>
                <th>Nidn</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $pengajar -> id ?></td>
                <td><?php echo $pengajar -> nama ?></td>
                <td><?php echo $pengajar -> gender ?></td>
                <td><?php echo $pengajar -> tmp_lahir ?></td>
                <td><?php echo $pengajar -> tgl_lahir ?></td>
                <td><?php echo $pengajar -> nidn ?></td>
                <td><?php echo $pengajar -> pendidikan ?></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>