<?php
$result = mysqli_query($koneksi, "SELECT * FROM hasil
JOIN calon USING(id_calon)
JOIN seleksi USING(id_seleksi)
JOIN tes USING(id_tes)
JOIN pendaftaran USING(id_pendaftaran)
JOIN pembukaan_pendaftaran USING(id_pembukaan_pendaftaran)
JOIN user USING(id_user)");

// Membuat array untuk menyimpan hasil dari query
$data_from_database = array();

// Mengambil data dari hasil query dan menyimpannya dalam array
while ($row = mysqli_fetch_assoc($result)) {
    $data_from_database[] = $row;
}
?>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- BEGIN: Page Main-->
<div class="main-content app-content mt-0">
	<div class="side-app">

		<!-- CONTAINER -->
		<div class="main-container container-fluid">

			<!-- PAGE-HEADER -->
			<div class="page-header">
				<h1 class="page-title"></h1>
				<div>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=<?=$folder;?>"><?=$judul;?></a></li>
					</ol>
				</div>

			</div>
			<!-- PAGE-HEADER END -->

			<!-- Row -->
			<div class="row row-sm">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								    <canvas id="hasilChart"></canvas>
    <script>
        // Membuat chart dengan Chart.js setelah halaman selesai dimuat
        document.addEventListener("DOMContentLoaded", function() {
            var data = <?php echo json_encode($data_from_database); ?>;
            var hasilPoling = [];
            var namaUser = [];
    
            for (var i = 0; i < data.length; i++) {
                hasilPoling.push(data[i].hasil_polling);
                namaUser.push(data[i].nama_user);
            }
    
            var ctx = document.getElementById('hasilChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: namaUser,
                    datasets: [{
                        label: 'Hasil Poling',
                        data: hasilPoling,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- CONTAINER CLOSED -->

	</div>
</div>
