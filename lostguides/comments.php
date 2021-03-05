<?php

    comment_form(); // Visualiza el formulario de comentarios

    $argsComment = array(
        'style' => 'ul',
        'avatar_size' => '64',
        'type' => 'comment',
        'callback' => 'mytheme_comment',
    );
    wp_list_comments($argsComment); // Visualiza la lista de comentarios
/*
    function mytheme_comment($comment, $args, $depth) {
        if ( 'div' === $args['style'] ) {
            $tag       = 'div';
            $add_below = 'comment';
        } else {
            $tag       = 'li';
            $add_below = 'div-comment';
        }?>
        <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
        if ( 'div' != $args['style'] ) { ?>
            <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
        } ?>
            <div class="comment-author vcard"><div class="comment-avatar-thumb"><?php 
                if ( $args['avatar_size'] != 0 ) {
                    echo get_avatar( $comment, $args['avatar_size'] ); 
                } 
                ?> </div> <?php
                printf( __( '<cite class="robertito">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
            </div><?php 
            if ( $comment->comment_approved == '0' ) { ?>
                <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
            } ?>
            <div class="comment-meta commentmetadata">
                <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                    /* translators: 1: date, 2: time */ /*
                    printf( 
                        __('%1$s at %2$s'), 
                        get_comment_date(),  
                        get_comment_time() 
                    ); ?>
                </a><?php 
                edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
            </div>
     
            <?php comment_text(); ?>
     
            <div class="reply"><?php 
                    comment_reply_link( 
                        array_merge( 
                            $args, 
                            array( 
                                'add_below' => $add_below, 
                                'depth'     => $depth, 
                                'max_depth' => $args['max_depth'] 
                            ) 
                        ) 
                    ); ?>
            </div><?php 
        if ( 'div' != $args['style'] ) : ?>
            </div><?php 
        endif;
    } */

    function mytheme_comment($comment, $args, $depth) {
        if ( 'div' === $args['style'] ) {
            $tag       = 'div';
            $add_below = 'comment';
        } else {
            $tag       = 'li';
            $add_below = 'div-comment';
        }?>
        <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
        if ( 'div' != $args['style'] ) { ?>
            <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
        } ?>
            <div class="comment-avatar-thumb">
            <?php
                if ( $args['avatar_size'] != 0 ) {
                    echo get_avatar( $comment, $args['avatar_size'] ); 
                } 
            ?>
            </div>
            <div class="comment-text">
            <div class="comment-avatar-info"><h4>
                <?php
                    printf( __( '%s' ), get_comment_author_link() ); ?>
                <?php 
                if ( $comment->comment_approved == '0' ) { ?>
                    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
                } ?>
                    <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><span><?php
                        /* translators: 1: date, 2: time */
                        printf(
                            __('%1$s'), 
                            get_comment_date(),
                        ); ?></span>
                    </a><?php 
                    // edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        
                <div class="comment-reply"><?php 
                        comment_reply_link( 
                            array_merge( 
                                $args, 
                                array( 
                                    'reply_text' => '<i class="fas fa-reply"></i>',
                                    'add_below' => $add_below, 
                                    'depth'     => $depth, 
                                    'max_depth' => $args['max_depth'] 
                                ) 
                            ) 
                        ); ?>
                </div>
                </h4><?php 
            if ( 'div' != $args['style'] ) : ?>
                </div>
                <?php comment_text(); ?><?php 
        endif;
    }




    /*
    
    
    <!-- ······· Listado de los posts ordenados por fecha de publicación ·········-->

<br />

<div class="sidebar-section">

  <h2>Posts by date</h2>

  <ul class="bydate">

  <?php

    global $wpdb;

    $limit = 0;

    $year_prev = null;

    $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,	YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC");

    foreach($months as $month) :

      $year_current = $month->year;

      if ($year_current != $year_prev){

        if ($year_prev != null){?>



        <?php } ?>



      <li class="archive-year"><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/"><?php echo $month->year; ?></a></li>



      <?php } ?>

      



      <ul class="shop-sidebar pl25 alingleft"><li><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><span class="archive-month"><?php echo date_i18n("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></span><span class="badge badge-pasific pull-right"> <?php echo $month->post_count; ?> </span></a></li></ul>

    <?php $year_prev = $year_current;



    if(++$limit >= 18) { break; }



    endforeach; 

  ?>

  </ul>

</div>
    
    
    



// Clear DataBase stored data with a MySQL query

  

  global $wpdb; // nos permite lanzar una query directamente a la BBDD - CUIDADO!!!!!

  

  $wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'my_recipe'" );

  $wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN ( SELECT id FROM wp_posts)");

  $wpdb->query( "DELETE FROM wp_term_relationships WHERE object_id NOT IN ( SELECT id FROM wp_posts)");




    
    */