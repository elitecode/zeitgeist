
var news = [
	
	"Mr. and Ms. Zeitgeist has begun. Prizes Worth Rs. 15000! Check Events page for more Information.",
	"Zeitgeist 2014 | 9th - 11th October",
];

$(window).load(function(){
	$("body").fadeIn(2000);
});

$(document).ready(function(){

	$(".description").hide();

	$(".list").mouseover(function(){
		$(this).find(".description").show();
	});
	$(".list").mouseleave(function(){
		$(this).find(".description").hide();
	});

	var i = 0;

	setInterval(function(){
		if(i == 3)
			i = 0;

		$('#news').text(news[i]);
		i = i + 1;
	},2000);

	// setInterval(function(){
	// 	if(i == 3)
	// 		i = 0;

	// 	// $("#news").fadeOut(function(){
	// 	// 	$(this).text(news[i]).fadeIn();
	// 	// });

	// 	$('#news').animate({'opacity' : 0 }, 1000, function(){
	// 		console.log(i);
	// 	 	$(this).text(news[i]);
	// 	}).animate({'opacity':1}, 1000);

	// 	i = i + 1;
	// },2000);

});
