$(document).ready(function(){

	$('#checkin').click(function(){

		$.post("checkIn.php", 
			{
			 email:   $('#email').val(),
			 eventId: $('#eventid').val()
      	 	}, 
      	 	
			function(){
				
			}
		);

	});

});