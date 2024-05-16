<h3> Tambah Minuman </h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="120"> NamaMinuman </td>
            <td> <input type="text" name="NamaMinuman"> </td>
        </tr>
        <tr>
            <td> Harga </td>
            <td> <input type="text" name="Harga"> </td>
        </tr>
        <tr>
            <td> Ukuran </td>
            <td> <input type="text" name="Ukuran"> </td>
        </tr>
        <tr>
            <td> Pembayaran </td>
            <td> <input type="text" name="Pembayaran"> </td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit" name="proses" value="Simpan"> </td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into minuman set
    NamaMinuman = '$_POST[NamaMinuman]',
    Harga = '$_POST[Harga]',
    Ukuran = '$_POST[Ukuran]',
    Pembayaran = '$_POST[Pembayaran]'");

    echo "Data Minuman baru telah tersimpan";

}
?>

<h3> Daftar Minuman </h3>

<table border="1">
    <tr>
        <th>NamaMinuman</th>
        <th>Harga</th>
        <th>Ukuran</th>
        <th>Pembayaran</th>
    </tr>

    <?php
    include "koneksi.php";


    $ambildata = mysqli_query($koneksi,"select * from minuman");
    /* While untuk mengulang */
    while($tampil = mysqli_fetch_array($ambildata)){
        echo"
        <tr>
        <td>$tampil[NamaMinuman]</td>
        <td>$tampil[Harga]</td>
        <td>$tampil[Ukuran]</td>
        <td>$tampil[Pembayaran]</td>
        </tr>";
    }
    ?>
</table>