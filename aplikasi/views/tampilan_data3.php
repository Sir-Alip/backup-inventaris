<?php
ob_start(); // Start output buffering
?>
<b>
    <h1 align= 'center'> DAFTAR PEMBAYARAN </h1>
</b>
<div style="width:100%;overflow:auto; ">
<table class="table table-striped " >
                <thead>
                    <tr >
                        <th scope="col">Id</th>
                        <th scope="col">Tanggal Pembayaran</th>
                        <th scope="col">Nomor Pembayaran</th>
                        <th scope="col">Nama Kasir</th>
                        <th scope="col">Jumlah Jenis Barang Dibayar</th>
                        <th scope="col">Total Nilai Pembayaran</th>
                        <th scope="col">Tanggal Penerimaan</th>
                        <th scope="col">Nama Yang Menerima</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Nomor Pemesanan</th>
                        <th scope="col">Jumlah Jenis Barang Dipesan</th>
                        <th scope="col">Total Nilai Pemesanan</th>
                        <th scope="col">Nama Vendor</th>
                        <th scope="col">...</th>
                    </tr>
                    </thead>
                    <tbody >
                    <?php foreach($data as $item): ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['tanggal_pembayaran'] ?></td>
                            <td><?php echo $item['nomor_pembayaran'] ?></td>
                            <td><?php echo $item['nama_kasir'] ?></td>
                            <td><?php echo $item['jumlah_jenis_barang_dibayar'] ?></td>
                            <td><?php echo $item['total_nilai_pembayaran'] ?></td>
                            <td><?php echo $item['tanggal_penerimaan'] ?></td>
                            <td><?php echo $item['nama_yang_menerima'] ?></td>
                            <td><?php echo $item['tanggal_pemesanan'] ?></td>
                            <td><?php echo $item['nomor_pemesanan'] ?></td>
                            <td><?php echo $item['jumlah_jenis_barang_dipesan'] ?></td>
                            <td><?php echo $item['total_nilai_pemesanan'] ?></td>
                            <td><?php echo $item['nama_vendor'] ?></td>

                            <td>
                                <a href="http://localhost/46123012/praktikum_01/daftar_pembayaran/">Lihat</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
</div>
<?php
$content = ob_get_clean(); // Capture the content
include 'aplikasi/views/kosong.php'; // Include the layout
