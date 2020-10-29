<?php include '../src/head.php'; ?>
<?php include '../src/menu.php'; ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Beranda</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <div class="col-md-3 col-sm-3 col-12">
            <div class="info-box">
                  <?php
                    $jumlah1 = 0;

                    $data1 = mysqli_query($conn,"SELECT COUNT(id_penduduk) AS jumlah FROM `tb_penduduk`");
                    while($dataa = mysqli_fetch_array($data1)) {
                      $jumlah1 = $dataa['jumlah'];
                    }
                  ?>
              <span class="info-box-icon bg-info"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Penduduk</span>
                <span class="info-box-number"><?php echo $jumlah1; ?> Orang</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-md-3 col-sm-3 col-12">
            <div class="info-box">
                  <?php
                    $jumlah2 = 0;
                    $data2 = mysqli_query($conn,"SELECT COUNT(id_kk) AS jumlah FROM `tb_kk` WHERE status_kk='Kepala Keluarga'");
                    while($dataa = mysqli_fetch_array($data2)) {
                      $jumlah2 = $dataa['jumlah'];
                    }
                  ?>
              <span class="info-box-icon bg-info"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Kepala Keluarga</span>
                <span class="info-box-number"><?php echo $jumlah2; ?> KK</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-md-3 col-sm-3 col-12">
            <div class="info-box">
                  <?php
                    $jumlah1 = 0;
                    $jumlah2 = 0;
                    $jumlah3 = 0;
                    $jumlah4 = 0;
                    $jumlah5 = 0;
                    $jumlah6 = 0;
                    $jumlah7 = 0;
                    $jumlah8 = 0;
                    $jumlah9 = 0;

                    $data1 = mysqli_query($conn,"SELECT COUNT(id_domisili) AS jumlah FROM `tb_domisili` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data1)) {
                      $jumlah1 = $dataa['jumlah'];
                    };

                    $data2 = mysqli_query($conn,"SELECT COUNT(id_imb) AS jumlah FROM `tb_imb` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data2)) {
                      $jumlah2 = $dataa['jumlah'];
                    };

                    $data6 = mysqli_query($conn,"SELECT COUNT(id_izin_usaha) AS jumlah FROM `tb_izin_usaha` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data6)) {
                      $jumlah3 = $dataa['jumlah'];
                    };

                    $data4 = mysqli_query($conn,"SELECT COUNT(id_kehilangan) AS jumlah FROM `tb_kehilangan` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data4)) {
                      $jumlah4 = $dataa['jumlah'];
                    };

                    $data5 = mysqli_query($conn,"SELECT COUNT(id_kelahiran) AS jumlah FROM `tb_kelahiran` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data5)) {
                      $jumlah5 = $dataa['jumlah'];
                    };

                    $data6 = mysqli_query($conn,"SELECT COUNT(id_kematian) AS jumlah FROM `tb_kematian` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data6)) {
                      $jumlah6 = $dataa['jumlah'];
                    };

                    $data7 = mysqli_query($conn,"SELECT COUNT(id_nikah) AS jumlah FROM `tb_nikah` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data7)) {
                      $jumlah7 = $dataa['jumlah'];
                    };

                    $data8 = mysqli_query($conn,"SELECT COUNT(id_pindah) AS jumlah FROM `tb_pindah` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data8)) {
                      $jumlah8 = $dataa['jumlah'];
                    };

                    $data9 = mysqli_query($conn,"SELECT COUNT(id_tidak_mampu) AS jumlah FROM `tb_tidak_mampu` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data9)) {
                      $jumlah9 = $dataa['jumlah'];
                    };

                    $tjumlah=$jumlah1+$jumlah2+$jumlah3+$jumlah4+$jumlah5+$jumlah6+$jumlah7+$jumlah8+$jumlah9;

                  ?>
              <span class="info-box-icon bg-info"><i class="fa fa-file"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Surat Selesai</span>
                <span class="info-box-number"><?php echo $tjumlah; ?> Surat</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-md-3 col-sm-3 col-12">
            <div class="info-box">
                  <?php
                    $jumlah1 = 0;
                    $jumlah2 = 0;
                    $jumlah3 = 0;
                    $jumlah4 = 0;
                    $jumlah5 = 0;
                    $jumlah6 = 0;
                    $jumlah7 = 0;
                    $jumlah8 = 0;
                    $jumlah9 = 0;

                    $data1 = mysqli_query($conn,"SELECT COUNT(id_domisili) AS jumlah FROM `tb_domisili` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data1)) {
                      $jumlah1 = $dataa['jumlah'];
                    };

                    $data2 = mysqli_query($conn,"SELECT COUNT(id_imb) AS jumlah FROM `tb_imb` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data2)) {
                      $jumlah2 = $dataa['jumlah'];
                    };

                    $data6 = mysqli_query($conn,"SELECT COUNT(id_izin_usaha) AS jumlah FROM `tb_izin_usaha` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data6)) {
                      $jumlah3 = $dataa['jumlah'];
                    };

                    $data4 = mysqli_query($conn,"SELECT COUNT(id_kehilangan) AS jumlah FROM `tb_kehilangan` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data4)) {
                      $jumlah4 = $dataa['jumlah'];
                    };

                    $data5 = mysqli_query($conn,"SELECT COUNT(id_kelahiran) AS jumlah FROM `tb_kelahiran` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data5)) {
                      $jumlah5 = $dataa['jumlah'];
                    };

                    $data6 = mysqli_query($conn,"SELECT COUNT(id_kematian) AS jumlah FROM `tb_kematian` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data6)) {
                      $jumlah6 = $dataa['jumlah'];
                    };

                    $data7 = mysqli_query($conn,"SELECT COUNT(id_nikah) AS jumlah FROM `tb_nikah` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data7)) {
                      $jumlah7 = $dataa['jumlah'];
                    };

                    $data8 = mysqli_query($conn,"SELECT COUNT(id_pindah) AS jumlah FROM `tb_pindah` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data8)) {
                      $jumlah8 = $dataa['jumlah'];
                    };

                    $data9 = mysqli_query($conn,"SELECT COUNT(id_tidak_mampu) AS jumlah FROM `tb_tidak_mampu` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data9)) {
                      $jumlah9 = $dataa['jumlah'];
                    };

                    $tjumlah2=$jumlah1+$jumlah2+$jumlah3+$jumlah4+$jumlah5+$jumlah6+$jumlah7+$jumlah8+$jumlah9;

                  ?>
              <span class="info-box-icon bg-info"><i class="fa fa-file"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Surat Proses</span>
                <span class="info-box-number"><?php echo $tjumlah2; ?> Surat</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
        </div>

        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6">
            <div class="card">
	            <div class="card-body">
	            	<canvas id="chart1"></canvas>
	            </div>
	         </div>
            <!--/.direct-chat -->
          </section>

          <section class="col-lg-6">
            <div class="card">
	            <div class="card-body">
	            	<canvas id="chart2"></canvas>
	            </div>
	         </div>
            <!--/.direct-chat -->
          </section>


          <section class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <canvas id="chart3"></canvas>
              </div>
           </div>
            <!--/.direct-chat -->
          </section>
          <!-- /.Left col -->
        </div>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<script>
    var lineChartData = {
      labels: [
      	<?php
      		$tahun=date('Y');
      		$label = mysqli_query($conn,"SELECT COUNT(tb_kelahiran.id_kelahiran) AS jumlah, SUBSTRING(tb_kelahiran.tgl_lahir_k, 6, 2) AS bulan, SUBSTRING(tb_kelahiran.tgl_lahir_k, 1, 4) AS tahun,tgl_lahir_k FROM tb_kelahiran WHERE SUBSTRING(tb_kelahiran.tgl_lahir_k, 1, 4)='$tahun' GROUP BY bulan");
      		while($dataa = mysqli_fetch_array($label)) {

      			$time = strtotime($dataa['tgl_lahir_k']);

				$newformat = date('M',$time);

      			echo '"'.$newformat.'",';
      		};
      	?>
      ],
      datasets: [{
        label: "Data Kelahiran Tahun <?php echo $tahun=date('Y');?>",
        data: [
        	<?php
      		$jumlah = mysqli_query($conn,"SELECT COUNT(tb_kelahiran.id_kelahiran) AS jumlah, SUBSTRING(tb_kelahiran.tgl_lahir_k, 6, 2) AS bulan, SUBSTRING(tb_kelahiran.tgl_lahir_k, 1, 4) AS tahun FROM tb_kelahiran WHERE SUBSTRING(tb_kelahiran.tgl_lahir_k, 1, 4)='$tahun' GROUP BY bulan");
      		while($dataa = mysqli_fetch_array($jumlah)) {
      			echo $dataa['jumlah'].',';
      		};
      	?>
        ],
        backgroundColor: "#28a745"
      }]
    };

    var chartEl = document.getElementById("chart1");
      window.myLine = new Chart(chartEl, {
        type: 'bar',
        data: lineChartData,
        options: {
          title:{
            display:true,
            text:'Diagram Data Kelahiran'
          } ,

          scales: {
          	yAxes: [{
          		ticks: {
          			beginAtZero: true,
          			suggestedMin: 0,
          			stepSize: 1,
          		}
          	}]
          }
        }
    });
