<?php
ob_start(); // Start output buffering
?>
<div style="width:100%;overflow:auto; ">
<table class="table table-striped " >
                <thead>
                    <tr >
                        <th scope="col">Id</th>
                        <th scope="col">Id Penerimaan Barang</th>
                        <th scope="col">Nomor Pembayaran</th>
                        <th scope="col">Tanggal Pembayaran</th>
                        <th scope="col">Id Kasir</th>
                    </tr>
                    </thead>
                    <tbody >
                    <?php foreach($data as $item): ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['id_penerimaan_barang'] ?></td>
                            <td><?php echo $item['nomor_pembayaran'] ?></td>
                            <td><?php echo $item['tanggal_pembayaran'] ?></td>
                            <td><?php echo $item['id_kasir'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
</div>
<?php
$content = ob_get_clean(); // Capture the content
include 'aplikasi/views/kosong.php'; // Include the layout
