
//novo script de visao de modelos

jQuery(document).ready(function(){

	jQuery('.sections:first').show();
	jQuery('.sections:first li:first a').addClass('on');

	jQuery('.isSec:first').show();
	img = jQuery('.isSec:first li').attr('class');
	jQuery('.imgView').css({'height': '100%', 'width': '100%', 'left': '0px','background-image':'url('+img+')'});
	jQuery('.isSec:first li:first a').addClass('on');


	jQuery('.partB').click(function (){
		jQuery('.sections').hide();	
		name = jQuery(this).attr('name');
		jQuery('.section').find('')
		jQuery('.sections[name="' + name + '"]').show().find('li:first').addClass('on');

	});

	jQuery('.section a').click(function () {

		jQuery('.isSec').hide();
		name = jQuery(this).attr('name');
		jQuery('.section a');
		jQuery(this).parent().parent().find('.on').removeClass('on');
		jQuery(this).addClass('on');

		section = jQuery('ul[name="' + name + '"]');
		section.show();
		elm = section.find('li:first');
		img = elm.attr('class');
		jQuery('.imgView').css({'height': '100%', 'width': '100%', 'left': '0px','background-image':'url('+img+')'});
		elm.children().addClass('on');

	});

	jQuery('.isSec li').click(function (event){

		img = jQuery(this).attr('class');
		jQuery('.imgView').css({'height': '100%', 'width': '100%', 'left': '0px','background-image':'url('+img+')'});
		jQuery('.isSec li .on').removeClass('on');
		jQuery(this).children().addClass('on');

	});

	jQuery('.next').click(function() {
		
		sections = jQuery('.isSec');
		links = sections.find('li');

		elm = links.find('.on').parent();	

		if (elm.is(':last-child'))
		{

			if(elm.parent().next().is('ul'))
			{

				jQuery('.section').children().removeClass('on');
				name = elm.parent().next().attr('name');

				section = jQuery('.section').find('a[name="'+name+'"]');
				section.addClass('on');
				section.parent().parent().show();

				links.children().removeClass('on');
				jQuery('.isSec').hide();
				elm.parent().next().show();
				elm.parent().next().attr('name');

				img = elm.parent().next().find('li:first').attr('class');
				elm.parent().next().find('li:first').children().addClass('on');

			}

			else{
				alert('fim do ensaio! =D');
			}
		}

		else{
			links.children().removeClass('on');
			img = elm.next().attr('class');
			elm.next().children().addClass('on');
		}

		jQuery('.imgView').css({'height': '100%', 'width': '100%', 'left': '0px','background-image':'url('+img+')'});

	}); 

	jQuery('.previous').click(function() 
	{

		sections = jQuery('.isSec');
		links = sections.find('li');

		elm = links.find('.on').parent();
		
	

		if (elm.is(':first-child'))
		{

			if(elm.parent().prev().is('ul'))
			{
				links.children().removeClass('on');
				jQuery('.isSec').hide();
				elm.parent().prev().show();
				img = elm.parent().prev().find('li:last').attr('class');
				elm.parent().prev().find('li:last').children().addClass('on');

			}

			else{

				alert('começo do ensaio! =D');
			}
		}

		else{
			links.children().removeClass('on');
			img = elm.prev().attr('class');
			elm.prev().children().addClass('on');

		}

		jQuery('.imgView').css({'height': '100%', 'width': '100%', 'left': '0px','background-image':'url('+img+')'});

	});

});