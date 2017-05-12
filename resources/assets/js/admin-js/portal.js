$(document).ready(function (){
	$(".button-collapse").sideNav({
  		edge: 'left', // Choose the horizontal origin
  		closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
});

	$('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
  }
  );

	$('.dropdown-content').on('click', function(e) {
		e.stopPropagation();
	});
});