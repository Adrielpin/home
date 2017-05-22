
//novo script de visao de modelos

jQuery(document).ready(function(){

	jQuery('.sections:first').show();

	jQuery('.isSec:first').show();
	img = jQuery('.isSec:first li').attr('class');
	jQuery('.imgView').css({'height': '100%', 'width': '100%', 'left': '0px','background-image':'url('+img+')'});
	jQuery('.isSec:first li:first a').addClass('on');


	jQuery('.partB').click(function (){
		jQuery('.sections').hide();	
		name = jQuery(this).attr('name');
		jQuery('.sections[name="' + name + '"]').show();

	});

	jQuery('.section a').click(function () {

		jQuery('.isSec').hide();								
		name = jQuery(this).attr('name');
		jQuery('ul[name="' + name + '"]').show();

	});

	jQuery('.isSec li').click(function (event){

		img = jQuery(this).attr('class');
		jQuery('.imgView').css({'height': '100%', 'width': '100%', 'left': '0px','background-image':'url('+img+')'});
		jQuery('.isSec li a').removeClass('on');
		jQuery(this).children().addClass('on');

	});

	jQuery('.next').click(function() {
		
		sections = jQuery('.isSec');
		links = sections.finc('li');
		console.log(links);

		elm = elements.find('.on').parent();
		console.log(elm.next());

		img = elm.next().attr('class');
		console.log(img);

		jQuery('.imgView').css({'height': '100%', 'width': '100%', 'left': '0px','background-image':'url('+img+')'});
		elm.children().removeClass('on');
		elm.next().children().addClass('on');

	}); 

	jQuery('.previous').click(function() 
	{

		elm = jQuery('.isSec li .on').parent();
		img = elm.prev().attr('class');
		console.log(img);
		jQuery('.imgView').css({'height': '100%', 'width': '100%', 'left': '0px','background-image':'url('+img+')'});
		elm.children().removeClass('on');
		elm.prev().children().addClass('on');

	});

});