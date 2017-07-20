<!-- Social -->
<section class="col-md-12 c_social">	
	<ul class="social">			
		<?php for($i=1; $i<=$wl_rmmuc_options['total_Social_links']; $i++){
			if($wl_rmmuc_options['social_icon_'.$i]!=''){
		
			$social_class = $wl_rmmuc_options['social_icon_'.$i];
			$social_class = str_replace("fa fa-","",$social_class);
		?>
		<li class="social_div social-<?php echo $social_class; ?> "><a target="<?php if($wl_rmmuc_options['link_tab_'.$i]=='on') echo '_blank'; ?>" href="<?php echo $wl_rmmuc_options['social_link_'.$i]; ?>"><i class="<?php echo $wl_rmmuc_options['social_icon_'.$i]; ?> icon"></i></a></li>
			<?php }
		} ?>
	</ul>	
</section>
<!-- Social -->

