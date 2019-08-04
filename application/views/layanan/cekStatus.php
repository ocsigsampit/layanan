<div class="row">
	<div class="col s12">
	
		<div class="card">
			<div class="card-content indigo darken-4 white-text">
				<span class="card-title"><?php echo $pageTitle; ?></span>
			</div>
			<div class="card-content">
				<div class="row">
					<form method="post" action="<?=site_url('layanan/cek_status');?>">
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>"/>
						<div class="input-field col s12 m12">
							<input type="text" id="no_bps" name="no_bps" maxlength="50" required/>
							<label for="no_bps">NO BPS</label>
						</div>
						<div class="input-field col s12 right-align">
							<button type="submit" class="btn waves-effect teal darken-4 white-text">Cek</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>