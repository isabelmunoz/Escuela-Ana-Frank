<<<<<<< HEAD
<?php get_header(); ?>
<!--  Template Name: Contacto -->

            <div class="jumbotron bg-image bg-parallax overlay" id="contacto">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-md-offset-1 text-center">
                    <h1 class="display-3">Contáctanos</h1>
                    <p>A través del siguiente formulario podrá contactarse con nuestra escuela para realizar consultas, reclamos o sugerencias. Trataremos de responder a la brevedad.</p>
                  </div>
                </div>
              </div>
             </div>


            <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <div class="well well-sm">
                      <form class="form-horizontal" method="post">
                              <div class="form-group">
                                  <i class="fas fa-user bigicon"></i>
                                  <input id="fname" name="name" type="text" placeholder="Nombre Completo" class="form-control">
                              </div>

                              <div class="form-group">
                                  <i class="fas fa-envelope bigicon"></i>
                                  <input id="email" name="email" type="text" placeholder="Correo Electrónico" class="form-control">
                              </div>

                              <div class="form-group">
                                  <i class="fas fa-phone-square bigicon"></i>
                                  <input id="phone" name="phone" type="text" placeholder=" Teléfono / Celular" class="form-control">
                              </div>

                              <div class="form-group">
                                  <i class="fas fa-pencil-alt bigicon"></i>
                                  <textarea class="form-control" id="message" name="message" placeholder="Introduzca su mensaje aquí" rows="7"></textarea>
                              </div>

                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                              </div>
                      </form>
                  </div>
              </div>
            </div>
            <h2>Nuestra Ubicación</h2>
            <div class="iframe_contenedor">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13330.210743174719!2d-70.737427!3d-33.3566342!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc637adb03705e6d9!2sEscuela+Ana+Frank!5e0!3m2!1ses!2scl!4v1531263147805" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
            </div>


<?php get_footer(); ?>
=======
<?php get_header(); ?>
<!--  Template Name: Contacto -->

            <div class="jumbotron bg-image bg-parallax overlay" id="contacto">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-md-offset-1 text-center mt-5 p-5">
                    <h1 class="display-3">Contáctanos</h1>
                    <p>A través del siguiente formulario podrá contactarse con nuestra escuela para realizar consultas, reclamos o sugerencias. Trataremos de responder a la brevedad.</p>
                  </div>
                </div>
              </div>
             </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <?php echo do_shortcode('[contact-form-7 id="29" title="Contact form 1"]') ?>
                        </div>
                    </div>

                <div class="col-md-6">
                      <h2>Nuestra Ubicación</h2>
                    <div class="iframe_contenedor">
                        <?php echo do_shortcode('[wpgmza id="1"]') ?>
                    </div>
                </div>
              </div>
            </div>


<?php get_footer(); ?>
>>>>>>> avance proyecto
