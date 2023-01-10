<div class="container"><br><br>
<a href="index.php" class="btn blue darken-2"><i class="material-icons left">arrow_back</i> Kembali</a><br><br>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Hasil</th>
                <th>Waktu</th>
                <th rowspan=2>Opsi</th>
            </tr>
        </thead>
            <?php 
            $no = 1;
            $data = mysqli_query($connect,"SELECT a.*, b.* FROM mhs a, bimbingan b WHERE a.nim=b.nim AND b.nim ='$username'");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tbody>
                    <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['id_bimbingan']; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['nama_mhs']; ?></td>
                    <td><?php echo $d['tgl']; ?></td>
                    <td><?php echo $d['hasil']; ?></td>
                    <td><?php echo $d['jam']; ?></td>
                    <td>
                        <a href="index.php?page=upBimbingan&&id_bimbingan=<?php echo $d['id_bimbingan']; ?>">Edit</a> |
                        <a href="index.php?page=delBimbingan&&id_bimbingan=<?php echo $d['id_bimbingan']; ?>">Hapus</a>
                    </td>
                    </tr>
                </tbody>
                <?php 
            }
		        ?>
	</table>
    <br>
    <a class="btn blue darken-2" href="pages/cetakBimb.php?nim=<?php echo $username; ?>">Cetak</a><br><br><br>
    </div>