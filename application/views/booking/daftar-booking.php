<div class="container">
    <center>
        <table>
            <tr>
                <td>
                    <div class="table-responsive full-width">
                        <table class="table table-bordered table-striped table-hover" id="table-datatable">
                            <tr>
                                <th>No.</th>
                                <th>ID Booking</th>
                                <th>ID Member</th>
                                <th>Tanggal Booking</th>
                                <th>Waktu Booking</th>
                                <th>Aksi</th>
                                
                                
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($pinjam as $p) {
                                ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><a class="btn btn-link"
                                            href="<?= base_url('pinjam/bookingDetail/' . $p['id_booking']); ?>"><?= $p[
                                                    'id_booking']; ?></a></td>
                                    <td><?= $p['id_user']; ?></td>
                                    <td><?= $p['tanggal']; ?></td>
                                    <td><?= $p['jam']; ?></td>
                                    <form action="<?= base_url('pinjam/pinjamAct/' . $p['id_booking']); ?>" method="post">
                                        <td nowrap>
                                            <button type="submit" class="btn btn-sm btn-outline-info"><i
                                                    class="fas fa-fw fa-cart-plus"></i> Terima </button>
                                        </td>
                                        
                                       
                                    </form>
                                </tr>
                                <?php $no++;
                            } ?>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center"><a href="<?= base_url('pinjam/daftarBooking');
                ?>" class="btn btn-link"><i class="fas fa-fw fa-refresh"></i> Refresh</a></td>
            </tr>
        </table>
    </center>
</div>