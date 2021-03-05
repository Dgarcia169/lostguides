<?php
    /*
    Template Name: Reviews
    */
?>

<?php get_header(); ?>
<?php get_template_part('nav'); ?>

<section class="blog-area blog-bg pt-120 pb-120" data-background="<?php echo bloginfo('template_directory');?>/img/bg/blog_bg.jpg">
  <div class="container mt-12">
    
    <div class="grid">
      <div class="grid-sizer col-md-4"></div>

      <?php
        $paged = get_query_var('paged') > 1 ? get_query_var('paged') : 1; // el identificador del get_query_var es page si no es index (se usa page cuando es contenido estatico)
        $args = array(
            'paged' => $paged,
            'post_type' => array('lostguides-reviews'),
            'post_per_page' => 6,
        );
        $reviews_query = new WP_Query($args);
        if($reviews_query->have_posts()) {
            while($reviews_query->have_posts()) {
                $reviews_query->the_post();
                if(has_post_thumbnail()) {
                    $postImg = get_the_post_thumbnail_url();
                } else {
                    $postImg = get_template_directory_uri() . "/img/bg/default.jpg";
                }
                ?>
                <div class="grid-item col-md-4 xs-8 mb-4">
                    <div class="card scale">
                    <div class="card-body">
                        <h5 class="card-title center mb-30"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

                        
                        <div class="blog-post-thumb">
                            <a href="<?php the_permalink(); ?>"><img alt="" src='<?php echo $postImg; ?>'></a>
                        </div>

                        <p><?php the_excerpt(); ?></p>
                        <div class="row center">
                            <div class="col-md-6">
                                <p class="ptitle"><b>Release</b></p>
                                <p><?php echo get_post_meta( $post->ID, 'release', true ); ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="ptitle"><b>PEGI</b></p>
                                <?php  // get_post_meta( $post->ID, 'pegi', true ); ?>
                                <?php
                                if(get_post_meta($post->ID, 'pegi', true)) {
                                    if(get_post_meta($post->ID, 'pegi', true) == 3) {
                                        echo "<img class='pegiimg' src='".plugins_url()."/reviews/assets/imgs/pegi3.png'>";
                                    } else if(get_post_meta($post->ID, 'pegi', true) == 7) {
                                        echo "<img class='pegiimg' src='".plugins_url()."/reviews/assets/imgs/pegi7.png'>";
                                    } else if(get_post_meta($post->ID, 'pegi', true) == 12) {
                                        echo "<img class='pegiimg' src='".plugins_url()."/reviews/assets/imgs/pegi12.png'>";
                                    } else if(get_post_meta($post->ID, 'pegi', true) == 16) {
                                        echo "<img class='pegiimg' src='".plugins_url()."/reviews/assets/imgs/pegi16.png'>";
                                    }else if(get_post_meta($post->ID, 'pegi', true) == 18) {
                                        echo "<img class='pegiimg' src='".plugins_url()."/reviews/assets/imgs/pegi18.png'>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-md-6">
                                <p class="ptitle"><b>Categories</b></p>
                                <p>
                                    <?php
                                        $categories = array();
                                        if(get_post_meta( $post->ID, 'pc', true )) array_push($categories, "PC");
                                        if(get_post_meta( $post->ID, 'ps4', true )) array_push($categories, "PS4");
                                        if(get_post_meta( $post->ID, 'ps5', true )) array_push($categories, "PS5");
                                        if(get_post_meta( $post->ID, 'xboxone', true )) array_push($categories, "Xbox One");
                                        if(get_post_meta( $post->ID, 'xboxseriesx', true )) array_push($categories, "Xbox Series X");
                                        if(get_post_meta( $post->ID, 'switch', true )) array_push($categories, "Nintendo Switch");
                                        $cats = implode(", ", $categories);
                                        echo $cats;
                                    ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="ptitle"><b>Genres</b></p>
                                <p>
                                    <?php
                                        $genres = array();
                                        if(get_post_meta( $post->ID, 'my_action', true )) array_push($genres, "Action");
                                        if(get_post_meta( $post->ID, 'my_adventure', true )) array_push($genres, "Adventure");
                                        if(get_post_meta( $post->ID, 'my_rpg', true )) array_push($genres, "RPG");
                                        if(get_post_meta( $post->ID, 'my_strategy', true )) array_push($genres, "Strategy");
                                        if(get_post_meta( $post->ID, 'my_platforms', true )) array_push($genres, "Platforms");
                                        if(get_post_meta( $post->ID, 'my_puzzle', true )) array_push($genres, "Puzzle");
                                        $genresimplode = implode(", ", $genres);
                                        echo $genresimplode;
                                    ?>
                                </p>
                            </div>

                            <div class="col-md-6">
                                <p class="ptitle"><b>Developer</b></p>
                                <p><?php echo get_post_meta( $post->ID, 'developer', true ); ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="ptitle"><b>Editor</b></p>
                                <p><?php echo get_post_meta( $post->ID, 'editor', true ); ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="ptitle"><b>Text</b></p>
                                <p>
                                    <?php
                                        $text = array();
                                        if(get_post_meta( $post->ID, 'my_textspanish', true )) array_push($text, "Spanish");
                                        if(get_post_meta( $post->ID, 'my_textenglish', true )) array_push($text, "English");
                                        $textimplode = implode(", ", $text);
                                        echo $textimplode;
                                    ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="ptitle"><b>Voices</b></p>
                                <p>
                                    <?php
                                        $voices = array();
                                        if(get_post_meta( $post->ID, 'my_voicesspanish', true )) array_push($voices, "Spanish");
                                        if(get_post_meta( $post->ID, 'my_voicesenglish', true )) array_push($voices, "English");
                                        $voicesimplode = implode(", ", $voices);
                                        echo $voicesimplode;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <?php
            }
        }

      ?>
      

      <?php 
        $big = 999999999; // se necesita un número salido de madre
        echo paginate_links( array(
            'prev_text' => 'Previous Page',
            'next_text' => 'Next Page',
            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $reviews_query->max_num_pages
        ));
      ?>

  </div>
</section>
<?php
    get_footer();
?>


