<?php
get_header();
gt_set_post_view();
?>

<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    // Get books query
    $books = new WP_Query(array(
    'post_type' => 'page',
    'posts_per_page' => '1',
    'paged' => $paged
    ));
    // Open books loop
    if ( $books->have_posts() ) :
    while ($books->have_posts()) : $books->the_post();
?>
<div class="row parent-container">
	<div class="col-12 col-lg-7 height-guide">
		<?php
		get_template_part('components/imageblock');
		?>
	</div>
	<div class="col-12 col-lg-5 position-relative">
        <div class="col-12 col-lg-12 height-follower-23 details">
			<?php
			get_template_part('components/details');
			?>
        </div>
        <div class="footer-article-element position-absolute bottom-0 w-100">
            <div class="row">
                <div class="col-12 col-lg-4 align-content-center align-items-center justify-content-center height-follower-13">
                    <?php
                    get_template_part('components/counter');
                    ?>
                </div>
                <div class="col-12 col-lg-8 align-content-center  align-items-center justify-content-center height-follower-13">
                    <?php
                    get_template_part('components/imageblock');
                    ?>
                </div>
            </div>
        </div>
	</div>
</div>
<div class="row child-container-dark">

        <div class="col-12 col-lg-7  align-content-center  align-items-center justify-content-center left-7-block">
            <?php
            get_template_part('components/backstory');
            ?>
        </div>
        <div class="col-12 col-lg-5 right-5-block position-relative">
            <div class="row">
                <div class="col-12 col-lg-4 align-content-center align-items-center justify-content-center  height-follower-13">
                    <?php
                    get_template_part('components/imageblock');
                    ?>
                </div>
                <div class="col-12 col-lg-8 align-content-center align-items-center justify-content-center  text-end">
                    <button class="btn btn-sm btn-outline-dark" id="next-product">
                        &xrarr;
                    </button>
                </div>
            </div>
        </div>
</div>




<?php
get_footer();
?>