<!-- Footer -->
<hr>
<footer class="small p-3 px-md-4 mt-auto">
    <div class="row justify-content-between">
        <div class="col-lg text-center text-lg-left mb-3 mb-lg-0">

            <ul class="list-inline mb-0">
                <li class="list-inline-item mx-2"><a class="text-muted" href="#"><i class="gd-twitter-alt"></i></a></li>
                <li class="list-inline-item mx-2"><a class="text-muted" href="#"><i class="gd-facebook"></i></a></li>

            </ul>
        </div>

        <div class="col-lg text-center text-lg-right">
            &copy; 2022 Pasar.com. All Rights Reserved.
        </div>
    </div>
</footer>
<!-- End Footer -->
</div>
</main>


<script src="<?= base_url(); ?>assets/public/graindashboard/js/graindashboard.js"></script>
<script src="<?= base_url(); ?>assets/public/graindashboard/js/graindashboard.vendor.js"></script>

<!-- DEMO CHARTS -->
<script src="<?= base_url(); ?>assets/public/demo/resizeSensor.js"></script>
<script src="<?= base_url(); ?>assets/public/demo/chartist.js"></script>
<script src="<?= base_url(); ?>assets/public/demo/chartist-plugin-tooltip.js"></script>
<script src="<?= base_url(); ?>assets/public/demo/gd.chartist-area.js"></script>
<script src="<?= base_url(); ?>assets/public/demo/gd.chartist-bar.js"></script>
<script src="<?= base_url(); ?>assets/public/demo/gd.chartist-donut.js"></script>
<script>
    $.GDCore.components.GDChartistArea.init('.js-area-chart');
    $.GDCore.components.GDChartistBar.init('.js-bar-chart');
    $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
</script>
</body>

</html>