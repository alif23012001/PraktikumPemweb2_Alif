<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matakuliah</title>
    <script>
        function hapusmatakuliah(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="col-md-12">
    <h3>matakuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Sks</th>
                <th>Kode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $mtkul) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mtkul -> nama ?></td>
                <td><?php echo $mtkul -> sks ?></td>
                <td><?php echo $mtkul -> kode ?></td>
                <td>
                <a href= <?php echo base_url("index.php/matakuliah/detail/$mtkul->id") ?> 
                    class="btn btn-primary btn-lg active" >Detail</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/matakuliah/edit/$mtkul->id") ?> 
                    class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/matakuliah/delete/$mtkul->id") ?> 
                    class="btn btn-danger btn-lg active" 
                    onclick=" return hapusmatakuliah('Apakah Anda yakin ingin menghapus matakuliah yang bernama <?php echo $mtkul-> nama ?> ?')" >Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href= <?php echo base_url("index.php/matakuliah/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
    </div>
</body>
</html>