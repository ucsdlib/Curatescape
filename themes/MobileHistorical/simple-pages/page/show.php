<?php 

$bodyclass = 'page simple-page';
if (simple_pages_is_home_page(get_current_simple_page())) {
    $bodyclass .= ' simple-page-home';
} ?>

<?php head(array('title' => html_escape(simple_page('title')), 'bodyclass' => $bodyclass, 'bodyid' => html_escape(simple_page('slug')))); ?>





<div id="content">
			
		    <div id="header">
			<div id="primary-nav">
    			<ul class="navigation">
    			    <?php echo public_nav_main(array('Home' => uri('/'), 'Tours' => uri('/tour-builder/tours/browse/'), 'Stories' => uri('items'))); ?>
    			</ul>
    		</div>
    		<div id="search-wrap">
				    <?php echo simple_search(); ?>
    			</div>
    			<div style="clear:both;"></div>
   		</div>
	




<!-- -->
<div id="page-col-left">

<div id="lv-logo"><a href="<?php echo WEB_ROOT;?>/"><img src="<?php echo mh_med_logo_url(); ?>" border="0" alt="<?php echo settings('site_title');?>" title="<?php echo settings('site_title');?>" /></a></div>

</div>
<!-- -->





<div id="primary" class="show">

    <h1><?php echo html_escape(simple_page('title')); ?></h1>
    <?php echo eval('?>' . simple_page('text')); ?>
</div>





<div id="page-col-right">

	<div id="itemfiles" class="element">
	<div class="element-text">

		<div id="share-this">
			<h3 style="margin-top:10px;clear:both">Share this Page</h3>
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
		</div>
		<?php $addthis = (get_theme_option('Add This')) ? (get_theme_option('Add This')) : 'ra-4e89c646711b8856';?>
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo $addthis ;?>"></script>
			<!-- replace #pubid= value with your ADDTHIS user profile to enable analytics (see settings >> profiles) -->
		<!-- AddThis Button END -->
	</div>
	</div>
	
</div>	

		
</div>



<?php echo foot(); ?>