<?php

    include 'koneksi.php';

    $id_pembayaran = $_POST['id_pembayaran'];
    $kode_daftar   = $_POST['kode_daftar'];


    $query    = "UPDATE tbl_pembayaran SET b_daftar='0', bukti_daftar='0', validasi_daftar='0' WHERE kode_daftar='$kode_daftar'";
    $update   = mysqli_query($konek, $query)or die(mysqli_error($konek));

    $querydelete   = "DELETE FROM tbl_pengumuman WHERE kode_daftar='$kode_daftar' ORDER BY id_pengumuman DESC LIMIT 1";
    $simpan       = mysqli_query($konek, $querydelete)or die(mysqli_error($konek));

    if($update)
    {
        echo "<br><br><br><strong><center><i>Berhasil Hapus Validasi!";
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
