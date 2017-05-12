<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title>@yield('page_title')</title>

	<meta name="viewport" content="width=650, user-scalable=no">

	<meta name="revisit-after" content="1">

	{{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}

	<script type="text/javascript" async="" src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/65b9209b-888b-4829-9309-546b912ac4e6-loader.js"></script>

	<script type="text/javascript" id="gtm-scroll-tracking">

		(function(e,k,a){function l(){if(!e.querySelector||!e.body.getBoundingClientRect)return!1;a.dataLayerName=a.dataLayerName||"dataLayer";a.distances=a.distances||{};p();m(k,"scroll",v(p,500))}function q(f,d,b,c,a){var g;for(g=0;g<d.length;g++){var h=parseInt(d[g],10),e="%"!==b?h+a:h/100*c+a,h=h+b;e<=c+a&&(f[h]=e)}return f}function r(f,a){var b=parseInt(f,10),c=a/b,e=[],g;for(g=1;g<c+1;g++)e.push(g*b);return e}function p(){var f=t(a.bottom),d=t(a.top),b=e.body,c=e.documentElement,b=Math.max(b.scrollHeight,b.offsetHeight,c.clientHeight,c.scrollHeight,c.offsetHeight);d&&(b-=d);f&&(b=f-(d||0));var f=b-5,d=d||0,b={},c=[],n=[];if(a.distances.percentages&&(a.distances.percentages.each&&(c=c.concat(a.distances.percentages.each)),a.distances.percentages.every))var g=r(a.distances.percentages.every,100),c=c.concat(g);a.distances.pixels&&(a.distances.pixels.each&&(n=n.concat(a.distances.pixels.each)),a.distances.pixels.every&&(g=r(a.distances.pixels.every,f),n=n.concat(g)));var b=q(b,c,"%",f,d),f=b=q(b,n,"px",f,d),d=void 0!==k.pageXOffset,b="CSS1Compat"===(e.compatMode||""),d=d?k.pageYOffset:b?e.documentElement.scrollTop:e.body.scrollTop,d=parseInt(d,10),b=parseInt,c="CSS1Compat"===e.compatMode?e.documentElement:e.body,c=c.clientHeight,d=d+b(c,10),h;for(h in f)if(d>f[h]&&!u[h])if(u[h]=!0,b=h,c=k.GoogleAnalyticsObject,"undefined"===typeof k[a.dataLayerName]||a.forceSyntax)if("function"===typeof k[c]&&"function"===typeof k[c].getAll&&2!==a.forceSyntax)k[c]("send","event",a.category,b,a.label,{nonInteraction:1});else"undefined"!==typeof k._gaq&&1!==a.forceSyntax&&k._gaq.push(["_trackEvent",a.category,b,a.label,0,!0]);else k[a.dataLayerName].push({event:"scrollTracking",attributes:{distance:b,label:a.label}})}function t(f){if("number"===typeof f||parseInt(f,10))return parseInt(f,10);try{var a=1===f.nodeType?f:e.querySelector(f),b=e.body.getBoundingClientRect().top,c=Math.floor(a.getBoundingClientRect().top-b);return c}catch(k){}}function v(a,d){var b,c,e,g=null,h=0,k=function(){h=new Date;g=null;e=a.apply(b,c)};return function(){var l=new Date;h||(h=l);var m=d-(l-h);b=this;c=arguments;0>=m?(clearTimeout(g),g=null,h=l,e=a.apply(b,c)):g||(g=setTimeout(k,m));return e}}function m(a,d,b){if(a.addEventListener)a.addEventListener(d,b);else if(a.attachEvent)a.attachEvent("on"+d,function(c){b.call(a,c)});else if("undefined"===typeof a["on"+d]||null===a["on"+d])a["on"+d]=function(c){b.call(a,c)}}var u={};"loading"!==e.readyState?l():e.addEventListener?m(e,"DOMContentLoaded",l):m(k,"load",l)})(document,window,{forceSyntax:!1,dataLayerName:!1,distances:{percentages:{each:[10,90],every:25},pixels:{each:[],every:null}},top:null,bottom:null,category:"Scroll Tracking",label:document.location.pathname});

	</script>

	<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/traffic-source-cookie/stable/traffic-source-cookie.min.js"></script>

	<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/lead-tracking/stable/lead-tracking.min.js"></script>

	<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-popups/stable/rdstation-popup.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/portal.css') }}">
	
	
</head>

<body class="br">

	<script type="text/javascript" src="{{ asset('assets/portal.js') }}"></script>

	<!-- Colocar o tag mananger aqui!!!! --> 

	@yield('menu')
	
</body>
</html>	