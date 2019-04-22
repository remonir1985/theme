<?php
$ion_fp = new WP_Query(
    array(
        "meta_key"     => 'featurd',
        "meta_value"    =>'1',
        "posts_per_page" => 2
    )
);
$post_data = array();
while($ion_fp ->have_posts()){
    $ion_fp ->the_post();
    $post_data[] = array(
        "title"     =>  get_the_title(),
        "eccerpt"      =>  get_the_excerpt(),
       
       
    );
}

if($ion_fp->post_count>1):
    ?>
     <?php for ($i=1; $i < 3; $i++): ?>
<div class="4u">
							<section class="special box">
								<i class="icon fa-area-chart major"></i>
								<h3><?php echo esc_url($post_data[$i]['title'] ); ?></h3>
								<p><?php echo esc_url($post_data[$i]['eccerpt'] ); ?></p>
							</section>
                        </div>
                        
                        <?php endfor; ?>