<div class="row">
	<div class="col s12 m6">
		<div class="card indigo darken-4 white-text">
			<div class="card-content white-text">
				<span class="card-title"><?php echo $pageTitle; ?></span>
				<?php if($status == "Selesai"): ?>
				<p>Permohonan Anda telah <strong>Selesai</strong>.</p>
				<?php elseif($status == "Proses"): ?>
				<p>Permohonan Anda masih <strong> dalam proses</strong>.</p>
				<?php elseif($status == "Err"): ?>
				<p>Silakan perbaiki isian Anda.</p>
				<?php endif;?>
			</div>
			<div class="card-action">
				<a href="<?=site_url('layanan/');?>">Back</a>
			</div>
		</div>
	</div>
</div>