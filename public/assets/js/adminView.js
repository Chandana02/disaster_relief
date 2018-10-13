$(document).ready(function(){
// 	$('#add').click(function() 
// 	{
// 		var data = {};
//  		data.item = $('#item').val();
//  		data.quantity = $('#quantity').val();
//  		var url = '/volunteer/updateReq';

//  		ajaxCall(data, url);
//     });

 //    $('#refresh').click(function()
	// {
	// 	var data = {};
	// 	var url = '/volunteer/dropReq';

	// 	ajaxCall(data, url);
	// });

	$('.select').click(function()
	{
		var data = {};
		data.id = $(this).attr('appId');
		var url = '/admin/selectApp';
		alert('selecting applicant...')
		ajaxCall(data, url);
	});
	$('.drop').click(function()
	{
		var data = {};
		data.id = $(this).attr('appId');
		var url = '/admin/dropApp';

		ajaxCall(data, url);
	});
	$('.modify').click(function()
	{
		var data = {};
		data.id = $(this).attr('volId');
		var url = '/admin/assign';
		var area = prompt("Please enter Area:", "");
		if(area != null)
		{
			data.area = area;
			ajaxCall(data, url);
		}
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