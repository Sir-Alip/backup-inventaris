
<?php
ob_start(); // Start output buffering
?>
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">

                            <h1 class="" align='center'> PEMESANAN BARANG </h1>

                        </div>
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-4">Nomor Pemesanan</label>
                                <div class="col-7">
                                    <input type="text" class="form-control form-control-sm" value="6">
                                </div>
                            </div>
                            <div class="row form-group mb-4">
                                <label class="col-4">Tanggal Pemesanan</label>
                                <div class="col-7">
                                    <input type="text" class="form-control form control-sm" value="2025-12-08">
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered table-sm table-info border-light">
                                    <thead>
                                        <tr>
                                            <th scope="col">NAMA BARANG</th>
                                            <th scope="col">KUANTITAS PESANAN</th>
                                            <th scope="col">HARGA PESANAN</th>
                                            <th scope="col">JUMLAH</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                           
                                        <tr>
                                            <td scope="row">Hydropack</td>
                                            <td>35</td>
                                            <td>250000</td>
                                            <td>8750000</td>

                                           
                                        </tr>
                                        <tr>
                                             <td scope="row">Carrier</td>
                                            <td>27</td>
                                            <td>500000</td>
                                            <td>13500000</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" align="center"><b> TOTAL <b></td>
                                            <td colspan="" align="left">22250000 </td>

                                        </tr>
                                    </tfoot>



                                </table>
                                <div class="card-footer">
                                    <div class="row form-group mb-3">
                                        <label class="col-3 mb-2">Nama Vendor</label>
                                        <label class="col-3 mb 2">Alamat Vendor</label>
                                        <label class="col-3">No. Telp Vendor</label>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-3 mb-2">
                                            <input type="text" class=" form-control form control-sm" value="Belantara">
                                        </div>
                                        <div class="col-3 mb-2">
                                            <input type="text" class="form-control form control-sm" value="Jl. Perintis Kemerdekaan">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" class="form-control form control-sm" value="081456774097">

                                        </div>
                                    </div>
                                    <a class="btn btn-info" href="http://alpha.3ac-collective.com/46123012/praktikum_01/daftar_pemesanan/data_daftarpemesanan">KEMBALI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
$content = ob_get_clean(); // Capture the content
include 'aplikasi/views/kosong.php'; // Include the layout