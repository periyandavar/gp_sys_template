(function($) {

	"use strict";

	$('[data-toggle="tooltip"]').tooltip()
	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

})(jQuery);

$(document).ready(function () {
  
$('#submitBtn').on('click', function () {
  var name = $('#username').val();
  $.ajax({
    url: '/user',
    type: 'POST',
    contentType: 'application/json',
    headers: {
      'X-App-Token': $('input[name="token"]').val()
    },
    data: JSON.stringify({
      username: name
    }),
    success: function (response) {
        data = JSON.parse(response);
      $('#errorMessage').text('');
      $('#login-modal').modal('hide');
      $('#welcome-message').text(data.message);
    },
    error: function (error) {
    error = JSON.parse(error.responseText);
      $('#errorMessage').text('Error: ' + error.data);
    }
  });
});
});
