$(".reg-button").click(function (event) 
{
	event.preventDefault();
	event.stopPropagation();
	var thisbutton = $(this);
	if($(this).parent().hasClass("literary-form"))
	{
		var r = confirm("Register for this event?");
		if(r)
		{
			var event_name = $(this).parent().find("#event_name").val();
			$.ajax({
				url : "partials/register_literary.php",
				data : {"event_name" : event_name},
				method : "POST"
			}).
			success(function(){
				$(thisbutton).html("REGISTERED");
				$(thisbutton).prop('disabled',true);
				$(thisbutton).css({"background-color": "rgb(50,200,50)"});
			});
		}
		else
		{
			//not registering
		}
	}
});

$(".junoon-button").click(function(event){
	event.stopPropagation();
	event.preventDefault();
	var thisbutton = $(this);
	var r = confirm("Register for this event?");
	if(r)
	{
		var event_name = $(this).parent().find("#event_name").val();
		var participants = $(this).parent().find("#participants").val();
		$.ajax({
			url : "partials/register_duet.php",
			data : 	{
						"event_name" : event_name,
						"participants" : participants
					},
			method : "POST"
		}).
		success(function(){
			$(thisbutton).html("REGISTERED");
			$(thisbutton).prop('disabled',true);
			$(thisbutton).css({"background-color": "rgb(50,200,50)"});
		});
	}
	else
	{
		//not registering
	}
});

$(".titan-button").click(function(event){
	event.stopPropagation();
	event.preventDefault();
	var thisbutton = $(this);
	var r = confirm("Register for this event?");
	if(r)
	{
		var event_name = $(this).parent().find("#event_name").val();
		$.ajax({
			url : "partials/register_single.php",
			data : 	{
						"event_name" : event_name
					},
			method : "POST"
		}).
		success(function(){
			$(thisbutton).html("REGISTERED");
			$(thisbutton).prop('disabled',true);
			$(thisbutton).css({"background-color": "rgb(50,200,50)"});
		});
	}
	else
	{
		//not registering
	}
});


