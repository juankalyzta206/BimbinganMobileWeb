package com.Bimbingan.Dosen;

public class Server {
    public static final String URL = "http://192.168.43.138/BimbinganAPI/";
    public static final String URL_GET_BIMBINGAN = "http://192.168.43.138/BimbinganAPI/Bimbingan.php";
    public static final String URL_GET_ALLBimbingan = "http://192.168.43.138/BimbinganAPI/TampilSemuaMhs.php";
    public static final String URL_GET_Berita = "http://192.168.43.138/BimbinganAPI/Berita.php";
    public static final String URL_GET_ALLBerita = "http://192.168.43.138/BimbinganAPI/TampilSemuaBerita.php";
    public static final String URL_GET_DetBerita = "http://192.168.43.138/BimbinganAPI/TampilBerita.php";
    public static final String URL_GET_Detprofile = "http://192.168.43.138/BimbinganAPI/Profile.php";
    public static final String URL_Profile = "http://192.168.43.138/BimbinganAPI/TampilSemuaProfile.php";

    public static final String KEY_EMP_Nim = "nim";
    public static final String KEY_EMP_Nip = "nip";
    public static final String KEY_EMP_Hasil = "hasil";
    public static final String KEY_EMP_IDBimbingan = "id_bimbingan";
    public static final String KEY_EMP_IDBerita = "id_berita";
    public static final String KEY_EMP_JUDUL = "judul";
    public static final String KEY_EMP_ISI = "isi";

    //JSON Tags
    public static final String TAG_JSON_ARRAY="result";
    public static final String TAG_JSON_ARRAY2="result2";
    public static final String TAG_JSON_ARRAY4="result4";
    public static final String TAG_IDBimbingan = "id_bimbingan";
    public static final String TAG_NAMA = "nama";
    public static final String TAG_Nim = "nim";
    public static final String TAG_Hasil = "hasil";
    public static final String TAG_IDBERITA = "id_berita";
    public static final String TAG_JUDUL = "judul";
    public static final String TAG_ISI = "isi";
    public static final String TAG_TGLBERITA = "tgl_berita";
    public static final String TAG_JAMBerita = "jam_berita";
    public static final String TAG_Nip = "nip";
    public static final String TAG_NamaDos = "nama_dosen";
    public static final String TAG_EmailDos = "email_dosen";
    public static final String TAG_AlamatDos = "alamat_dosen";
    public static final String TAG_TelpDos = "telp_dosen";


    //ID karyawan
    //emp itu singkatan dari Employee
    public static final String Ext_ID = "ext_NIM";
    public static final String Ext_Nim = "ext_Nim";
    public static final String Ext_Hasil = "ext_Hasil";
    public static final String Ext_IDBR = "ext_idbr";
    public static final String Ext_Judul = "ext_judul";
    public static final String Ext_isi = "ext_isi";
    public static final String Ext_tgl = "ext_tgl";
    public static final String Ext_jam = "ext_jam";
    public static final String Ext_Nip = "ext_nip";
    public static final String Ext_NamaDos = "ext_namados";
    public static final String Ext_Email = "ext_email";
    public static final String Ext_Tlp = "ext_tlp";
    public static final String Ext_Almt = "ext_almt";

}
