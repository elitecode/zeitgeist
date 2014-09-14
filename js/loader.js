//$(document).ready(function(){
	var progress = 0;
    // soundBoard.loadAll(function () {
    //     progress.value = progress.value+1;
    // });
	var array = [
    	'images/tex.jpg',
		'images/about/1.png',
		"images/gallery/zeitgeist-tudu-1982.jpg",
        "images/gallery/zeitgeist-tudu-4866.jpg",
        "images/gallery/zeitgeist-yogesh-307.jpg",
        "images/gallery/zeitgeist-yogesh-39.jpg",
		"images/gallery/zeitgeist-yogesh-45.jpg",
		"images/gallery/zeitgeist-yogesh-287.jpg",
        "images/gallery/zeitgeist-yogesh-110.jpg",
        "img/photo-festival9.jpg" ,
        "images/gallery/zeitgeist-yogesh-24.jpg",
        "images/gallery/zeitgeist-tudu-1343.jpg",
        "images/gallery/zeitgeist-yogesh-384.jpg",
        "img/photo-festival13.jpg",
        "images/gallery/zeitgeist-yogesh-73.jpg",
        "img/photo-festival8.jpg",
        "img/photo-festival10.jpg" ,
        "images/gallery/zeitgeist-tudu-4817.jpg",
        "images/gallery/zeitgeist-tudu-4729.jpg",
        "images/gallery/zeitgeist-yogesh-133.jpg",
        "images/gallery/zeitgeist-yogesh-401.jpg",
        "images/gallery/zeitgeist-yogesh-118.jpg",
    	'images/people/Amit.jpg',
    	'images/people/Tushar.jpg',
    	'images/people/Vishal.jpg',
    	'images/people/Paul.jpg',
		'images/Icons-Register.png',
		'images/zwhite.png',
		'images/Icons-Contact.png',
		'images/Z-white-color.png',
		'images/Icons-Events-color.png',
		'images/Icons-Events.png',
		'images/Icons-Gallery.png',
		'images/Icons-Contact-color.png',
		'images/Icons-AboutUs-color.png',
		'images/Icons-Gallery-color.png',
		'images/Icons-Y.png',
		'images/Icons-Register-color.png',
		'images/Z-white.png',
		'images/Icons-F-color.png',
		'images/Icons-Sponsors-color.png',
		'images/Icons-Sponsors.png',
		'images/Icons-F.png',
		'images/Icons-Y-color.png',
		'images/New-Background.jpg',
		'images/Icons-AboutUs.png',
		'images/home/falak.jpg',
		'images/home/falak1.png',
		'images/home/lash1.png',
		'images/home/lash.jpg',
		'images/events/algo.jpg',
		'images/events/blindpainting.jpg',
		'images/events/codeomania.jpg',
		'images/events/dekode.jpg',
		'images/events/junoon.jpg',
		'images/events/mrandms.jpg',
		'images/events/nukkad.jpg',
		'images/events/saaz.jpg',
		'images/events/smackthat.jpg',
		'images/events/tarang.jpg',
		'images/events/timelining.jpg',
		'images/events/titan.jpg',
		'images/events/torque.jpg',
		'images/events/yatharth.jpg',
		'images/events/z.jpg',
		'images/events/zhunt.jpg',
		'images/events/zigmatics.jpg',
    ];
    $(array).each(function(){
        $('<img/>')
        .load(function() { progress = progress+1;

			    $(".dial").stop().animate({value: Math.ceil(progress/array.length*100)}, {
			       duration: 1000,
			       easing: "swing", 
			       progress: function() { 
			           $(".dial").val(Math.ceil(this.value)).trigger("change"); 
			       }
			    });

        	//$('.dial').val(Math.ceil(progress/52*100)).trigger("change");
    		
    		if(progress==array.length) loadpage()})
       // .error(function() { alert("error"); })
        .attr("src", this);
    });
	    
//});

function loadpage()
{
		document.getElementById("audio-player").play();
		sad();
		$("#audio-player").trigger("canpplay");
		$('<img/>').attr('src', 'images/New-Background.jpg').load(function() {
	        $(this).remove(); // prevent memory leaks as @benweet suggested
	        $('body').fadeOut('slow', function() {
			    $(this).css({'background-image':'url(images/New-Background.jpg)',
					'-moz-background-size':'cover',
					'-webkit-background-size' :'cover',
					'background-size' : 'cover',
					'background-repeat' : 'repeat',
					'background-attachment' :'fixed',
					'text-align' : 'center'}
	          );
			    $('#loader-box').hide();
				angular.element($('#maindisplay')).scope().$apply(function (){
					angular.element($('#maindisplay')).scope().webloader=false;
				});
			    
			}).fadeIn('slow');//.delay(1000).fadeTo('slow', 1);
	       //  $('body').css({
	       //  	'background-image':'url(images/New-Background.jpg)',
	       //    '-moz-background-size':'cover',
	       //    '-webkit-background-size' :'cover',
	       //    'background-size' : 'cover',
	       //    'background-repeat' : 'no-repeat !important',
	       //    'background-attachment' :'fixed',
	       //    'text-align' : 'center',
	      	// });
	      });
}