</script>

<script>
    var lineChartData2 = {
      labels: [
      	<?php
      		$tahun=date('Y');
      		$label = mysqli_query($conn,"SELECT COUNT(tb_kematian.id_kematian) AS jumlah, SUBSTRING(tb_kematian.tgl_kematian, 6, 2) AS bulan, SUBSTRING(tb_kematian.tgl_kematian, 1, 4) AS tahun, tgl_kematian FROM tb_kematian WHERE SUBSTRING(tb_kematian.tgl_kematian, 1, 4)='2020' GROUP BY bulan");
      		while($dataa = mysqli_fetch_array($label)) {

      			$time = strtotime($dataa['tgl_kematian']);

				$newformat = date('M',$time);

      			echo '"'.$newformat.'",';
      		};
      	?>
      ],
      datasets: [{
        label: "Data Kematian Tahun <?php echo $tahun=date('Y');?>",
        data: [
        	<?php
      		$jumlah = mysqli_query($conn,"SELECT COUNT(tb_kematian.id_kematian) AS jumlah, SUBSTRING(tb_kematian.tgl_kematian, 6, 2) AS bulan, SUBSTRING(tb_kematian.tgl_kematian, 1, 4) AS tahun, tgl_kematian FROM tb_kematian WHERE SUBSTRING(tb_kematian.tgl_kematian, 1, 4)='2020' GROUP BY bulan");
      		while($dataa = mysqli_fetch_array($jumlah)) {
      			echo $dataa['jumlah'].',';
      		};
      	?>
        ],
        backgroundColor: "#007bff"
      }]
    };

    var chartEl = document.getElementById("chart2");
      window.myLine = new Chart(chartEl, {
        type: 'bar',
        data: lineChartData2,
        options: {
          title:{
            display:true,
            text:'Diagram Data Kematian'
          },

          scales: {
          	yAxes: [{
          		ticks: {
          			beginAtZero: true,
          			suggestedMin: 0,
          			stepSize: 1,
          		}
          	}]
          }
        }
    });
</script>

<script>
    var lineChartData3 = {
      labels: ["Selesai","Proses"],
      datasets: [{
        label: "Data Status Surat <?php echo $tahun=date('Y');?>",
        data: [<?php echo $tjumlah;?>,<?php echo $tjumlah2;?>],
        backgroundColor: "#007bfn"
      }]
    };

    var chartEl = document.getElementById("chart3");
      window.myLine = new Chart(chartEl, {
        type: 'bar',
        data: lineChartData3,
        options: {
          title:{
            display:true,
            text:'Diagram Data Status Surat'
          },

          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
                suggestedMin: 0,
                stepSize: 1,
              }
            }]
          }
        }
    });
</script>

<?php include '../src/footer.php'; ?>