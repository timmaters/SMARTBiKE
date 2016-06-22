$(document).ready(function()
{
	//Target ophalen uit objStickyMenuClass (Target is een variabele)
	//Target is de gehele <header> uit html
	objStickyMenuClass.target = $('header');
	//Init ophalen uit objStickyMenuClass (Init is een functie, dat is te zien door: (hier komen parameters);)
	//Hier wordt de class ook opgestart.
	objStickyMenuClass.init();
});

var objStickyMenuClass =
{
	target: '',
	currentScroll: '',
	activeItem: '',
	//Opstart Class
	init: function()
	{
		//this staat hier voor objStickyMenuClass, en start captureScroll.
		this.captureScroll();
		this.createClickEvents();
	},

	//captureScroll is een variabele, en daar duwen we een functie in.
	captureScroll: function()
	{
		//proxy zorgt ervoor dat this nu objStickyMenuClass is en niet &(window). (e) staat voor
		$(window).scroll($.proxy(function(e)
		{
			this.currentScroll = $(window).scrollTop();

		},this));
	},

	createClickEvents: function()
	{
		//zoek naar iedere a binnen target(header).
		this.target.find('a').each(function()
		{
			//de gevonden a's worden vervangen door this, zodra je er op klikt. Dus dan weet ie dat het om dat menuitem gaat.
			$(this).click(function(e)
			{
				//zorgt ervoor dat de link zich niet gedraagt als normaal.
				e.preventDefault();

				//de link waar je op klikt, daar wordt de rel aan toegevoegd die benoemd is in de html <a href rel="hoi"> <div id="hoi">
				objStickyMenuClass.activeItem = $(this).attr('rel');
				objStickyMenuClass.slideTo();
			});
		});

		//Dit stuk is voor de backtotop knop.
		this.target.parent().find('.backtotop').each(function()
		{
			$(this).click(function(e)
			{
				e.preventDefault();

				objStickyMenuClass.activeItem = '';
				objStickyMenuClass.slideTo();
			});
		});
	},

	slideTo: function()
	{
		//als het activeItem niks is, scroll naar 0 (bovenaan de pagina)
		if(this.activeItem == '')
		{
			$('html,body').animate({
				scrollTop: 0
			}, 800);
		}
		else
		{
			//anders scrollt de pagina naar de div waarvan je de link aanklinkt.
			$('html,body').animate({
				scrollTop: $('#' + this.activeItem).offset().top
			}, 500);
		}
	},



}
