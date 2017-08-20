<div id="wrapper" class="toggled">
        <!-- Sidebar -->



<!--div id="sidebar-wrapper">

     <div id="sidebar">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/elielcezar.png" alt="Eliel Cezar" class="foto-perfil img-responsive" /></a>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/elielcezar3.png" alt="Eliel Cezar" class="logo img-responsive" /></a>
            <div id="menu-principal">
                <nav class="navbar navbar-default" role="navigation">
                   <ul class="nav nav-pills nav-stacked">
                      <li><a data-toggle="pill" href="#topo"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><span class="desc">Home</span></a></li>
                      <li><a data-toggle="pill" href="#portfolio"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span><span class="desc">Portfólio</span></a></li>
                      <li><a data-toggle="pill" href="#experiencia"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="desc">Sobre</span></a></li>
                      <li><a data-toggle="pill" href="#contato"><span class="glyphicon glyphicon-send" aria-hidden="true"></span><span class="desc">Contato</span></a></li>
                  </ul>
                </nav>
            </div>
            <div class="info">
              <p>elielcezar@gmail.com</p>
              <p>skype: eliel_cezar</p>
            </div>


             <section id="footer">
                Desenvolvido com <br /> <a href="http://drupal.org" target="_blank">Drupal</a> e muito <i class="fa fa-coffee"></i>

              </section>

      </div>
</div-->

<!-- /#sidebar-wrapper -->


       <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <div id="principal">

                <!--a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a-->

                <header id="topo">
                  <div class="container">
                      <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/elielcezar1.png" alt="Eliel Cezar" class="logo img-responsive" />
                      <h4>Web designer . Freelancer . Curitiba</h4>
                      <ul class="social">
                        <li class="facebook"><a href="http://fb.com/elielcezar" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="http://twitter.com/elielcezar" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="GitHub"><a href="http://github.com/elielcezar" target="_blank"><i class="fa fa-github"></i></a></li>
                      </ul>
                      <p>elielcezar@gmail.com</p>
                  </div>
                </header>

                <!--section id="portfolio">

                    <div class="wrapper-portfolio">
                      <div class="col-xs-4 coluna">
                        <?php print views_embed_view('portfolio_1', 'default'); ?>

                        <?php print views_embed_view('portfolio_4', 'default'); ?>

                        <?php print views_embed_view('portfolio_7', 'default'); ?>

                        <?php print views_embed_view('portfolio_11', 'default'); ?>
                      </div>

                      <div class="col-xs-4 coluna">
                        <?php print views_embed_view('portfolio_2', 'default'); ?>

                        <?php print views_embed_view('portfolio_5', 'default'); ?>

                        <?php print views_embed_view('portfolio_8', 'default'); ?>

                        <?php print views_embed_view('portfolio_10', 'default'); ?>

                        <?php print views_embed_view('portfolio_12', 'default'); ?>

                      </div>

                      <div class="col-xs-4 coluna">
                        <?php print views_embed_view('portfolio_3', 'default'); ?>

                        <?php print views_embed_view('portfolio_6', 'default'); ?>

                        <?php print views_embed_view('portfolio_9', 'default'); ?>

                        <?php print views_embed_view('portfolio_13', 'default'); ?>
                      </div>
                    </div>

                </section-->


            <?php //include "experiencia.tpl.php"; ?>


            <?php //include "contato.tpl.php"; ?>



            </div>
        </div><!-- /#page-content-wrapper -->
    </div>
  </div>
    <!-- /#wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php print base_path() . path_to_theme() .'/' ?>js/geral.js" type="text/javascript"></script>

<script src="<?php print base_path() . path_to_theme() .'/' ?>js/bootstrap.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.inview.js" type="text/javascript"></script>

<!--[if IE]>
     <script type="text/javascript">
$('.item-skills').each(function(){
    newWidth = $(this).parent().width() * $(this).data('percent');
    $(this).animate({
        width: newWidth,
    }, 1000);
});
</script>
<![endif]-->

<!--[if !IE]><!-->
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/custom_inview.js"></script>
<!--<![endif]-->


<script>
jQuery(document).ready(function(){

  $('#menu-principal').localScroll();
  $('header .scroll').localScroll();

});

</script>
