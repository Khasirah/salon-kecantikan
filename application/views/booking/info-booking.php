<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #FF83A8;
        margin: 0;
        padding: 0;
    }
    
    .container1 {
        width: 80%;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        margin-top: 50px;
    }
     .invoice-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .invoice-title {
        font-size: 36px;
        color: #FF83A8;
    }

    .invoice-info {
        font-size: 16px;
        margin-top: 10px;
    }

    .invoice-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .invoice-table th, .invoice-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .invoice-table th {
        background-color: #FF83A8;
        color: white;
    }

    .invoice-total {
        text-align: right;
        padding-top: 10px;
    }

    .generated-info {
        text-align: center;
        margin-top: 20px;
        font-style: italic;
    }
</style>

<div class="container1">
    <div class="invoice-header">
        <h1 class="invoice-title">INVOICE</h1>
    </div>
    
    <?php foreach ($useraktif as $u) { ?>
        <div class="invoice-info">
            <p>No Booking: <span class="text-bold"><?= $items[0]['id_booking']; ?></span></p>
            <p>Nama Member: <?= $u->nama; ?></p>
        </div>
    <?php } ?>

    <table class="invoice-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Service</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $total_biaya = 0;
            foreach ($items as $i) {
                ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $i['judul_service']; ?></td>
                    <td><?= $i['tanggal']; ?></td>
                    <td><?= $i['jam']; ?></td>
                    <td>Rp. <?= number_format($i['biaya'], 2, ',', '.'); ?></td>
                </tr>
                <?php
                $total_biaya += $i['biaya'];
                $no++;
            }
            ?>
            <tr class="invoice-total">
                <td colspan="4"><b>Total Biaya:</b></td>
                <td>Rp. <?= number_format($total_biaya, 2, ',', '.'); ?></td>
            </tr>
        </tbody>
    </table>

    <div class="generated-info">
        Generated on <?= date('d M Y H:i:s'); ?>
    </div>
                <td>
                    <a class="btn btn-sm btn-outline-danger"
                        onclick="information('Waktu Pengambilan service 1x24 jam dari Booking!!!')"
                        href="<?= base_url() . 'booking/exportToPdf/' . $this->session->userdata('id_user'); ?>">
                        <span class="far fa-lg fa-fw fa-file-pdf"></span> Pdf
                    </a>
                </td>
           
</div>