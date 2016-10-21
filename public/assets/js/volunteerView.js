$(document).ready(function(){
	$('#add').click(function() 
	{
		var data = {};
 		data.item = $('#item').val();
 		data.quantity = $('#quantity').val();
 		var url = '/volunteer/updateReq';

 		ajaxCall(data, url);
    });

    $('#refresh').click(function()
	{
		var data = {};
		var url = '/volunteer/dropReq';

		ajaxCall(data, url);
	});

	$('.delete').click(function()
	{
		var data = {};
		data.requirement = $(this).attr('req');
		var url = '/volunteer/deleteReq';

		ajaxCall(data, url);
	});
});

function ajaxCall(data, url)
{
	$.ajaxSetup(
	    {
	        headers:
	        {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
		$.ajax(
	    {
	        type: "POST",
	        url: url,
	        data: data,
	        dataType: "json",
	        success: function(data){
	        	location.reload();
	        },
	        error: function(jqXHR,testStatus,errorThrown){
	        	console.log(errorThrown);
	        }
		});   
}