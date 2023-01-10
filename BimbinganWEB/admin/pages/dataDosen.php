<div class="container"><br><br>
<a href="index.php" class="btn blue darken-2"><i class="material-icons left">arrow_back</i> Kembali</a><br><br>
    <div class="row">
        <div class="col s12">
            <table class="highlight centered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>NIP</th>
                        <th rowspan=2>Opsi</th>
                    </tr>
                </thead>
                    <?php 
                    $no = 1;
                    $data = mysqli_query($connect,"SELECT * FROM dosen ORDER BY nama_dosen");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tbody>
                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama_dosen']; ?></td>
                            <td><?php echo $d['email_dosen']; ?></td>
                            <td><?php echo $d['telp_dosen']; ?></td>
                            <td><?php echo $d['alamat_dosen']; ?></td>
                            <td><?php echo $d['nip']; ?></td>
                            <td>
                                <a href="index.php?page=upDosen&&nip=<?php echo $d['nip']; ?>">Edit</a> |
                                <a href="index.php?page=delDosen&&nip=<?php echo $d['nip']; ?>">Hapus</a>
                            </td>
                            </tr>
                        </tbody>
                        <?php 
                    }
                        ?>
            </table>
        </div>
    </div>
</div>