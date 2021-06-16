 <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2021. Layanan - Cerah Application. by Bank SUMSEL BABEL.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    
    <!-- jquery latest version -->
    <script src="<?= base_url('asset/'); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?= base_url('asset/'); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url('asset/'); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url('asset/'); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('asset/'); ?>assets/js/metisMenu.min.js"></script>
    <script src="<?= base_url('asset/'); ?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url('asset/'); ?>assets/js/jquery.slicknav.min.js"></script>


     <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

     <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
   
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="<?= base_url('asset/'); ?>assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="<?= base_url('asset/'); ?>assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="<?= base_url('asset/'); ?>assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="<?= base_url('asset/'); ?>assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="<?= base_url('asset/'); ?>assets/js/plugins.js"></script>
    <script src="<?= base_url('asset/'); ?>assets/js/scripts.js"></script>

    

    <script type="text/javascript">
        $('.custom-file-input').on('change', function(){
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
</body>

</html>
