<?php
ob_start(); // Start output buffering
?>
<b>
    <h1 align= 'center'> DAFTAR PEMESANAN </h1>
</b>
              
<div style="width:100%;overflow:auto; ">
<table class="table table-striped " >
  <thead>
    <tr>
                        <th scope="col">Id Pemesanan</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Nomor Pemesanan </th>
                        <th scope="col">Nama Vendor</th>
                        <th scope="col">Alamat Vendor</th>
                        <th scope="col">Nomor Telepon Vendor</th>
                        <th scope="col">Jumlah Jenis Barang</th>
                        <th scope="col">Total Nilai Penerima</th>
                        <th scope="col">Tanggal Penerimaan</th>
                        <th scope="col">Nama Penerima</th>
                        <th scope="col">Total Nilai Diterima</th>
                        <th scope="col">Tanggal Pembayaran</th>
                        <th scope="col">Nomor Pembayaran</th>
                        <th scope="col">Nama Kasir</th>
                        <th scope="col">...</th>
    </tr>
  </thead>
  <tbody >
    <?php foreach($data as $item): ?>
                        <tr>
                            <td><?php echo $item['id_pemesanan']; ?></td>
                            <td><?php echo $item['tanggal_pemesanan'] ?></td>
                            <td><?php echo $item['nomor_pemesanan'] ?></td>
                            <td><?php echo $item['nama_vendor'] ?></td>
                            <td><?php echo $item['alamat_vendor'] ?></td>
                            <td><?php echo $item['no_telp_vendor'] ?></td>
                            <td><?php echo $item['jumlah_jenis_barang'] ?></td>
                            <td><?php echo $item['total_nilai_penerima'] ?></td>
                            <td><?php echo $item['tanggal_penerimaan'] ?></td>
                            <td><?php echo $item['nama_penerima'] ?></td>
                            <td><?php echo $item['total_nilai_diterima'] ?></td>
                            <td><?php echo $item['tanggal_pembayaran'] ?></td>
                            <td><?php echo $item['nomor_pembayaran'] ?></td>
                            <td><?php echo $item['nama_kasir'] ?></td>

                            <td>
                              <a href="http://localhost/46123012/praktikum_01/daftar_pemesanan/testData<?= $item["id_pemesanan"]?>/" class="btn btn-primary">Lihat</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
  </tbody>
</table>
</div>
<?php
$content = ob_get_clean(); // Capture the content
include 'aplikasi/views/kosong.php'; // Include the layout
