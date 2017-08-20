<!DOCTYPE html>
<html>
	<head>
 
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php if ($is_front):  ?>	
       
      <link rel="image_src" href="http://elielcezar.com/sites/all/themes/elielcezar/img/elielcezar.jpg" />
      <meta name="robots" content="all" />            
      <meta name="description" content="Web designer freelancer. Criação de logotipos, blogs, e-commerce, gerenciamento de mídias sociais e campanhas online utilizando Google Adwords." />
      <meta name="keywords" content="web designer, logotipos, blogs, sites, e-commerce, mídias sociais, Google Adwords, design, design gráfico, designer, freelancer" />

      <meta property="og:locale" content="pt_BR"> 
      <meta property="og:url" content="http://www.elielcezar.com">       
      <meta property="og:title" content="<?php print $head_title; ?>">
      <meta property="og:site_name" content="Eliel Cezar - Web Designer">       
      <meta property="og:description" content="Web designer freelancer. Criação de logotipos, blogs, e-commerce, gerenciamento de mídias sociais e campanhas online utilizando Google Adwords.">       
      <meta property="og:image" content="http://elielcezar.com/sites/all/themes/elielcezar/img/elielcezar.jpg">
      <meta property="og:image:type" content="image/jpeg">       
      <meta property="og:type" content="website">
      
<?php endif; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php print $styles; ?>
<?php print $scripts; ?>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<!--[if lt IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- GOOGLE FONT-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,600,700,300' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target=".navbar" class="<?php print $classes; ?>" <?php print $attributes;?>>

  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1567476600162073',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

	
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1686284-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
