<?php

// enqueue the child theme stylesheet

function wp_schools_enqueue_scripts() {
	/* begin fontawesome */
	wp_register_style( 'fontawesome', get_stylesheet_directory_uri() . '/web-fonts-with-css/css/fontawesome-all.min.css' ,array(),false,'all' );
	wp_enqueue_style( 'fontawesome' );
	/* end fontawesome */
	/* begin owlcarousel */
	wp_register_style( 'owlcarousel_css', get_stylesheet_directory_uri() . '/owlcarousel/assets/owl.carousel.min.css' ,array(),false,'all' );
	wp_enqueue_style( 'owlcarousel_css' );
	wp_register_script('owlcarousel_js',get_stylesheet_directory_uri() . '/owlcarousel/owl.carousel.min.js',array(),false,false);
	wp_enqueue_script('owlcarousel_js');
	/* end owlcarousel */
	/* begin bootstrap */
	wp_register_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/css/bootstrap.css' ,array(),false,'all' );
	wp_enqueue_style( 'bootstrap_css' );
	wp_register_script('bootstrap_js',get_stylesheet_directory_uri() . '/js/bootstrap.js',array(),false,false);
	wp_enqueue_script('bootstrap_js');
	/* end bootstrap */
	/* begin elevatezoom */
	wp_register_script('elevatezoom',get_stylesheet_directory_uri() . '/js/jquery.elevatezoom-3.0.8.min.js',array(),false,false);
	wp_enqueue_script('elevatezoom');	
	/* end elevatezoom */
	/* begin youtube */	
	wp_register_script('jquery_modal_video',get_stylesheet_directory_uri() . '/youtube/jquery-modal-video.min.js',array(),false,false);
	wp_enqueue_script('jquery_modal_video');
	wp_register_script('modal_video_js',get_stylesheet_directory_uri() . '/youtube/modal-video.min.js',array(),false,false);
	wp_enqueue_script('modal_video_js');
	wp_register_style( 'modal_video_css', get_stylesheet_directory_uri() . '/youtube/modal-video.min.css' ,array(),false,'all'  );
	wp_enqueue_style( 'modal_video_css' );
	/* end youtube */
	/* begin tab */
	wp_register_style( 'tab_css', get_stylesheet_directory_uri() . '/css/tab.css' ,array(),false,'all'  );
	wp_enqueue_style( 'tab_css' );
	/* end tab */	
	/* begin custom js */
	wp_register_script('customy_js',get_stylesheet_directory_uri() . '/js/custom.js',array(),false,false);
	wp_enqueue_script('customy_js');
	/* end custom js */
	/* begin style */
	wp_register_style( 'product', get_stylesheet_directory_uri() . '/css/product.css',array(),false,'all'   );
	wp_enqueue_style( 'product' );
	/* end style */	
	/* begin style */
	wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css',array(),false,'all'   );
	wp_enqueue_style( 'childstyle' );
	/* end style */	
}
function do_output_buffer(){
		ob_start();
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);
add_action('init', 'do_output_buffer');
/* begin menu */
add_action('init', 'zendvn_theme_register_menus');
function zendvn_theme_register_menus(){
	register_nav_menus(
		array(									
			'category-product-menu' 			=> __('CategoryProductMenu'),			
		)
	);
}
/* end menu */
/* begin ẩn menu */
function vnkings_admin_menus() {   
   remove_menu_page( 'edit.php?post_type=portfolio_page' ); 
   remove_menu_page( 'edit.php?post_type=testimonials' ); 
   remove_menu_page( 'edit.php?post_type=slides' ); 
   remove_menu_page( 'edit.php?post_type=carousels' ); 
   remove_menu_page( 'edit.php?post_type=masonry_gallery' ); 
   remove_menu_page( 'edit-comments.php' ); 
   remove_menu_page( 'tools.php' );     
   remove_menu_page( 'edit.php?post_type=acf' );   
   remove_menu_page( 'vc-general' );    
}
add_action( 'admin_menu', 'vnkings_admin_menus' );
/* end ẩn menu */
/* begin fanpage */
add_action('wp_footer', 'script_fanpage');
function script_fanpage(){
	$strScript='<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = \'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=206740246563578\';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, \'script\', \'facebook-jssdk\'));</script>';
	echo $strScript;
	$modal='<div class="modal fade modal-add-cart" id="modal-alert-add-cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header relative">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">

      </div>      
    </div>
  </div>
</div>  
';
	echo $modal;
	$tawk_to='<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src=\'https://embed.tawk.to/5b23257f61a2e64e5fb57e1f/default\';
s1.charset=\'UTF-8\';
s1.setAttribute(\'crossorigin\',\'*\');
s0.parentNode.insertBefore(s1,s0);
})();
</script>';
	echo $tawk_to;
}
/* end fanpage */

/* begin header-top */
add_shortcode('header_top','showHeaderTop');
function showHeaderTop(){
	global $zendvn_sp_settings;		
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<div class="box-logo">
					<center><a href="<?php echo site_url(); ?>"><img width="200" src="<?php echo site_url('wp-content/uploads/logo.png'); ?>"></a></center>
				</div>				
			</div>
			<div class="col-lg-2">
				<div class="hotline3">Selafu sẵn sàng phục vụ quý khách</div>
				<div class="hotline1">HOTLINE</div>
				<div class="hotline2"><?php echo @$zendvn_sp_settings['telephone']; ?></div>
			</div>
		</div>
	</div>	
	<?php
}
/* end header-top */
/* begin banner */
add_shortcode('banner','loadBanner');
function loadBanner($attrs){
	$item=$attrs['item'];	
	?>
	<div class="margin-top-15">
        <script type="text/javascript" language="javascript">
            jQuery(document).ready(function(){
                jQuery(".banner").owlCarousel({
                    autoplay:true,                    
                    loop:true,
                    margin:0,                        
                    nav:false,            
                    mouseDrag: true,
                    touchDrag: true,                                
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
                });

            });                
        </script>
        <div class="owl-carousel banner owl-theme">
            <?php                                 
            $source_slug=array($item);
            $args = array(
                'post_type' => 'zabanner',  
                'orderby' => 'id',
                'order'   => 'DESC',                                                  
                'tax_query' => array(
                    array(
                        'taxonomy' => 'za_banner',
                        'field'    => 'slug',
                        'terms'    => $source_slug,                                  
                    ),
                ),
            ); 
            $the_query = new WP_Query( $args );
            if($the_query->have_posts()){
                while ($the_query->have_posts()){
                    $the_query->the_post();
                    $post_id=$the_query->post->ID;  
                    $featured_img=get_the_post_thumbnail_url($post_id, 'full'); 
                    ?>
                    <div><img src="<?php echo $featured_img; ?>"></div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
	<?php
}
/* end banner */