<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- row ux-->
  <div class="row">



    <div class="col-xl-3 col-md-6 mb-4">
      <div class="shadow h-100 py-2 bg-white" style="border-radius: 20px;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
              <div class="icon-container text-center p-3"
                style="width: 70px; height: 70px; border-radius: 10px; background-color: #FF83A8;">
                <a href="<?= base_url('user/anggota'); ?>" class="text-white"><i class="fas fa-users fa-2x"></i></a>
              </div>
            </div>
            <div class="col mr-2 text-right">
              <div class="text-md font-weight-bold text-dark mb-1">Member</div>
              <div class="h3 mb-0 font-weight-bold text-dark">
                <?= $this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
      <div class="shadow h-100 py-2 bg-white" style="border-radius: 20px;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
              <div class="icon-container text-center p-3"
                style="width: 70px; height: 70px; border-radius: 10px; background-color: #FF83A8;">
                <a href="<?= base_url('service'); ?>" class="text-white"><i class="fas fa-book fa-2x"></i></a>
              </div>
            </div>
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-dark mb-1 text-right">Booking</div>
              <div class="h3 mb-0 font-weight-bold text-dark text-right">
              <?= $this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="col-xl-3 col-md-6 mb-4">
      <div class="shadow h-100 py-2 bg-white" style="border-radius: 20px;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
              <div class="icon-container text-center p-3"
                style="width: 70px; height: 70px; border-radius: 10px; background-color: #FF83A8;">
                <a href="<?= base_url('user'); ?>"><i class="fas fa-user-tag fa-2x text-white"></i></a>
              </div>
            </div>
            <div class="col mr-2 text-right">
              <!-- Menggunakan kelas text-right untuk mengatur teks menjadi rata kanan -->
              <div class="text-md font-weight-bold text-dark mb-1">Booking</div>
              <div class="h3 mb-0 font-weight-bold text-dark">
              <?= $this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="shadow h-100 py-2 bg-white" style="border-radius: 20px;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
              <div class="icon-container text-center p-3"
                style="width: 70px; height: 70px; border-radius: 10px; background-color: #FF83A8;">
                <a href="<?= base_url('user'); ?>"><i class="fas fa-shopping-cart fa-2x text-white"></i></a>
              </div>
            </div>
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-dark mb-1 text-right">Total Booking</div>
              <div class="h3 mb-0 font-weight-bold text-dark text-right">
                <?php
                $where = ['dibooking !=0'];
                $totaldibooking = $this->ModelService->total('dibooking', $where);
                echo $totaldibooking;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Bootstrap + Chart.js Example</title>

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Chart.js -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <body>
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-8 mx-auto">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Monthly Visitors</h5>
                <canvas id="myChart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script>
        // Data untuk chart (contoh data jumlah pengunjung berdasarkan bulan)
        var months = ['January', 'February', 'March', 'April', 'May'];
        var visitors = [1200, 1700, 1400, 2000, 1800];

        // Seleksi elemen canvas
        var ctx = document.getElementById('myChart').getContext('2d');

        // Inisialisasi chart dengan tipe 'bar'
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: months,  // Label sumbu X (bulan)
            datasets: [{
              label: 'Visitors',  // Label untuk dataset
              data: visitors,     // Data jumlah pengunjung
              backgroundColor: 'rgba(255, 99, 132, 0.2)',  // Warna latar belakang bar
              borderColor: 'rgba(255, 99, 132, 1)',        // Warna border bar
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true  // Mulai sumbu Y dari angka 0
              }
            }
          }
        });
      </script>
    </body>

    </html>



  </div>
  <!-- end row ux-->

  <!-- Divider -->
  <hr class="sidebar-divider">


  <div class="row">
    <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
      <div class="page-header">
        <span class="fas fa-users text-primary mt-2 "> Data User</span>
        <a class="text-danger" href="<?php echo base_url('user'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
      </div>
      <table class="table mt-3">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Anggota</th>
            <th>Email</th>
            <th>Role ID</th>
            <th>Aktif</th>
            <th>Member Sejak</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($anggota as $a) { ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $a['nama']; ?></td>
              <td><?= $a['email']; ?></td>
              <td><?= $a['role_id']; ?></td>
              <td><?= $a['is_active']; ?></td>
              <td><?= date('Y', $a['tanggal_input']); ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  <!-- /.container-fluid -->

  <!-- End of Main Content -->