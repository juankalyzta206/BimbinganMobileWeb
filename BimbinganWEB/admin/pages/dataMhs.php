<div class="container"><br><br>
<a href="index.php" class="btn blue darken-2"><i class="material-icons left">arrow_back</i> Kembali</a><br><br>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>NIM</th>
                <th>Dospem</th>
                <th rowspan=2>Opsi</th>
            </tr>
        </thead>
            <?php 
            $no = 1;
            $data = mysqli_query($connect,"SELECT a.*, b.nama_dosen FROM mhs a, dosen b WHERE a.nip=b.nip ORDER BY nama_mhs");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tbody>
                    <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_mhs']; ?></td>
                    <td><?php echo $d['email_mhs']; ?></td>
                    <td><?php echo $d['telp_mhs']; ?></td>
                    <td><?php echo $d['alamat_mhs']; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['nama_dosen']?></td>
                    <td>
                        <a href="index.php?page=upMhs&&nim=<?php echo $d['nim']; ?>">Edit</a> |
                        <a href="index.php?page=delMhs&&nim=<?php echo $d['nim']; ?>">Hapus</a>
                    </td>
                    </tr>
                </tbody>
                <?php 
            }
		        ?>
	</table><br><br><br>
    </div>