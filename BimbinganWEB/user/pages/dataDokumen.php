<div class="container"><br><br>
<a href="index.php" class="btn blue darken-2"><i class="material-icons left">arrow_back</i> Kembali</a><br><br>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Nama Dokumen</th>
                <th>Penginput</th>
                <th rowspan=2>Opsi</th>
            </tr>
        </thead>
            <?php 
            $no = 1;
            $data = mysqli_query($connect,"SELECT a.*, b.* FROM mhs a, dokumen b WHERE a.nim=b.nim AND b.nim='$username'");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tbody>
                    <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['id_dokumen']; ?></td>
                    <td><?php echo $d['tgl_dokumen']; ?></td>
                    <td><?php echo $d['nama_dokumen']; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td>
                        <a href="index.php?page=upDokumen&&id_dokumen=<?php echo $d['id_dokumen']; ?>">Edit</a> |
                        <a href="index.php?page=delDokumen&&id_dokumen=<?php echo $d['id_dokumen']; ?>">Hapus</a>
                    </td>
                    </tr>
                </tbody>
                <?php 
            }
		        ?>
	</table>
    </div>