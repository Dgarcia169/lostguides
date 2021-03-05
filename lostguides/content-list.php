<?php
    global $sw;
    $sw++;
?>

<tr class="table-tr <?php echo ($sw % 2 == 0) ? 'par' : 'impar'; ?>">
    <td><?php echo $sw; ?></td>
    <td><?php the_time(' M j, Y'); ?></td>
    <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
    <td><?php the_author_posts_link(); ?></td>
</tr>