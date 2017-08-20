<div id="wrapper" class="toggled">
        <!-- Sidebar -->

<div id="sidebar-wrapper">

     <div id="sidebar">                
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/elielcezar.png" alt="Eliel Cezar" class="foto-perfil img-responsive" /></a>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/elielcezar3.png" alt="Eliel Cezar" class="logo img-responsive" /></a>
            <div id="menu-principal">
                <nav class="navbar navbar-default" role="navigation">                    
                   <ul class="nav nav-pills nav-stacked">
                      <li><a href="<?php print $front_page; ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><span class="desc">Home</span></a></li>
                      <li><a data-toggle="pill" href="#portfolio"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span><span class="desc">Portfólio</span></a></li>                      
                      <li><a data-toggle="pill" href="#experiencia"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><span class="desc">Sobre</span></a></li>
                      <li><a data-toggle="pill" href="#contato"><span class="glyphicon glyphicon-send" aria-hidden="true"></span><span class="desc">Contato</span></a></li>
                  </ul>
                </nav>
            </div><!-- menu principal --> 
           
            <div class="info">           
              <p>elielcezar@gmail.com</p>
              <p>skype: eliel_cezar</p>              
            </div>


             <section id="footer">
                Desenvolvido com <br/> <a href="http://drupal.org" target="_blank">Drupal</a> e muito <i class="icon-coffee"></i>
              </section>

      </div><!-- sidebar -->

</div>

<!-- /#sidebar-wrapper -->
       <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <div id="principal"> 

                <a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>

                 <?php if ($messages): ?>
                      <div id="messages">
                        <div class="section clearfix">
                        <?php print $messages; ?>
                      </div></div> <!-- /.section, /#messages -->          
                      <?php endif; ?>
                      <?php if ($tabs): ?>
                        <div class="tabs">
                          <?php print render($tabs); ?>
                        </div>
                      <?php endif; ?>   
               
                <div class="assinatura"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/elielcezar.svg" alt="Eliel Cezar" class="img-responsive" /></a></div>

                <header>
                    <?php if (($title)&&(!$is_front)): ?>                      
                        <div class="container">                          
                            <h1 class="title" id="page-title"><?php print $title; ?></h1>                                         
                        </div>                          
                       <?php endif; ?>
                </header> 


               <div id="conteudo" class="col-sm-12">                      
                      <?php print render($page['content']); ?>            
                  </div> <!-- conteudo -->



                  <?php include "experiencia.tpl.php"; ?>

                  <?php include "contato.tpl.php"; ?>
                   

                
                </div> <!-- principal -->
                     
              </div>
                
            
        </div>
        <!-- /#page-content-wrapper -->
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

  $('#menu-principal').localScroll({offset: {top:0}});  
  $('header .scroll').localScroll({offset: {top:0}});

});

</script>
    

