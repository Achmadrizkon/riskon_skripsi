     <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">

            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <form method="POST">
                    <label class="card-title"><?=$title;?> </label>
                    </form>

                    <form method="POST">
                      
                    <div class="form-group" >
                      <label>Jenis Grafik PMKS</label>
                      <select class="form-control" name="filter">
                        <?php 
                          if ($_POST['filter'] == "Pemohon") {
                            ?>
                          <option value="Jenis PMKS">Jenis PMKS</option>
                          <option value="Pemohon" selected>Pemohon</option>
                          <option value="Desa">Desa</option>                            
                            <?php
                          }else if ($_POST['filter'] == "Desa") {
                          ?>                          
                          <option value="Jenis PMKS">Jenis PMKS</option>
                          <option value="Pemohon">Pemohon</option>
                          <option value="Desa" selected>Desa</option>
                          <?php                            
                          }else{
                            ?>
                            <option value="Jenis PMKS" selected>Jenis PMKS</option>
                          <option value="Pemohon">Pemohon</option>
                          <option value="Desa">Desa</option>
                            <?php
                          }
                         ?>
                      </select>
                    </div> <br>
                          <button class="btn btn-primary mb-15" style="float: right;" target="_blank">
                            <i class="icon wb-plus" aria-hidden="true "></i> Lihat 
                          </button>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Zero Configuration  Ends-->
            
              <div class="card">
                  <div class="card-body">
                    <?php 
                    if ($_POST['filter'] == "Pemohon") {
                      $filter = $_POST['filter'];
                     echo "<center><h5>Data Statistik PMKS Per-".$filter."</h5></center><br>";
                    }else if ($_POST['filter'] == "Desa") {
                      $filter = $_POST['filter'];
                     echo "<center><h5>Data Statistik PMKS Per-".$filter."</h5></center><br>";
                    }else{
                      $filter = "Jenis PMKS";
                     echo "<center><h5>Data Statistik Per-".$filter." Kabupaten Banjar</h5></center><br>";
                    }
                     ?>
        
                      <div class="row">
                         <div id="pmks"></div>
                      </div>
                  </div>
                </div>         
     

            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>



                <script src="../assets/chart/js/jquery-1.9.1.min.js" type="text/javascript"></script>
                <script src="../assets/chart/js/highcharts.js" type="text/javascript"></script>
                <script src="../assets/chart/js/exporting.js" type="text/javascript"></script>
                <script type="text/javascript" src="../assets/chartjs/Chart.js"></script>

                <script type="text/javascript">
    var chart2; // globally available
    $(document).ready(function() {
      chart2 = new Highcharts.Chart({
        chart: {
          renderTo: 'pmks',
          type: 'column'
        },   
        title: {
          text: 'Statistik Data'
        },
        xAxis: {
          categories: ['Kategori PMKS Per-<?=$filter;?>']
        },
        yAxis: {
          title: {
            text: 'Jumlah PMKS'
          }
        },
        series:             
        [
        <?php     
        if ($_POST['filter'] == "Pemohon") {
          $sqla = mysqli_query($koneksi,"SELECT * FROM t_pmks
            JOIN t_desa USING(id_desa)             
            JOIN t_pemohon USING(id_pemohon) GROUP BY t_desa.id_pemohon");            
        }else if ($_POST['filter'] == "Desa") {
          $sqla = mysqli_query($koneksi,"SELECT * FROM t_pmks
            JOIN t_desa USING(id_desa) GROUP BY id_desa");
        }else{

          $sqla = mysqli_query($koneksi,"SELECT * FROM t_jenis_pmks");
        }
        while($pmks = mysqli_fetch_array($sqla)){

          if ($_POST['filter'] == "Pemohon") {
            $judul=$pmks['nama_pemohon'];
            $id_pemohon = $pmks['id_pemohon'];
            $row = mysqli_query($koneksi,"SELECT * FROM t_pmks 
            JOIN t_desa USING(id_desa)             
              WHERE id_pemohon='$id_pemohon'");
            $total = mysqli_num_rows($row);         
          }else if ($_POST['filter'] == "Desa") {
           $judul=$pmks['nama_desa'];
           $id_desa = $pmks['id_desa'];
           $row = mysqli_query($koneksi,"SELECT * FROM t_pmks WHERE id_desa='$id_desa'");
           $total = mysqli_num_rows($row);  
         }else{
          $judul=$pmks['jenis_pmks'];
          $id_jenis_pmks = $pmks['id_jenis_pmks'];
          $row = mysqli_query($koneksi,"SELECT * FROM t_pmks WHERE id_jenis_pmks='$id_jenis_pmks'");
          $total = mysqli_num_rows($row);  
        }                 
        ?>
        {
          name: '<?=$judul; ?>',
          data: [<?=$total; ?>]
        },
      <?php } ?>
      ]
    });
    }); 
  </script>
  <!-- END DIAGRAM NEW -->



