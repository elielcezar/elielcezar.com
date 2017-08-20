


var janela = $(window).width();
if(janela > 767){

 $(window).on('load resize', function(e){

	var janela = $(window).width();
	var altura = $(window).height();
	var meia_altura = altura/2 - 250;

	/*$('.front header').attr('style','height:'+altura+'px');*/

	$('.front header img.logo').attr('style','margin-top:'+meia_altura+'px');

});

}



/*-- Menu Toggle Script --*/
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
});
$("#sidebar-wrapper").mouseenter(function() {
$("#wrapper").removeClass("toggled");
}).mouseleave(function(){
$("#wrapper").addClass("toggled");
});


/*-- corrige style nas imagens de posts */
$("#principal p img").removeAttr("style");


/*--- portfolio geral ---*/
/*$('#portfolio .views-row').each(function(){
var alturaPortfolio = $(this).height() / 2;
var distanciaTopo = alturaPortfolio - 110;
$(this).find('.titulo').css('margin-top',''+distanciaTopo+'px');
});*/