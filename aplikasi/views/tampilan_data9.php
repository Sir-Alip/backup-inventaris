<?php
ob_start(); // Start output buffering
?>
<b>
    <h1 align= 'center'> DAFTAR KASIR </h1>
</b>
<div style="width:100%;overflow:auto; ">
<table class="table table-striped " >
                <thead>
                    <tr >
                        <th scope="col">Id</th>
                        <th scope="col">Nama Kasir</th>
                        <th scope="col">Jumlah Dokumen Pembayaran</th>
                        <th scope="col">Total Nilai Pembayaran</th>
                        <th scope="col">Total Nilai Pemesanan</th>
                    </tr>
                    </thead>
                    <tbody >
                    <?php foreach($data as $item): ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['nama_kasir'] ?></td>
                            <td><?php echo $item['jumlah_dokumen_pembayaran'] ?></td>
                            <td><?php echo $item['total_nilai_pembayaran'] ?></td>
                            <td><?php echo $item['total_nilai_pemesanan'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
</div>
<?php
$content = ob_get_clean(); // Capture the content
include 'aplikasi/views/kosong.php'; // Include the layout
