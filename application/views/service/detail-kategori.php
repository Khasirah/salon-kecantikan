<!-- detail-kategori.php -->
<div style="position: relative; text-align: center;">
   <img src="<?= base_url('/assets/img/upload/1.png') ?>"
        style="max-width:100%; max-height: 100%; height: 100%; width: 100%; ">
<div class="container">
    <h1><?= $title; ?></h1>
    <h2>Kategori: <?= $kategori; ?></h2>

    <?php if (!empty($services)) { ?>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Service</th>
                    <th>Biaya Service</th>
                    <th>Gambar</th>
                    <th>Booking</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($services as $service) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $service->judul_service; ?></td>
                        <td>Rp.<?= number_format($service->biaya, 2, ',', '.'); ?></td>
                        <td>
                            <img src="<?= base_url('assets/img/upload/') . $service->image; ?>" alt="<?= $service->judul_service; ?>" style="width:60px;height:60px;">
                        </td>
                        <td><a class="btn btn-outline-primary fas fw fa-shopping-cart" href="<?= base_url('booking/tambahBooking/' . $service->id);?>"> Booking</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>Tidak ada service yang ditemukan untuk kategori ini.</p>
    <?php } ?>
</div>
