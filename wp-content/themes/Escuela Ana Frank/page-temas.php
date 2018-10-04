<<<<<<< HEAD
<?php get_header(); ?>
<!--  Template Name: Temas -->

        <div class="card col-md-6 text-white bg-info mt-3" id="caja1">
            <img class="card-img-top" src=".../100px180/">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card col-md-6 mt-3" id="caja2">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
           <img class="card-img-bottom" src=".../100px180/">
        </div>
         <div class="card col-md-6" id="caja3">
            <img class="card-img-top" src=".../100px180/">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
         <div class="card col-md-6 text-white bg-info" id="caja4">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
           <img class="card-img-bottom" src=".../100px180/">
        </div>
        <div class="card col-md-6 text-white bg-info" id="caja5">
            <img class="card-img-top" src=".../100px180/">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card col-md-6" id="caja6">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
           <img class="card-img-bottom" src=".../100px180/">
        </div>
        <div class="card col-md-12" id="caja6">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
           <img class="card-img-bottom" src=".../100px180/">
        </div>

<?php get_footer(); ?>
=======
<?php get_header(); ?>
<!--  Template Name: Temas -->
        <div class="jumbotron bg-image bg-parallax overlay" id="contacto">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-md-offset-1 text-center mt-5 p-5">
                <h1 class="display-3">Revisa nuestros temas de interés</h1>
                <p>Podrás encontrar noticias importantes y comunicados</p>
              </div>
            </div>
          </div>
         </div>
<div class="contenedor">
  <div class="row">
    <?php
      $arg = array(
        'post_type'		 => 'temas de interés',
        'posts_per_page' => 8
      );

      $get_arg = new WP_Query( $arg );

      while ( $get_arg->have_posts() ) {
        $get_arg->the_post();
      ?>

      <div class="card col-md-4 text-white bg-info m-2" id="caja1">
        <img class="card-img-top" src="<?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?> ">
        <div class="card-body">
          <h5 class="card-title"><?php the_title() ?></h5>
          <p class="card-text"><?php the_content() ?></p>
        </div>
      </div>
        <?php } wp_reset_postdata();
      ?>
  </div>
</div>


<?php get_footer(); ?>
>>>>>>> avance proyecto
