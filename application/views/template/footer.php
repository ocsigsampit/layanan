		<footer class="page-footer white">
			<div class="footer-copyright yellow">
				<div class="container center">
				</div>
			</div>
		</footer>

		<!-- Javascript -->
		<script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/materialize/js/materialize.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/tinymce/tinymce.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/kcdev.js'); ?>"></script>
		
		<!--Scripts-->
		<script>
		
		$(document).ready(function(){
			var site     = '<?php echo site_url();?>';
			
			$("#tmb_cek").click(function(){
				var no_bps    = $("#no_bps").val();

				$.ajax({
					url     : site + "/layanan/cek_status",
					type    : "POST",
					data    : "no_bps=" + no_bps,
					success : function(hasil){
						if(hasil == "Selesai"){
							$("#hasil").html("Permohonan dengan No BPS " + no_bps + ", telah " + hasil + ".");
						}else if(hasil == "Proses"){
							$("#hasil").html("Permohonan dengan No BPS " + no_bps + ", masih dalam proses.");
						}else{
							$("#hasil").html("No BPS tidak ditemukan !.");
						}
					}
				});
			
			});
			
		});
		</script>
  	</body>
</html>
