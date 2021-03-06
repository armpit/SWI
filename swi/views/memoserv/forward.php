<?php $this->load->view('header'); ?>
	<?php $this->load->view('navigation'); ?>
	
		<!-- The content -->
		<section id="content">
			<h2><img src=<?php print base_url(); ?>ico/email.png> <?php print ucfirst(strtolower($this->config->item('atheme_memoserv'))); ?> &gt; <?php _t('ms_fwd'); ?></h2>
			
			<?php if (isset($memoid) && !$memoid) : ?>
			
				<form action="" method="post">
				<section>
					<label for="nickname">
						<?php _t('gen_username'); ?>
						<small><?php _t('ms_fwd_nickname_hint'); ?>.</small>
					</label>
					<div>
						<input name="nickname" id="nickname" size="35" maxlength="50" type="text" placeholder="<?php _t('gen_username'); ?>" class="required" />
					</div>
				</section>
    	    	
				<section>
					<label for="memoid">
						<?php _t('gen_memo'); ?> #
						<small><?php _t('ms_fwd_memo_hint'); ?>.</small>
					</label>
					<div>
						<input name="memoid" id="memoid" size="35" maxlength="50" type="text" placeholder="#ID" class="required" />
						<br /><br />
						<input type="submit" name="submit" value="<?php _t('gen_forward'); ?>" class="primary button" />
					</div>
				</section>
				</form>
			
			<?php else : ?>
			
				<form action="" method="post">
				<section>
					<label for="nickname">
						<?php _t('gen_username'); ?>
						<small><?php _t('ms_fwd_nickname_hint'); ?></small>
					</label>
					<div>
						<input name="nickname" id="nickname" size="35" maxlength="50" type="text" placeholder="<?php _t('gen_username'); ?>" class="required" />
					</div>
				</section>
    	    	
				<section>
	          		<label for="memoid">
	          			<?php _t('gen_memo'); ?> #
	          			<small><?php _t('ms_fwd_memo_hint'); ?>.</small>
	          		</label>
	          		<div>
	          			<input name="memoid" id="memoid" size="35" <?php print "placeholder='{$memoid}'"; ?> maxlength="50" type="text" class="required" />
	          			<br /><br />
	          			<img src=<?php print base_url(); ?>ico/communication.png> <input type="submit" name="submit" value="<?php _t('gen_forward'); ?>" class="primary button" />
	          		</div>
				</section>		
				</form>
			
			<?php endif; ?>
			
		<div class="clear">&nbsp;</div>
		</section>
	</div>
          
<?php $this->load->view('footer'); ?>