<?php if (!empty($before_widget)): ?>
	<?php echo $before_widget; ?>
<?php else: ?>
	<?php echo ''; ?>
<?php endif; ?>
	<?php if( $title && $title !== '' ): ?>
		<?php echo $before_title.esc_html($title).$after_title; ?>
	<?php endif; ?>
	<form name="frmCall" method="post" action="https://mijn.verbonden.nl/ctd/setupcall/" target="foo" class="cmn-form <?php echo $class; ?>"> 
		<div class="cmn-error" style="display:none;"></div>
		<input type="hidden" name="hash" value="<?php echo get_option('call_me_now_hash'); ?>"> 
		<br/>
		<?php echo ($label && $label !=='' ? '<label for="'.$cmn_id.'_label">'.$label.'</label>' : ''); ?> <br/>
		<input class="cmn-phonenumber" id="<?php echo $cmn_id.'_label'; ?>" name="phonenumber" size="15" type="text"> 
		<input class="submit" value="<?php echo $button; ?>" type="submit"> 
	</form>
<?php if (!empty($after_widget)): ?>
	<?php echo $after_widget; ?>
<?php else: ?>
	<?php echo ''; ?>
<?php endif; ?>