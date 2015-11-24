
$(document).ready(function(){
       $(".fancybox").fancybox();
       $('#facebook').hover(function(){
       $('#facebook').addClass('animated pulse');
       });
       $('#twitter').hover(function(){
       $('#twitter').addClass('animated pulse');
       });
       $('#googleplus').hover(function(){
       $('#googleplus').addClass('animated pulse');
       });
       $('#linkedin').hover(function(){
       $('#linkedin').addClass('animated pulse');
       });
    });



$(document).ready(function(){
$('ul.nav li.dropdown').hover(function() {
$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn();
}, 
function() {
 $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut();
});
 
$(window).scroll(function() {
	var count=0
  if ($(this).scrollTop() > count) {
    $('#carouShowHide').fadeIn();
    count+=1;
  }
  else if (count!=0) {
    $('#carouShowHide').fadeOut();
  }
});
$('#home').mouseover(function(){
$('#home').css('font-size','150%');

});
$('#home').mouseout(function(){
$('#home').css('font-size','100%');

});
$('#sitemap').mouseover(function(){
$('#sitemap').css('font-size','150%');

});
$('#sitemap').mouseout(function(){
$('#sitemap').css('font-size','100%');

});
$('#contactUs').mouseover(function(){
$('#contactUs').css('font-size','150%');

});
$('#contactUs').mouseout(function(){
$('#contactUs').css('font-size','100%');

});
$('#logIn').mouseover(function(){
$('#logIn').css('font-size','150%');

});
$('#logIn').mouseout(function(){
$('#logIn').css('font-size','100%');

});
$('#loginName').mouseover(function(){
$('#loginName').css('font-size','150%');

});
$('#loginName').mouseout(function(){
$('#loginName').css('font-size','100%');

});

$('#divcontainer img').on({
	mouseover:function(){
		$(this).css({
         'cursor':'pointer',
         'border-Color':'red'
		});

	},
	mouseout:function(){
		$(this).css({
         'cursor':'default',
        'border-Color':'white'
		});

	},
	click:function(){
		var imgurl=$(this).attr('src');
		$('#mainimg').attr('src',imgurl);
		
		 $('#link_img').attr('href',imgurl);
		
	}

});

$('#divcontainer1 img').on({
	mouseover:function(){
		$(this).css({
         'cursor':'pointer',
         'border-Color':'red'
		});

	},
	mouseout:function(){
		$(this).css({
         'cursor':'default',
        'border-Color':'white'
		});

	},
	click:function(){
		var imgurl=$(this).attr('src');
		$('#mainimg1').attr('src',imgurl);
		 $('#link_img1').attr('href',imgurl);
	}

});
$('#divcontainer2 img').on({
	mouseover:function(){
		$(this).css({
         'cursor':'pointer',
         'border-Color':'red'
		});

	},
	mouseout:function(){
		$(this).css({
         'cursor':'default',
        'border-Color':'white'
		});

	},
	click:function(){
		var imgurl=$(this).attr('src');
		$('#mainimg2').attr('src',imgurl);
		$('#link_img2').attr('href',imgurl);
	}

});
$('#divcontainer3 img').on({
	mouseover:function(){
		$(this).css({
         'cursor':'pointer',
         'border-Color':'red'
		});

	},
	mouseout:function(){
		$(this).css({
         'cursor':'default',
        'border-Color':'white'
		});

	},
	click:function(){
		var imgurl=$(this).attr('src');
		$('#mainimg3').attr('src',imgurl);
		$('#link_img3').attr('href',imgurl);
	}

});
$('#divcontainer4 img').on({
	mouseover:function(){
		$(this).css({
         'cursor':'pointer',
         'border-Color':'red'
		});

	},
	mouseout:function(){
		$(this).css({
         'cursor':'default',
        'border-Color':'white'
		});

	},
	click:function(){
		var imgurl=$(this).attr('src');
		$('#mainimg4').attr('src',imgurl);
		$('#link_img4').attr('href',imgurl);
	}

});
$('#divcontainer5 img').on({
	mouseover:function(){
		$(this).css({
         'cursor':'pointer',
         'border-Color':'red'
		});

	},
	mouseout:function(){
		$(this).css({
         'cursor':'default',
         'border-Color':'white'
		});

	},
	click:function(){
		var imgurl=$(this).attr('src');
		$('#mainimg5').attr('src',imgurl);
		$('#link_img5').attr('href',imgurl);
	}

});
$('#divcontainer6 img').on({
	mouseover:function(){
		$(this).css({
         'cursor':'pointer',
         'border-Color':'red'
		});

	},
	mouseout:function(){
		$(this).css({
         'cursor':'default',
         'border-Color':'white'
		});

	},
	click:function(){
		var imgurl=$(this).attr('src');
		$('#mainimg6').attr('src',imgurl);
		$('#link_img6').attr('href',imgurl);
	}

});
$('#divcontainer7 img').on({
	mouseover:function(){
		$(this).css({
         'cursor':'pointer',
         'border-Color':'red'
		});

	},
	mouseout:function(){
		$(this).css({
         'cursor':'default',
        'border-Color':'white'
		});

	},
	click:function(){
		var imgurl=$(this).attr('src');
		$('#mainimg7').attr('src',imgurl);
		$('#link_img7').attr('href',imgurl);
	}

});
//var myLatlng = new google.maps.LatLng(23.762185, 90.434462);
$('#user_message').keyup(function(){
  var max_length_message=200;
  var message_length= $('#user_message').val().length;
  var chars_left_message=max_length_message-message_length;
  if(chars_left_message<0){
    $('#user_message').css('border','1px solid red');
  }
  else{
  	$('#user_message').css('border','1px solid #59F2F7');
  }
  $('#user_feedback_characters').html(chars_left_message);

});
//Facebook like and share

});
