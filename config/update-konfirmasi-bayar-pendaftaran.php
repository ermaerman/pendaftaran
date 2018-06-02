<?php

    include 'koneksi.php';

    $id_pembayaran = $_POST['id_pembayaran'];
    $kode_daftar   = $_POST['kode_daftar'];

    $query    = "UPDATE tbl_pembayaran SET validasi_daftar='1' WHERE kode_daftar='$kode_daftar'";
    $update   = mysqli_query($konek, $query)or die(mysqli_error($konek));

    $queryinput   = "INSERT INTO tbl_pengumuman (kode_daftar) SELECT kode_daftar FROM tbl_pembayaran WHERE validasi_daftar='1' ORDER BY id_pembayaran DESC LIMIT 1";
    $simpan       = mysqli_query($konek, $queryinput)or die(mysqli_error($konek));

    if($update)
    {
        echo "<br><br><br><strong><center><i>Berhasil Validasi!";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../tata-usaha/tu.php?content=transaksi-pendaftaran">';



    }
    else {
            print"
                <script>
                    alert(\"Balasan gagal ditambah!\");
                    history.back(-1);
                </script>";
        }


?>
