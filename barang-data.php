<h3> Daftar Minuman</h3>

<table border="1">
    <tr>
        <th>NamaMinuman</th>
        <th>Harga</th>
        <th>Ukura</th>
        <th>Pembayaran</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from minuman");
    /* While untuk mengulang */
    while($tampil = mysqli_fetch_array($ambildata)){
        echo"
        <tr>
        <td>$namaminuman[NamaMinuman</td>
        <td>$harga[Harga]</td>
        <td>$ukurancup[Ukuran]</td>
        <td>$pembayaran[Pembayaran]</td>
        </tr>";
        $no++;
    }
    ?>
</table>