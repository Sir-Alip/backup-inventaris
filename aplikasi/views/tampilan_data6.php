<?php
ob_start(); // Start output buffering
?>
<b>
    <h1 align= 'center'> DAFTAR BARANG </h1>
</b>
<div style="width:100%;overflow:auto; ">
<table class="table table-striped " >
                <thead>
                    <tr >
                        <th scope="col">Id</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah Dokumen Pemesanan</th>
                        <th scope="col">Total Kuantitas Pemesanan</th>
                        <th scope="col">Total Nilai Pemesanan</th>
                        <th scope="col">Jumlah Dokumen Penerimaan</th>
                        <th scope="col">Total Kuantitas Diterima</th>
                        <th scope="col">Total Nilai Diterima</th>
                        <th scope="col">Jumlah Dokumen Pembayaran</th>
                        <th scope="col">Total Kuantitas Dibayar</th>
                        <th scope="col">Total Nilai Pembayaran</th>
                    </tr>
                    </thead>
                    <tbody >
                    <?php foreach($data as $item): ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['nama_barang'] ?></td>
                            <td><?php echo $item['jumlah_dokumen_pemesanan'] ?></td>
                            <td><?php echo $item['total_kuantitas_pemesanan'] ?></td>
                            <td><?php echo $item['total_nilai_pemesanan'] ?></td>
                            <td><?php echo $item['jumlah_dokumen_penerimaan'] ?></td>
                            <td><?php echo $item['total_kuantitas_diterima'] ?></td>
                            <td><?php echo $item['total_nilai_diterima'] ?></td>
                            <td><?php echo $item['jumlah_dokumen_pembayaran'] ?></td>
                            <td><?php echo $item['total_kuantitas_dibayar'] ?></td>
                            <td><?php echo $item['total_nilai_pembayaran'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
</div>
<?php
$content = ob_get_clean(); // Capture the content
include 'aplikasi/views/kosong.php'; // Include the layout
