# Host: localhost  (Version 5.5.5-10.3.15-MariaDB)
# Date: 2020-02-11 14:50:07
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` varchar(11) NOT NULL DEFAULT '',
  `nama_admin` varchar(50) DEFAULT NULL,
  `password_admin` varchar(35) DEFAULT NULL,
  `email_admin` varchar(35) DEFAULT NULL,
  `telp_admin` varchar(13) DEFAULT NULL,
  `alamat_admin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES ('123','admin','admin','admin@gmail.com','08818624589','Kutasari'),('123456','Amirudin','000000','amirudin@gmail.com','085726097698','Purbalingga'),('456','Udin','456456','amirudin@yahoo.com','085782193431','Karangcegak');

#
# Structure for table "berita"
#

DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
  `id_berita` varchar(11) NOT NULL DEFAULT '0',
  `judul` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tgl_berita` date DEFAULT NULL,
  `jam_berita` time DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `id_admin` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_berita`),
  KEY `FKAdmin` (`id_admin`),
  CONSTRAINT `FKAdmin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "berita"
#

INSERT INTO `berita` VALUES ('BRT001','Judul Pertama','Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, fugit. Sit saepe illum temporibus dicta, facilis hic! Quis aliquid voluptatibus quam pariatur sint possimus iste, assumenda sequi. Consequuntur, amet molestias.','2019-12-25','18:30:00','GBR-logo-ubl.png','123'),('BRT002','Gambar Update','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, recusandae animi quaerat tenetur sunt adipisci repellat molestiae cum rerum repellendus veniam asperiores placeat saepe illum suscipit voluptates sed sequi ab!','2019-12-24','06:29:00','GBR-LABICT.png','123456'),('BRT003','Berita Keempat','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, recusandae animi quaerat tenetur sunt adipisci repellat molestiae cum rerum repellendus veniam asperiores placeat saepe illum suscipit voluptates sed sequi ab!','2020-03-23','06:35:00','GBR-LABICT.png','123456'),('BRT004','Berita Ketiga','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, recusandae animi quaerat tenetur sunt adipisci repellat molestiae cum rerum repellendus veniam asperiores placeat saepe illum suscipit voluptates sed sequi ab!','2019-12-31','20:35:00','GBR-LABICT.png','123456'),('BRT005','Cek Urutan','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, recusandae animi quaerat tenetur sunt adipisci repellat molestiae cum rerum repellendus veniam asperiores placeat saepe illum suscipit voluptates sed sequi ab!','2020-03-23','17:25:00','GBR-LABICT.png','123456'),('BRT006','Judul Diubah','Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt aperiam sint consectetur harum accusamus debitis pariatur necessitatibus, laudantium, voluptatum cupiditate quibusdam eius ex corrupti. Error doloremque minima velit odio non!','2020-01-13','12:30:00','GBR-labict.png','123456'),('BRT007','AAAAAAAA','llaskljfsdfljgvhkadjisgf','2020-02-18','06:30:00','GBR-wp3167891.jpg','123456');

#
# Structure for table "bimbingan"
#

DROP TABLE IF EXISTS `bimbingan`;
CREATE TABLE `bimbingan` (
  `id_bimbingan` varchar(11) NOT NULL DEFAULT '',
  `nim` varchar(11) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `hasil` varchar(255) DEFAULT NULL,
  `nip` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_bimbingan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "bimbingan"
#

INSERT INTO `bimbingan` VALUES ('BIM001','1812500724','2020-01-08','19:30:00',NULL,'360360'),('BIM002','1811502796','2020-01-28','09:45:00',NULL,'032300'),('BIM003','1811502796','2020-02-24','07:30:00','','032300'),('BIM004','1812500724','2020-02-18','09:45:00','','360360'),('BIM005','1811500360','2020-02-15','09:00:00','','230300'),('BIM006','1811500360','2020-02-18','10:42:00','','230300');

#
# Structure for table "dosen"
#

DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen` (
  `nip` varchar(11) NOT NULL DEFAULT '',
  `nama_dosen` varchar(50) DEFAULT NULL,
  `password_dosen` varchar(35) DEFAULT NULL,
  `email_dosen` varchar(35) DEFAULT NULL,
  `telp_dosen` varchar(13) DEFAULT NULL,
  `alamat_dosen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "dosen"
#

INSERT INTO `dosen` VALUES ('002303','Udin','002303','dosen3@gmail.com','085782193431','Karangcegak'),('032300','Amir','032300','dosen2@gmail.com','08818624589','Kutasari'),('181181','Yogi Angga','181181','dosen5@gmail.com','081213141516','Jambi'),('230300','Amirudin','230300','dosen1@gmail.com','085726097698','Purbalingga'),('360360','Yogi Angga Putra','360360','dosen4@gmail.com','081245456565','Pondok Lakah Permai');

#
# Structure for table "mhs"
#

DROP TABLE IF EXISTS `mhs`;
CREATE TABLE `mhs` (
  `nim` varchar(11) NOT NULL DEFAULT '',
  `nama_mhs` varchar(50) DEFAULT NULL,
  `password_mhs` varchar(35) DEFAULT NULL,
  `email_mhs` varchar(35) DEFAULT NULL,
  `telp_mhs` varchar(13) DEFAULT NULL,
  `alamat_mhs` varchar(255) DEFAULT NULL,
  `nip` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`nim`),
  KEY `FKDosen` (`nip`),
  CONSTRAINT `FKDosen` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "mhs"
#

INSERT INTO `mhs` VALUES ('1811500360','Yogi Angga Putra','360','1811500360@gmail.com','085712131415','Pondok Lakah Permai','230300'),('1811502796','Irennada','2796','irennada@gmail.com','085726097698','Pondok Aren','032300'),('1812500625','Erika Nur Komalasari','625','erika@gmail.com','08818624589','Taman Asri','002303'),('1812500724','Amirudin','724','1812500724@gmail.com','085726097698','Purbalingga','360360'),('1812500725','Nurul Azzahra','725','1812500725@gmail.com','08818624589','Pamulang','181181');

#
# Structure for table "dokumen"
#

DROP TABLE IF EXISTS `dokumen`;
CREATE TABLE `dokumen` (
  `id_dokumen` varchar(11) NOT NULL DEFAULT '',
  `nama_dokumen` varchar(255) DEFAULT NULL,
  `tgl_dokumen` date DEFAULT NULL,
  `nim` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_dokumen`),
  KEY `FKMahasiswa` (`nim`),
  CONSTRAINT `FKMahasiswa` FOREIGN KEY (`nim`) REFERENCES `mhs` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "dokumen"
