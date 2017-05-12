
_CapaModeloHomeEffect = function() { var dnext = false; var dshowed = false; $$('#div-destaque a').each(function(a_) { if (a_.style.display!='none') { dshowed=a_; } else { if (!dnext) { dnext =  a_; } } }); dnext = dshowed.next('a') ? dshowed.next('a') : dnext; if (dnext) { Effect.Fade( dshowed, {duration: 1}); Effect.Appear( dnext, {duration: 1.2}); } };
BellaClub.postEnquete = function() { BellaClub.getURL('div-home-enquete-content', $('fEnquete').serialize(), 'POST'); };

var _cadNewsRD = function() {

	if ($('rd-input-news-email').value.length < 7) {
		alert(aErros['todos_campos']);
		return false;
	}

	document.body.style.cursor = "default";
	
	if (!$('div-box-fnews')) {
		$('div-ups').insert({
			after: '<div id="div-box-fnews" class="' + SUnitFolder + ' div-box-gnr"></div>'
		});
	}

	BellaClub.getURL('div-box-fnews', "action=sdnews2&rd=1&page=h&" + $('form-pop-news-rd').serialize(), 'POST');
	
	$('div-popup-news-rd').hide();
        //_avoidExitPopUp();
        return false;
    };

    var rd_exit_to_top_timeout = false;
    
    var rd_exit_to_top = function() {
    	rd_clear_top_timeout();
    	rd_exit_to_top_timeout = window.setTimeout(rd_show_popnews, 300);
    };

    var rd_clear_top_timeout = function() {
    	if (rd_exit_to_top_timeout) {
    		window.clearTimeout(rd_exit_to_top_timeout);
    	}
    };

    var rd_show_popnews = function() {
    	$('div-popup-news-rd').show();
    	Centralizar('div-popup-news-rd');
    };

    var rd_popnews_events = function() {
    	$$('.barra-menu-top')[0].observe('mouseout', rd_exit_to_top);
    	$$('.barra-menu-top')[0].observe('mouseover', rd_clear_top_timeout);
    	$$('body')[0].observe('mouseover', rd_clear_top_timeout);
    };

    var rd_remove_popup = function() {
    	$$('.barra-menu-top')[0].stopObserving('mouseout');
    	$$('.barra-menu-top')[0].stopObserving('mouseover');
    	$$('body')[0].stopObserving('mouseover');
    	rd_clear_top_timeout();
    	$('div-popup-news-rd').remove();
    };

    window.setTimeout(rd_popnews_events, 600);

    //@deprecated 
    urchinTracker = function(strPag) {
    	try {
    		__gaTracker('Unidade.send', 'pageview', strPag);
    		__gaTracker('Geral.send', 'pageview', strPag);
            // if (pageExtraTracker) { __gaTracker('E1.send', 'pageview', strPag); }
            //  if (pageExtraTracker2) { __gaTracker('E2.send', 'pageview', strPag); }
            if (pageExtraTrackerJS) {
            	pageExtraTrackerJS(strPag);
            }
        }
        catch (e) {}
    };

    //@deprecated
    __gaTrackSubscription = function(ordId, ordValue, ordPlanId, ordPlanDescri, ordMethodPayment) {
    	try {
    		var transaction = {
    			'id': ordId,
    			'affiliation': 'Bella',
    			'revenue': ordValue,
    			'option': ordMethodPayment
    		};

    		var item = {
    			'id': ordId,
    			'name': ordPlanDescri,
    			'sku': ordPlanId,
    			'price': ordValue,
    			'quantity': '1'
    		};

    		__gaTracker("Unidade.ecommerce:addTransaction", transaction);
    		__gaTracker("Unidade.ecommerce:addItem", item);
    		__gaTracker("Unidade.ecommerce:send");

    	}

    	catch (err) {}

    };