<br>
<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>jumlah</th>
        <th>tanggal</th>


    </tr>
    </thead>
    <?php
    include "koneksi.php";


    $sql="select * from buku";


    $hasil=mysqli_query($kon,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
        $no++;
        ?>
        <tbody>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $data["kode_buku"]; ?></td>
            <td><?php echo $data["nama_buku"]; ?></td>
            <td><?php echo $data["jumlah_buku"];   ?></td>
            <td><?php echo $data["tanggal"];   ?></td>
        </tr>
        </tbody>
        <?php
    }
    ?>
</table>