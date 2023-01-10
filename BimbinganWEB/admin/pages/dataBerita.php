<div class="container"><br><br>
<a href="index.php" class="btn blue darken-2"><i class="material-icons left">arrow_back</i> Kembali</a><br><br>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Gambar</th>
                <th>Penginput</th>
                <th rowspan=2>Opsi</th>
            </tr>
        </thead>
            <?php 
            $no = 1;
            $data = mysqli_query($connect,"SELECT * FROM berita");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tbody>
                    <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['id_berita']; ?></td>
                    <td><?php echo $d['tgl_berita']; ?></td>
                    <td><?php echo $d['jam_berita']; ?></td>
                    <td><?php echo $d['judul']; ?></td>
                    <td><?php echo substr($d['isi'], 0, 20); ?>...</td>
                    <td><img src="gambarberita/<?php echo $d['gambar_berita']; ?>" style="width: 120px;float: left;margin-bottom: 5px;"></td>
                    <td><?php echo $d['id_admin']; ?></td>
                    <td>
                        <a href="index.php?page=upBerita&&id_berita=<?php echo $d['id_berita']; ?>">Edit</a> |
                        <a href="index.php?page=delBerita&&id_berita=<?php echo $d['id_berita']; ?>">Hapus</a>
                    </td>
                    </tr>
                </tbody>
                <?php 
            }
		        ?>
	</table>
    </div>