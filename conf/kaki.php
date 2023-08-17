       <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Powered By © <?=$fnama;?>. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>
<script src="../modul/lokasi/js/geo-min.js" type="text/javascript" charset="utf-8"></script>
<script>
    if(geo_position_js.init()){
        geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
    }
    else{
        masukubah=document.getElementById("masukubah");
        masukubah.innerHTML ="Tidak ada fungsi geolocation";
    }

    function success_callback(p)
    {
        latitude=p.coords.latitude ;
        longitude=p.coords.longitude;
        pesan = '<a href="Absen/proses.php?lat='+latitude +'&long='+longitude+'&id_user=<?=$id_pengguna;?>&masukubah" class="btn btn-primary btn-block">Ubah Absen Masuk</a></br>';
        masukubah=document.getElementById("masukubah");
            //alert(pesan);
            masukubah.innerHTML = pesan;
        }
        
        function error_callback(p)
        {
            masukubah=document.getElementById("masukubah");
            masukubah.innerHTML ='error='+p.message;
        }        
    </script>
<script>
    if(geo_position_js.init()){
        geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
    }
    else{
        masuk=document.getElementById("masuk");
        masuk.innerHTML ="Tidak ada fungsi geolocation";
    }

    function success_callback(p)
    {
        latitude=p.coords.latitude ;
        longitude=p.coords.longitude;
        pesan = '<a href="Absen/proses.php?lat='+latitude +'&long='+longitude+'&id_user=<?=$id_pengguna;?>&masuk" class="btn btn-primary btn-block">Absen Masuk</a></br>';
        masuk=document.getElementById("masuk");
            //alert(pesan);
            masuk.innerHTML = pesan;
        }
        
        function error_callback(p)
        {
            masuk=document.getElementById("masuk");
            masuk.innerHTML ='error='+p.message;
        }        
    </script>
    <script>
        if(geo_position_js.init()){
            geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
        }
        else{
            pulang=document.getElementById("pulang");
            pulang.innerHTML ="Tidak ada fungsi geolocation";
        }

        function success_callback(p)
        {
            latitude=p.coords.latitude ;
            longitude=p.coords.longitude;
            pesan = '<a href="Absen/proses.php?lat='+latitude +'&long='+longitude+'&id_user=<?=$id_pengguna;?>&pulang" class="btn btn-primary btn-block" style="float: right;">Absen Pulang</a></br>';
            pulang=document.getElementById("pulang");
            //alert(pesan);
            pulang.innerHTML = pesan;
        }
        
        function error_callback(p)
        {
            pulang=document.getElementById("pulang");
            pulang.innerHTML ='error='+p.message;
        }        
    </script>

    <script>
        if(geo_position_js.init()){
            geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
        }
        else{
            pulangubah=document.getElementById("pulangubah");
            pulangubah.innerHTML ="Tidak ada fungsi geolocation";
        }

        function success_callback(p)
        {
            latitude=p.coords.latitude ;
            longitude=p.coords.longitude;
            pesan = '<a href="Absen/proses.php?lat='+latitude +'&long='+longitude+'&id_user=<?=$id_pengguna;?>&pulangubah" class="btn btn-primary btn-block" style="float: right;">Ubah Absen Pulang</a></br>';
            pulangubah=document.getElementById("pulangubah");
            //alert(pesan);
            pulangubah.innerHTML = pesan;
        }
        
        function error_callback(p)
        {
            pulangubah=document.getElementById("pulangubah");
            pulangubah.innerHTML ='error='+p.message;
        }        
    </script>
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="../assets/js/jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="../assets/js/circle-progress.min.js"></script>

    <!-- PIETY CHART JS-->
    <script src="../assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="../assets/plugins/peitychart/peitychart.init.js"></script>

    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="../assets/plugins/chart/Chart.bundle.js"></script>
    <script src="../assets/plugins/chart/rounded-barchart.js"></script>
    <script src="../assets/plugins/chart/utils.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>

    <!-- INTERNAL Data tables js-->
    <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="../assets/js/apexcharts.js"></script>
    <script src="../assets/plugins/apexchart/irregular-data-series.js"></script>

    <!-- INTERNAL Flot JS -->
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.fillbetween.js"></script>
    <script src="../assets/plugins/flot/chart.flot.sampledata.js"></script>
    <script src="../assets/plugins/flot/dashboard.sampledata.js"></script>

    <!-- INTERNAL Vector js -->
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>



    <!-- BATAS-->

    <!-- INPUT MASK JS-->
    <script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- TypeHead js -->
    <script src="../assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="../assets/js/typehead.js"></script>
 
    <!-- INTERNAL SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>

    <!-- DATA TABLE JS-->
    <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="../assets/plugins/datatable/js/jszip.min.js"></script>
    <script src="../assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="../assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="../assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="../assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="../assets/js/table-data.js"></script>


    <!-- FILE UPLOADES JS -->
    <script src="../assets/plugins/fileuploads/js/fileupload.js"></script>
    <script src="../assets/plugins/fileuploads/js/file-upload.js"></script>

    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="../assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
    <script src="../assets/plugins/fancyuploder/jquery.fileupload.js"></script>
    <script src="../assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
    <script src="../assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
    <script src="../assets/plugins/fancyuploder/fancy-uploader.js"></script>

    <!-- SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2.js"></script>

    <!-- BOOTSTRAP-DATERANGEPICKER JS -->
    <script src="../assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
    <script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

    <!-- INTERNAL Sumoselect js-->
    <script src="../assets/plugins/sumoselect/jquery.sumoselect.js"></script>

    <!-- TIMEPICKER JS -->
    <script src="../assets/plugins/time-picker/jquery.timepicker.js"></script>
    <script src="../assets/plugins/time-picker/toggles.min.js"></script>

    <!-- INTERNAL intlTelInput js-->
    <script src="../assets/plugins/intl-tel-input-master/intlTelInput.js"></script>
    <script src="../assets/plugins/intl-tel-input-master/country-select.js"></script>
    <script src="../assets/plugins/intl-tel-input-master/utils.js"></script>

    <!-- INTERNAL jquery transfer js-->
    <script src="../assets/plugins/jQuerytransfer/jquery.transfer.js"></script>

    <!-- INTERNAL multi js-->
    <script src="../assets/plugins/multi/multi.min.js"></script>

    <!-- DATEPICKER JS -->
    <script src="../assets/plugins/date-picker/date-picker.js"></script>
    <script src="../assets/plugins/date-picker/jquery-ui.js"></script>
    <script src="../assets/plugins/input-mask/jquery.maskedinput.js"></script>

    <!-- COLOR PICKER JS -->
    <script src="../assets/plugins/pickr-master/pickr.es5.min.js"></script>
    <script src="../assets/js/picker.js"></script>

    <!-- MULTI SELECT JS-->
    <script src="../assets/plugins/multipleselect/multiple-select.js"></script>
    <script src="../assets/plugins/multipleselect/multi-select.js"></script>

    <!-- FORMELEMENTS JS -->
    <script src="../assets/js/formelementadvnced.js"></script>
    <script src="../assets/js/form-elements.js"></script>

    <!-- BATAS-->


    
    <!-- SIDE-MENU JS-->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

  <!-- TypeHead js -->
  <script src="../assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="../assets/js/typehead.js"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="../assets/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>

</body>

</html>