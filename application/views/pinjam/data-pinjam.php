<div class="container">
    <center>
        <table>
            <tr>
                <td>
                    <div class="table-responsive full-width">
                        <table class="table table-bordered table-striped table-hover" id="table-datatable">
                            <tr>
                                <th>No Booking</th>
                                <th>Tanggal Booking</th>
                                <th>ID User</th>
                                <th>ID service</th>
                                
                                
                                <th>Status</th>
                                
                                <th>Pilihan</th>
                            </tr>
                            <?php
                            foreach ($pinjam as $p) {
                                ?>
                                <tr>
                                    <td><?= $p['no_pinjam']; ?></td>
                                    <td><?= $p['tanggal']; ?></td>
                                    <td><?= $p['id_user']; ?></td>
                                    <td><?= $p['id_service']; ?></td>
                                    
                                    <?php if ($p['status'] == "Belum Lunas") {
                                        $status = "warning";
                                    } else {
                                        $status = "secondary";
                                    } ?>
                                    <td><i class="btn btn-outline-<?= $status; ?> btn-sm"><?= $p['status']; ?></i></td>
                                    
                                    <td nowrap>
                                        <?php if ($p['status'] == "Sudah Lunas") { ?>
                                            <i class="btn btn-sm btn-outline-secondary"><i class="fas fa-fw fa-edit"></i>Ubah
                                                Status</i>
                                        <?php } else { ?>
                                            <a class="btn btn-sm btn-outline-info"
                                                href="<?= base_url('pinjam/ubahStatus/' . $p['id_service'] . '/' . $p['no_pinjam']); ?>"><i
                                                    class="fas fa-fw fa-edit"></i>Ubah Status</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php
                            } ?>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </center>
</div>