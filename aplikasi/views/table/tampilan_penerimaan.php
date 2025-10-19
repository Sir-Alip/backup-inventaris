<?php
ob_start(); // Start output buffering
?>
<div style="width:100%;overflow:auto; ">
<table class="table table-striped " >
                <thead>
                    <tr >
                        <th scope="col">Id</th>
                        <th scope="col">Id Pemesanan</th>
                        <th scope="col">Tanggal Penerimaan</th>
                        <th scope="col">Id Yang Menerima</th>
                    </tr>
                    </thead>
                    <tbody >
                    <?php foreach($data as $item): ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['id_pemesanan'] ?></td>
                            <td><?php echo $item['tanggal_penerimaan'] ?></td>
                            <td><?php echo $item['id_yang_menerima'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
</div>
<?php
$content = ob_get_clean(); // Capture the content
include 'aplikasi/views/kosong.php'; // Include the layout
