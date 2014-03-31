$(document).ready(function() {
  $('#open').click(function() {
	 $('#new_record form').slideToggle(300);
	 $(this).toggleClass('close'); 
  }); // end click
}); // end ready

function delete_user( id ){
  var answer = confirm('Are you sure you want to delete this record?');
  if ( answer ){ //if user clicked ok
  //redirect to url with action as delete and id to the record to be deleted
  window.location = 'crud.php?action=delete&id=' + id;
  }
}

$(document).ready(function() {
	$('.iframe').fancybox({
		scrolling: 'no',
		titlePosition: 'inside',
		transitionIn: 'elastic',
		transitionOut: 'elastic',
		easingIn: 'easeInSine',
		easingOut: 'easeOutSine',
	}); //end fancybox
}); // end ready