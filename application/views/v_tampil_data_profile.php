<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA_Compatible" content="IE=edge">
        <meta name="viewport" content="widt=device-width", initial-scale=1.0> 
      <title>Document</title>
    </head>
<body>
          <h2>Profile</h2>
          <a href="<?= base_url('profile/tambah_data')?>"> ~ Tambah Data ~ </a>
          <p>ini adalah title function pada Data</p>
          <p>ini adalah parsing dari parameter 1 <?= $nama ?></p>
          <p>ini adalah parsing dari parameter 1 <?= $alamat ?></p>
          <p>ini adalah parsing dari parameter 1 <?= $nohp ?></p>
</body>
   <table border="1">
              <thead>
              <tr>
                 <th>No</th>
                 <th>Nama Depan</th>
                 <th>Nama Belakang</th>
                 <th>Tempat Lahir</th>
                 <th>Tanggal Lahir</th>
                 <th>Jenis Kelamin</th>
                 <th>Alamat</th>
                 <th>Jenjang Pendidikan</th>
               </tr>
               </thead>

        <tbody>
            <?php $No =1; foreach($profile as $p)?>
            <tr>
                <td><?= $No ?></td>
                <td><?= $p->nama_depan ?></td>
                <td><?= $p->nama_belakang ?></td>
                <td><?= $p->tempat_lahir ?></td>
                <td><?= $p->tanggal_lahir ?></td>
                <td><?= $p->jenis_kelamin ?></td>
                <td><?= $p->alamat ?></td>
                <td><?= $p->jenjang_pendidikan ?></td>
            </tr>
            <?php $no++;}?>
            </tbody>
    </table>
    ?>