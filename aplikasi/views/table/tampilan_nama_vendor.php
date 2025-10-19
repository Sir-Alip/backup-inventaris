<?php
ob_start(); // Start output buffering
?>
<div style="width:100%;overflow:auto; ">
<table class="table table-striped " >
                <thead>
                    <tr >
                        <th scope="col">Id</th>
                        <th scope="col">Id Vendor</th>
                        <th scope="col">Nama Vendor</th>
                        <th scope="col">Alamat Vendor</th>
                        <th scope="col">Nomor Telepon Vendor</th>
                    </tr>
                    </thead>
                    <tbody >
                    <?php foreach($data as $item): ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['id_vendor'] ?></td>
                            <td><?php echo $item['nama_vendor'] ?></td>
                            <td><?php echo $item['alamat_vendor'] ?></td>
                            <td><?php echo $item['no_telp_vendor'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
</div>
<?php
$content = ob_get_clean(); // Capture the content
include 'aplikasi/views/kosong.php'; // Include the layout
