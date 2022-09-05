<div class="main-panel">
    <!--content-->
    <div class="content-wrapper">
        <!-- partials breadcrumb start -->
        <?php $this->load->view("panitia/partials/breadcrumb.php"); ?>
        <!-- partilas breadcrumb end -->
        <!-- pelelang -->
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body shadow-sm rounded">
                        <!-- <h4 class="card-title">10 Transaksi Terbaru</h4> -->
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%" class="table">
                                <thead>
                                    <tr>
                                        <th>Lelang ID</th>
                                        <th>Peserta ID</th>
                                        <th>Tanggal Diumumkan</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Feedback</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($PemenangLelang as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $row->lelang_id ?></td>
                                            <td><?= $row->peserta_id ?></td>
                                            <td><?= $row->tgl_diumumkan?></td>
                                            <td><?= $row->tgl_bayar ?></td>
                                            <td><?= $row->testimoni_pemenang ?></td>
                                                </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>