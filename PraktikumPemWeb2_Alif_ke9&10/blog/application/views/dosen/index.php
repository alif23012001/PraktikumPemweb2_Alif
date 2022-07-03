<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dosen</title>
    <script>
        function hapusdosen(pesan){
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
    <h3>dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nidn</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($dosen as $dns) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $dns -> nama ?></td>
                <td><?php echo $dns -> nidn ?></td>
                <td><?php echo $dns -> pendidikan ?></td>
                <td>
                <a href= <?php echo base_url("index.php/dosen/detail/$dns->id") ?> 
                    class="btn btn-primary btn-lg active" >Detail</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/dosen/edit/$dns->id") ?> 
                    class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/dosen/delete/$dns->id") ?> 
                    class="btn btn-danger btn-lg active" 
                    onclick=" return hapusdosen('Apakah Anda yakin ingin menghapus dosen yang bernama <?php echo $dns-> nama ?> ?')" >Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href= <?php echo base_url("index.php/dosen/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
    </div>
</body>
</html>