#

INSERT INTO `dokumen` VALUES ('DOC002','Update-DOC-Cek lagi lah bosku.docx','2019-12-28','1812500724'),('DOC003','DOC-Cek lagi lah bosku.docx','2019-12-28','1812500724'),('DOC004','DOC-Cek bosku.docx','2019-12-30','1811500360'),('DOC005','Update-DOC-Project_IPBO_0724.docx','2020-01-17','1811502796');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `nama_usr` varchar(35) NOT NULL,
  `email_usr` varchar(35) NOT NULL,
  `tlp_usr` varchar(12) NOT NULL,
  `alamat_usr` text NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES ('nama','email@email','121212121212','asdsd','12121212','a01610228fe998f515a72dd730294d87','1'),('Amir','1812500724@student.budiluhur.ac.id','08578219589','Karangcegak','1812500720','ac43724f16e9241d990427ab7c8f4228','0'),('Amirudin','amir@gmail.com','085726097698','Purbalingga','1812500724','ac43724f16e9241d990427ab7c8f4228','1'),('Udin','amirudin@gmail.com','085726097698','Kutasari','1812500725','827ccb0eea8a706c4c34a16891f84e7b','1'),('Amir','1812500724@student.budiluhur.ac.id','08818624589','Karangcegak','1812500726','e10adc3949ba59abbe56e057f20f883e','1'),('Nur Fahmi Azis','nurfahmiazis19@gmail.com','02191075625','jl.queque','admin','21232f297a57a5a743894a0e4a801fc3','0'),('Amir','amir@gmail.com','085726097698','Purbalingga','admin1','e00cf25ad42683b3df678c61f42c6bda','0'),('Amirudin','amirudin@gmail.com','0857260000','Jl. in aja','Amirudin','202cb962ac59075b964b07152d234b70','0');
