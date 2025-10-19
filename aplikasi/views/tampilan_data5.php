<?php
ob_start(); // Start output buffering
?>
<b>
    <h1 align= 'center'> RINCIAN PENERIMAAN </h1>
</b>
<div style="width:100%;overflow:auto; ">
<table class="table table-striped " >
                <thead>
                    <tr >
                        <th scope="col">Id</th>
                        <th scope="col">Kuantitas Diterima</th>
                        <th scope="col">Harga Diterima</th>
                        <th scope="col">Jumlah Diterima</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Tanggal Penerimaan</th>
                        <th scope="col">Nama Yang Menerima</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Nomor Pemesanan</th>
                        <th scope="col">Nama Vendor</th>
                        <th scope="col">Kuantitas Pesanan</th>
                        <th scope="col">Harga Pesanan</th>
                        <th scope="col">Jumlah Pemesanan</th>
                        <th scope="col">Tanggal Pembayaran</th>
                        <th scope="col">Nomor Pembayaran</th>
                        <th scope="col">Nama Kasir</th>
                    </tr>
                    </thead>
                    <tbody >
                    <?php foreach($data as $item): ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['kuantitas_diterima'] ?></td>
                            <td><?php echo $item['harga_diterima'] ?></td>
                            <td><?php echo $item['jumlah_diterima'] ?></td>
                            <td><?php echo $item['nama_barang'] ?></td>
                            <td><?php echo $item['tanggal_penerimaan'] ?></td>
                            <td><?php echo $item['nama_yang_menerima'] ?></td>
                            <td><?php echo $item['tanggal_pemesanan'] ?></td>
                            <td><?php echo $item['nomor_pemesanan'] ?></td>
                            <td><?php echo $item['nama_vendor'] ?></td>
                            <td><?php echo $item['kuantitas_pesanan'] ?></td>
                            <td><?php echo $item['harga_pesanan'] ?></td>
                            <td><?php echo $item['jumlah_pemesanan'] ?></td>
                            <td><?php echo $item['tanggal_pembayaran'] ?></td>
                            <td><?php echo $item['nomor_pembayaran'] ?></td>
                            <td><?php echo $item['nama_kasir'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
</div>
<?php
$content = ob_get_clean(); // Capture the content
include 'aplikasi/views/kosong.php'; // Include the layout
