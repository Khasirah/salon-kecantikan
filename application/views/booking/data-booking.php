<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Selesai</title>
    <link rel="stylesheet" href="<?= base_url('assets/user/css/bootstrap.css'); ?>">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
       
        .banner-container {
            text-align: center;
            margin-bottom: 30px;
        }
        .banner-container img {
            max-width: 100%;
            height: auto;
        }
        .form-container {
            background-color: #FF83A8; /* Warna latar belakang */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
            color: #ffffff; /* Warna teks */
        }
        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #ffffff;
        }
        .form-container form {
            max-width: 600px;
            margin: auto;
        }
        .form-container .form-group {
            margin-bottom: 20px;
        }
        .form-container .btn-submit {
            background-color: #ffffff;
            color: #FF83A8; /* Warna teks tombol */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        .form-container .btn-submit:hover {
            background-color: #f2f2f2; /* Warna latar belakang tombol saat hover */
        }
        .table-container {
            margin-top: 30px;
        }
        .table-container table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .table-container th, .table-container td {
            padding: 10px;
            text-align: center;
        }
        .table-container th {
            background-color: #FF83A8; /* Warna latar belakang header tabel */
            color: #ffffff;
            font-weight: bold;
        }
        .table-container tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table-container tbody tr:hover {
            background-color: #e6e6e6;
        }
        .table-container img {
            max-width: 50px;
            height: auto;
            border-radius: 5px;
        }
        .btn-delete {
            color: #FF83A8; /* Warna teks tombol hapus */
            transition: color 0.3s ease;
        }
        .btn-delete:hover {
            color: #e65376; /* Warna teks tombol hapus saat hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Banner Selamat Datang -->
        
        <!-- Daftar Booking -->
        <div class="table-container">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Service</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($temp as $index => $t) : ?>
                        <tr>
                            <td><?= $index + 1; ?></td>
                            <td><img src="<?= base_url('assets/img/upload/' . $t['image']); ?>" alt="No Picture"></td>
                            <td><?= $t['judul_service']; ?></td>
                            <td>
                                <a href="<?= base_url('booking/hapusbooking/' . $t['id_service']); ?>" class="btn-delete" onclick="return confirm('Yakin tidak Jadi Booking <?= $t['judul_service']; ?>?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Form Booking Selesai -->
        <div class="form-container">
            <h2>Selesaikan Booking</h2>
            <form action="<?= base_url('booking/bookingSelesai/'. $this->session->userdata('id_user')); ?>" method="post">
                <div class="form-group">
                    <label for="no_telp">Nomor Whatsapp Anda</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan No. Whatsapp Anda" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="jam">Jam</label>
                    <select id="jam" name="jam" class="form-control" required>
                        <?php
                        // Loop through hours from 10 to 20 with step 2 hours
                        for ($hour = 10; $hour <= 20; $hour += 2) {
                            // Format the hour to be in two digits
                            $formattedHour = str_pad($hour, 2, '0', STR_PAD_LEFT);
                            // Create option for each hour
                            $time = "$formattedHour:00";
                            echo "<option value=\"$time\">$time</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-submit">Selesaikan Booking</button>
                </div>
            </form>
        </div>
    </div>
    <br>

    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
