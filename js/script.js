
var news = [
	
	"Event Registrations are open. Prizes worth 2 Lakh to be won!",
	"Last Date for submission and counting likes for Mr and Ms Zeitgesit is 27 September.",
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
	},4000);

	$(".nav-image").mouseover(add_color);	//refer to the add function below

	$(".nav-image").mouseleave(remove_color);

	/*same thing for footer*/

	$(".social-image").mouseover(add_color);
	$(".social-image").mouseleave(remove_color);

	$("#logo").mouseover(add_color);
	$("#logo").mouseleave(remove_color);
});

function add_color()
{
	var src = $(this).attr('src');
	src = src.split(".");
	src = src[0]+'-color.png';
//	console.log(src);
	$(this).attr('src',src);
}

function remove_color()
{
	var src = $(this).attr('src');
	src = src.split("-color");
//	console.log(src);
	src = src[0] + '.png';
//	console.log(src);
	$(this).attr('src',src);

}