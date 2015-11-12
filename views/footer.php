<!-- BEGIN FOOTER -->
<div class="page-footer-fixed footer">
    <div class="footer-inner">
        2013 &copy; Metronic by keenthemes.
    </div>
    <div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
    </div>
</div>
<script src="<?php echo URL; ?>public/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo URL; ?>public/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="<?php echo URL; ?>public/plugins/excanvas.min.js"></script>
<script src="<?php echo URL; ?>public/plugins/respond.min.js"></script>
<![endif]-->
<script src="<?php echo URL; ?>public/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<script src="<?php echo URL; ?>public/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/scripts/app.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/scripts/index.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
        App.init(); // initlayout and core plugins
        Index.init();
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Index.initDashboardDaterange();
        Index.initIntro();
    });
</script>
<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->

<!-- Mirrored from www.keenthemes.com/preview/metronic/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 23 Jul 2013 01:50:35 GMT -->
<script>
    $(function(){


        $('#id').addClass('hover').removeClass('normal').fadeIn("slow");
        $('#closeSessionBtn').click(function(){
            document.location = "<?php echo URL; ?>Usuario/salir";
        });
        $('#buttonProfile').click(function(){
            document.location = "<?php echo URL; ?>Usuario/perfil";
        });
    });
</script>
</body>
</html>