<?php
    /*
    Template Name: Archives
    */
?>

<?php get_header(); ?>
<?php get_template_part('nav'); ?>

<section class="blog-area blog-bg pt-120 pb-120" data-background="<?php echo bloginfo('template_directory');?>/img/bg/blog_bg.jpg">
  <div class="container mt-12">
    
    <div class="grid">
      <div class="grid-sizer col-md-4"></div>

      <div class="grid-item col-md-4 xs-8 mb-4">
        <div class="card scale">
          <div class="card-body">
            <h5 class="card-title center mb-30">Last 5 entries</h5>
            <ul class="lastentries">
              <?php
              $args = array(
                'type' => 'postbypost',
                'limit' => 5,
              );
              wp_get_archives($args);
              ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="grid-item col-md-4 xs-4 mb-4">
        <div class="card scale">
          <div class="card-body">
            <h5 class="card-title center mb-30">Category list</h5>
            <ul class="categorylist lastentries">
              <?php
              $args = array(
                'title_li' => '0',
                'show_count' => 1,
                // 'number' => 4,
              );
              wp_list_categories($args);
              ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="grid-item col-md-4 xs-8 mb-4">
        <div class="card scale">
          <div class="card-body">
            <h5 class="card-title center mb-30">Tag list</h5>
            <ul class="categorylist">
              <?php
                list_tags(5);
              ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="grid-item col-md-4 xs-4 mb-4">
        <div class="card scale">
          <div class="card-body">
            <h5 class="card-title center mb-30">Authors</h5>
            <ul class="categorylist lastentries">
              <?php
              $args = array(
                'orderby' => 'post_count',
                'order' => 'DESC',
                'hide_empty' => false,
                'optioncount' => 1,
              );
              wp_list_authors($args);
              ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="grid-item col-md-4 xs-8 mb-4">
        <div class="card scale">
          <div class="card-body">
            <h5 class="card-title center mb-30">Daily Archives</h5>
            <ul class="lastentries">
              <?php
              $args = array(
                'type' => 'daily',
                'show_post_count' => 1,
              );
              wp_get_archives($args);
              ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="grid-item col-md-4 xs-8 mb-4">
        <div class="card scale">
          <div class="card-body">
            <h5 class="card-title center mb-30">Monthly entries</h5>
            <ul class="lastentries">
              <?php
              wp_get_archives();
              ?>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- <div class="grid-item col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Panel title</h5>
            <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
            <a class="card-link">Card link</a>
            <a class="card-link">Another link</a>
          </div>
        </div>
      </div>
      
      <div class="grid-item col-md-3 mb-4">
        <div class="card">
          <div class="card-body">
            This is some text within a panel body.
          </div>
        </div>
      </div>
      <div class="grid-item col-md-3 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Panel title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Panel subtitle</h6>
            <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
            <a href="#!" class="card-link mr-3">Card link</a>
            <a href="#!" class="card-link ml-0">Another link</a>
          </div>
        </div>
      </div>
      <div class="grid-item col-md-6 mb-4">
        <div class="card">
          <div class="card-header">
            Quote
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="grid-item col-md-3 mb-4">
        <div class="card">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
      </div>
      <div class="grid-item col-md-3 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="font-weight-bold mb-3">Panel title</h5>
            <p class="mb-0">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
          <div class="card-body">
            <a href="#!" class="card-link mr-3">Card link</a>
            <a href="#!" class="card-link ml-0">Another link</a>
          </div>
        </div>
      </div>
      <div class="grid-item col-md-3 mb-4">
        <div class="card">
          <div class="card-header">
            Featured
          </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#!" class="btn btn-primary btn-sm">Button</a>
          </div>
        </div>
      </div>-->
    </div>
    
  </div>
</section>
<?php
    get_footer();
?>