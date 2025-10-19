<?php
ob_start(); // Start output buffering
?>
<div style="width:100%;overflow:auto; ">
<table class="table table-striped " >
                <thead>
                    <tr >
                        <th scope="col">Id</th>
                        <th scope="col">Id Penerimaan</th>
                        <th scope="col">Id Barang</th>
                        <th scope="col">Kuantitas Diterima</th>
                        <th scope="col">Harga Diterima</th>
                    </tr>
                    </thead>
                    <tbody >
                    <?php foreach($data as $item): ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['id_penerimaan'] ?></td>
                            <td><?php echo $item['id_barang'] ?></td>
                            <td><?php echo $item['kuantitas_diterima'] ?></td>
                            <td><?php echo $item['harga_diterima'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
</div>
<?php
$content = ob_get_clean(); // Capture the content
include 'aplikasi/views/kosong.php'; // Include the layout
