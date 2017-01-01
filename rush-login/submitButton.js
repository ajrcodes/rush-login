$(document).ready(function(){

	$('#saveData').click(function(){

		$.post("submit.php", 
			{
			 firstName: $('#firstName').val(),
			 lastName:  $('#lastName').val(),
			 year: 		$("input[type='radio'][name='radio']:checked").val(), 
      		 address:   $('#address').val(),
      	     phoneNum:  $('#phoneNum').val(),
      	     email:     $('#email').val()
      	 	}, 
      	 	
			function(){
				
			}
		);

	});

});